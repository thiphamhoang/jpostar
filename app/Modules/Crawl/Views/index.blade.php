@extends('backend.index')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    @include('backend/alert')
    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
               <h3 class="box-title">Công cụ Crawl bài viết</h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <form action="{{asset('admin/crawl')}}" method="get">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Link bài viết </label>
                                <input type="type" class="form-control" name="link" value="@if($link) {{$link}} @endif">
                           </div>
                        </div>
                        <div class="col-md-1">
                            <label>id thể loại </label>
                            <input type="type" class="form-control" name="cat" value="2">
                        </div>
                        <div class="col-md-1">
                            <label>id ngành</label>
                            <input type="type" class="form-control" name="job" value="10">
                        </div>
                        <div class="col-md-1">
                            <label>des TT</label>
                            <input type="number" class="form-control" name="des_n" value="0">
                        </div>
                        <div class="col-md-1">
                            <label>content TT</label>
                            <input type="number" class="form-control" name="content_n" value="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn btn-primary">Lấy dữ liệu</button>
                    </div>
                </form>

                <div>
                    @if($link)
                        @include('Crawl::simple_html_dom')
                        <?php
                            $arrContextOptions=array(
                                "ssl"=>array(
                                    "verify_peer"=>false,
                                    "verify_peer_name"=>false,
                                    ),
                                    'http' => array(
                                    'header' => array(
                                    'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.122 Safari/537.36',
                                    'cookie: ASP.NET_SessionId=aochch451ekbvv45azmmx13h; ignoredmember=; _ga=GA1.3.1624511905.1587654517; _gid=GA1.3.823068817.1588177831'
                                    ),
                                ),
                            );
                            $html = file_get_html($link, false, stream_context_create($arrContextOptions));
                            $title = $html -> find('h1.t-heading',0)->plaintext;
                            $content = $html -> find('.user-html__with-lazy-load',0);

                            if(isset($_GET['des_n'])){
                                $des_n = $_GET['des_n'];
                            }else{
                                $des_n = 0 ;
                            }
                            if(isset($_GET['content_n'])){
                                $content_n = $_GET['content_n'];
                            }else{
                                $content_n = 0 ;
                            }

                            $content_ul = $html -> find('.user-html__with-lazy-load ul',$content_n);
                            if($content_ul){
                                $content = $content_ul;
                            }

                            $des = $html -> find('.user-html__with-lazy-load p',$des_n)->plaintext;

                            $price = $html -> find('.js-purchase-price',0)->plaintext;
                            $price =  preg_replace('/[^0-9]/', '', $price);
                            if(is_numeric($price)){
                                $price_km = $price *23000;
                                $price = ($price_km/100*20)+$price_km;
                            }
                            $link_demo = $html -> find('.live-preview',0)->href;
                            $browser = $html -> find('.meta-attributes__attr-detail',3)->plaintext;
                            $file = $html -> find('.meta-attributes__attr-detail',4)->plaintext;
                            $img = $html -> find('.live-preview-btn--blue img',0)->srcset;
                            $img = explode(' ',$img);
                            $img = str_replace('amp;','',$img[0]);

                        ?>
                    
                        <form action="{{asset('admin/crawl/new')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                           
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input type="type" class="form-control" name="title" value="{{$title}}" onkeyup="ChangeToSlug();"  id="title_product">
                            </div>
                            
                            <!-- Url-->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">{{asset('')}}</div>
                                    </div>
                                    <input type="text" class="form-control" id="url_product" name="url" value="{{old('url')}}">
                                </div>
                            </div>
                           
                           
                           
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Mô tả</label>
                                     <textarea name="des" id="des">{{$des}}</textarea>
                                    {{F_tinymce('des')}}
                                </div>
                                <div class="col-md-6">
                                    <label>Nội dung</label>
                                     <textarea name="content" id="content">{{$content}}</textarea>
                                    {{F_tinymce('content')}}
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                </div>
                              
                                <div class="col-md-3">
                                    <div class="form-group">
                                        
                                        <label for="">ảnh </label> <a href="{{$img}}" target="_blank" >Down</a>
                                        <input type="text" class="form-control" name="img" value="" id="img">
                                        <span class="img_copyed text-success" style="display:none">
                                            Đã copy ảnh
                                        </span>
                                        <br>
                                        <button type="button" onclick="copyImg()">Copy img</button>
                                       
                                        <script>
                                            
                                            function copyImg() {
                                                /* Get the text field */
                                                var copyText = document.getElementById("img");

                                                /* Select the text field */
                                                copyText.select();
                                                copyText.setSelectionRange(0, 99999); /* For mobile devices */

                                                /* Copy the text inside the text field */
                                                navigator.clipboard.writeText(copyText.value);
                                                $('.img_copyed').css('display','');
                                                }
                                        </script>
                                        <img src="{{$img}}" height="70px" alt="">
                                    </div>
                                </div>
                                <script>
                                    ChangeToSlug();
                                    function ChangeToSlug() {
                                        var title, slug;
                                        //Lấy text từ thẻ input title_news
                                        title = document.getElementById("title_product").value;
                                        //Đổi chữ hoa thành chữ thường
                                        slug = title.toLowerCase();
                                        //Đổi ký tự có dấu thành không dấu
                                        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                                        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                                        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                                        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                                        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                                        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                                        slug = slug.replace(/đ/gi, 'd');
                                        //Xóa các ký tự đặt biệt
                                        slug = slug.replace(
                                            /\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi,
                                            '');
                                        //Đổi khoảng trắng thành ký tự gạch ngang
                                        slug = slug.replace(/ /gi, "-");
                                        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                                        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                                        slug = slug.replace(/\-\-\-\-\-/gi, '-');
                                        slug = slug.replace(/\-\-\-\-/gi, '-');
                                        slug = slug.replace(/\-\-\-/gi, '-');
                                        slug = slug.replace(/\-\-/gi, '-');
                                        //Xóa các ký tự gạch ngang ở đầu và cuối
                                        slug = '@' + slug + '@';
                                        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                                        //In slug ra textbox có id “url_news”
                                        document.getElementById('url_product').value = slug;
                                        document.getElementById('img').value = slug+'.jpg';
                                    }
    
                                </script>

                                <div class="col-md-12">
                                    <hr>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Link tất cả demo</label> <a href="http://preview.themeforest.net{{$link_demo}}" target="_blank">Xem</a>
                                        <input type="text" class="form-control" name="demo_link" value="http://preview.themeforest.net{{$link_demo}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>
                                {{-- link 1  --}}
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Link demo 1</label>
                                        <input type="text" class="form-control" name="demo_link_1" value="{{old('demo_link_1')}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Link ảnh demo 1 (không bắt buộc)</label>
                                        <input type="text" class="form-control" name="demo_img_1" value="{{old('demo_img_1')}}">
                                    </div>
                                </div>
                                {{-- link 2  --}}
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Link demo 2 (không bắt buộc)</label>
                                        <input type="text" class="form-control" name="demo_link_2" value="{{old('demo_link_2')}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Link ảnh demo 2 (không bắt buộc)</label>
                                        <input type="text" class="form-control" name="demo_img_2" value="{{old('demo_img_2')}}">
                                    </div>
                                </div>
                                {{-- link 3 --}}
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Link demo 3 (không bắt buộc)</label>
                                        <input type="text" class="form-control" name="demo_link_3" value="{{old('demo_link_3')}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Link ảnh demo 3 (không bắt buộc)</label>
                                        <input type="text" class="form-control" name="demo_img_3" value="{{old('demo_img_3')}}">
                                    </div>
                                </div>
                                {{-- link 4 --}}
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Link demo 4 (không bắt buộc)</label>
                                        <input type="text" class="form-control" name="demo_link_3" value="{{old('demo_link_4')}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Link ảnh demo 4 (không bắt buộc)</label>
                                        <input type="text" class="form-control" name="demo_img_3" value="{{old('demo_img_4')}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                </div>
                                <div class="col-md-2">
                                    <label>Giá bán</label>
                                    <input type="type" class="form-control" name="price_km" value="{{$price_km}}">
                                </div>
                                <div class="col-md-2">
                                    <label>Giá gốc</label>
                                    <input type="type" class="form-control" name="price" value="{{$price}}">
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Link tài liệu</label>
                                        <input type="text" class="form-control" name="document_link" value="{{old('document_link')}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">User id</label>
                                        <input type="text" class="form-control" name="user_id" value="375">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Link crawl</label>
                                        <input type="text" class="form-control" name="source_link" value="{{$link}}">
                                    </div>
                                </div>
                               
                            
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Trình duyệt </label>
                                        <input type="text" class="form-control" name="browsers" value="{{$browser}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">File </label>
                                        <input type="text" class="form-control" name="file" value="{{$file}}">
                                    </div>
                                </div>
                                

                                <div class="col-md-3">
                                    <!-- danh muc -->
                                    <div class="box box-danger">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Nhà cung cấp</h3>
                                        </div>
                                        <div class="box-body">
                                            <?php F_checkbox_cat_product($ncc_list_cat,$product= '',$ncc_cat->id); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <!-- ngành nghề -->
                                    <div class="box box-danger">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Ngành nghề</h3>
                                        </div>
                                        <div class="box-body">
                                            <?php F_checkbox_cat_product($nn_list_cat,$product='',$nn_cat->id); ?>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    var cat = $('input[name=cat]').val();
                                    var job = $('input[name=job]').val();
                                    $('#for-'+cat).prop('checked', true);
                                    $('#for-'+job).prop('checked', true);
                                    
                                </script>

                                <div class="col-md-3">
                                    <label for="">Tương thích thiết bị </label>
                                    <div class="form-group">
                                        
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value="Máy tính" name="device[]" id="desktop" checked>
                                            <label class="form-check-label" for="desktop">
                                                Máy tính
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value="Máy tính bảng" name="device[]" id="tablet" checked>
                                            <label class="form-check-label" for="tablet">
                                                Máy tính bảng
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value="Điện thoại" name="device[]" id="mobile" checked>
                                            <label class="form-check-label" for="mobile">
                                                Điện thoại
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <button type="submit" class="btn btn btn-primary">Lưu</button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>  
          </div>
  
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection

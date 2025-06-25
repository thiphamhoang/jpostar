@extends('backend.index')
@section('content')
<div class="content-wrapper">
    
    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="my-3">
                    <a class="btn btn-sm btn-primary" href="{{asset('admin/autocomment/contact')}}">Tên bình luận</a>
                    <a class="btn btn-sm btn-primary" href="{{asset('admin/autocomment/commentContent')}}">Nội dung bình luận</a>
                </div>
                <form clas="form-inline" action="{{url()->current()}}" method="get">
                    <div class="row">
                        <div class="col-md-2">
                            <select class="form-control form-control-sm mx-2" name="cat" onchange='if(this.value != 0) { this.form.submit(); }'>
                                <option value="all">Tất cả danh mục</option>
                                @foreach($cat_list as $cat_list_r)
                                    <option value="{{$cat_list_r->id}}" @if(isset($cat)) @if($cat == $cat_list_r->id) selected @endif @endif>{{$cat_list_r->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group input-group-sm" style="width: 200px;">
                                <input type="text" name="search" class="form-control pull-right" value="@if(isset($search)) {{$search}} @endif"
                                    placeholder="Tìm kiếm">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <a href="{{asset('admin/product')}}" class="btn btn-sm btn-light">xóa lọc</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách </h3>
                        <div class="box-tools">
                            
                        </div>
                    </div>
                    <div class="box-body table-responsive no-padding">
              
                            <table class="table table-hover">
                                <tr>
                                    <th>Tên</th>
                                    <th>Số lượng</th>
                                    <th>Danh mục</th>
                                    <th class="text-center">Ngày</th>
                                    <th class="text-center"></th>
                                    <th class="text-center">ID</th>
                                </tr>
                                @if(count($product) != 0)
                                @foreach($product as $key => $val)
                                <tr>
                                    <!-- cot tieu de -->
                                    <td class="">
                                        {{$val->title}}
                                    </td>
                                    <td class="">
                                        {{$val->count_review}}
                                    </td>
                                    {{-- danh muc  --}}
                                    <td>
                                        <?php
                                            if(isset($val -> f_cat)){
                                                foreach($val -> f_cat as $k => $cat_r){
                                                    if($k > 0){echo ', ';}echo $cat_r->name;
                                                }
                                            }
                                        ?>
                                    </td>
                                
                                    <!-- cot ngay dang  -->
                                    <td class="text-center">
                                        <?php 
                                        $date = date_create($val -> created_at);
                                        echo date_format($date,'d/m/Y').'<br />';
                                        echo date_format($date,'H:i:s');
                                    ?>
                                    </td>
                                    <td class="text-center">
                                        <a target="_blank" class="btn btn-sm btn-info" href="{{asset('product/'.$val->url.'.html')}}">
                                            Xem
                                        </a>
                                        <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#add_comment_{{$val->id}}">
                                            Bình luận
                                        </a>
                                        <div class="modal fade" id="add_comment_{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Thêm bình luận</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                                    </div>
                                                    <div class="modal-body text-left">
                                                        <form action="{{asset('admin/autocomment/addComment/'.$val->id)}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label>Số lượng bình luận</label>
                                                                <input type="number" name="count_commnent" class="form-control" value="1">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Đánh giá sao ngẫu nhiên</label>
                                                                <select name="review" class="form-control">
                                                                    <option value="4 5">Từ 4 - 5 sao</option>
                                                                    <option value="3 4">Từ 3 - 4 sao</option>
                                                                    <option value="2 3">Từ 2 - 3 sao</option>
                                                                    <option value="1 2">Từ 1 - 2 sao</option>
                                                                </select>
                                                            </div>
                                                            
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                            <button type="submit" class="btn btn-primary">Gửi</button>
                                                            
                                                        </form>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">{{$val-> id}}</td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="9" class="text-center">
                                        <h6>Không có bài viết đủ điều kiện lọc</h6>
                                    </td>
                                </tr>
                                @endif
                            </table>
                       
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        {{$product->appends(request()->input()) ->links()}}
                    </div>
                    <script language="JavaScript">
                        function toggle(source) {
                            checkboxes = document.getElementsByName('check[]');
                            for (var i = 0, n = checkboxes.length; i < n; i++) {
                                checkboxes[i].checked = source.checked;
                            }
                        }

                    </script>
                </div>

                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection

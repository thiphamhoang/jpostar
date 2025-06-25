 <div class="modal fade" id="price_new" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
               <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title" id="exampleModalCenterTitle">Thêm bảng giá</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                     <form action="{{asset('admin/price/'.$price_id.'/new')}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div>
                           <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="font-weight-bold"> Tiêu đề </label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label> Tiêu đề 2 </label>
                                    <input type="text" name="title_2" class="form-control">
                                </div>
                           </div>
                           <div class="form-group row">
                                <div class="col-md-4">
                                    <label class="font-weight-bold">Giá bán</label>
                                    <input type="text" name="price" class="form-control" value="0">
                                </div>
                                <div class="col-md-4">
                                    <label>Giá giảm </label>
                                    <input type="text" name="price_km" class="form-control" value="0">
                                </div>
                                <div class="col-md-4">
                                    <label>Phần trăm giảm</label>
                                    <input type="text" name="price_percent" class="form-control" value="0">
                                </div>
                           </div>
                           <div class="form-group row">
                                <div class="col-md-4">
                                    <label class="font-weight-bold">Đơn vị</label>
                                    <input type="text" name="unit" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label>Mô tả 1 </label>
                                    <input type="text" name="des" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label>Mô tả 2</label>
                                    <input type="text" name="des_2" class="form-control">
                                </div>
                           </div>
                           <div class="form-group row">
                                <div class="col-md-8">
                                    <label class="font-weight-bold">Link</label>
                                    <input type="text" name="link" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label>Nút bấm</label>
                                    <input type="text" name="button" class="form-control">
                                </div>
                               
                           </div>
                           <div class="form-group row">
                                <div class="col-md-12">
                                    <div>
                                            <label class="font-weight-bold">Thêm dịch vụ</label>
                                            <div class="row service">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <select class="form-control" name="service[1][status]" >
                                                            <option value="on">Mở</option>
                                                            <option value="off">Đóng</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="service[1][text]" placeholder="Tên">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div id="add_service_service">
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <span href="#" class="btn btn-sm btn-primary cursor" id="add_service">Thêm</span>
                                        </div>
                                    <script>
                                        $('#add_service').click(function(e){
                                            e.preventDefault();
                                            var count = $('.service').length;
                                            var key = count + 1;
                                            $('#add_service_service').append('<div class="mb-2 row service service_'+key+'"><div class="col-md-4"> <div class="form-group"> <select class="form-control" name="service['+key+'][status]" > <option value="on">Mở</option> <option value="off">Đóng</option> </select> </div> </div><div class="col-md-8"><div class="input-group-prepend"><input type="text"class="form-control"name="service['+key+'][text]"placeholder="Tên"><div class="input-group-text"><span class="xoa_it_service"data-row="service_'+key+'"><i class="fa fa-trash text-danger cursor"></i></span></div></div></div></div>');
                                        });
                                        //xoa truong vua them
                                        $('#add_service_service').on('click', '.xoa_it_service',function(e){
                                            e.preventDefault();
                                            var it = $(this).data('row');
                                            $('.'+it).remove();
                                        });
                                        //xoa truong da co
                                        $('.xoa_it_service').click(function(){
                                            var it = $(this).data('row');
                                            $('.'+it).remove();
                                        });
                                    </script>
                                </div> 
                            </div>


                           <!-- ảnh price  -->
                           <div class="form-group">
                                <div class="widget-img">
                                    <div class="img" id="img_group">
                                        <div class="button-del" id="button-del_group" style="" onclick="document.getElementById('imgInp_group').value = ''">
                                        <i class="fa fa-times-circle"></i>
                                        </div>
                                        <img width="200px" id="blah_group" src=""/>
                                    </div>
                                    <div class="">
                                        <label>Tải ảnh lên</label><br />
                                        <input type="file" name="img" class="form-controll" id="imgInp_group">
                                    </div>
                                </div>
                                <script>
                                    document.getElementById('button-del_group').style.display = "none";
                                    // hien thi anh truoc khi upload
                                    function readURL(input) {
                                    if (input.files && input.files[0]) {
                                        // hien thi div hinh anh
                                        document.getElementById('img_group').style.display = "block";
                                        var reader = new FileReader();
                
                                        reader.onload = function(e) {
                                        $('#blah_group').attr('src', e.target.result);
                                        }
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                    }
                                    $("#imgInp_group").change(function() {
                                    readURL(this);
                                    document.getElementById('button-del_group').style.display = "block";
                                    });
                
                
                                    // js xoa anh 
                                    $(document).ready(function(){
                                        $("#button-del_group").click(function(){
                                        // anh div hinh anh
                                        document.getElementById('img_group').style.display = "none";
                                        });
                                    });
                
                                </script>
                            </div>
                           
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Đóng</button>
                           <button type="submit" class="btn btn-sm btn-primary">Thêm mới</button>
                        </div>
                     </form>
                  </div> <!-- dong the modal -body -->
               </div>
            </div>
         </div>
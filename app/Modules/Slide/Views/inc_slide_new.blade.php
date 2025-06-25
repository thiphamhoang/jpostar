<div class="modal fade" id="slide_new" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
       <div class="modal-content">
       <div class="modal-header">
          <h6 class="modal-title" id="exampleModalCenterTitle"> Thêm mới ảnh </h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
             <form action="{{asset('admin/slide/'.$slide_id.'/img')}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div>
                   <div class="form-group">
                      <label class="font-weight-bold"> Tiêu đề ảnh silde</label>
                      <input name="title" class="form-control" required>
                   </div>
                   <!-- ảnh slide  -->
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
                    <div class="form-group">
                        <label>Hình ảnh Mobile</label>
                        {{F_input_image_2('','img_m','img_m_','source/slide')}}
                    </div> 
                   <!-- link  -->
                   <div class="form-group">
                      <label class="font-weight-bold"> Link ảnh</label>
                      {{F_input_basic('text',$value = old('link'),'link','','form-control','','')}}
                   </div>
                  
                   <div class="form-group">
                      <label class="font-weight-bold"> Mô tả</label>
                      {{F_input_textarea('','des','','form-control','','')}}
                   </div>
                   <!-- nut bam  -->
                   <div class="form-group row">
                      <div class="col-md-6">
                         <label class="font-weight-bold">Tên 2</label>
                         {{F_input_basic('text',$value = old('button'),'button','','form-control','','')}}
                      </div>
                      <!-- link nut bam-->
                      <div class="col-md-6">
                         <label class="font-weight-bold">Link nút bấm</label>
                         {{F_input_basic('text',$value = old('link_button'),'link_button','','form-control','','')}}
                      </div>
                   </div>
                   <!-- css class id  -->
                   <div class="form-group row">
                      <div class="col-md-6">
                         <label class="font-weight-bold">Class Css</label>
                         {{F_input_basic('text',$value = old('css_class'),'css_class','','form-control','','')}}
                         {{-- type, value, name, id,class , attri, placeholder --}}
                      </div>
                      <!-- css id -->
                      <div class="col-md-6">
                         <label class="font-weight-bold">Id Css</label>
                         {{F_input_basic('text',$value = old('css_id'),'css_id','','form-control','','')}}
                         {{-- type, value, name, id,class , attri, placeholder --}}
                      </div>
                      {{-- thu tu  --}}
                      <div class="col-md-6">
                         <label class="font-weight-bold">Thứ tự</label>
                         {{F_input_basic('number',$value = old('orderby'),'orderby','','form-control','required','')}}
                         {{-- type, value, name, id,class , attri, placeholder --}}
                      </div>
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
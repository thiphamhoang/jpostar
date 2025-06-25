@extends('backend.index')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
         <a href="{{asset('admin/slide')}}" class="btn btn-primary btn-sm">Quay lại</a>
         <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#slide_new">Thêm ảnh mới</button>
         <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#slide_new_fast">Thêm nhanh nhiều ảnh</button>
         @include('Slide::inc_slide_new')
         
         <div class="modal fade" id="slide_new_fast" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
               <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title" id="exampleModalCenterTitle"> Thêm mới ảnh </h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                     <form action="{{asset('admin/slide/'.$slide_id.'/img_fast')}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div>
                           <div class="form-group">
                              <div class="widget-img">
                                 <div class="">
                                    <label>Tải ảnh lên (bôi đen nhiều ảnh hoặc giữ nút shift)</label><br />
                                    <input type="file" name="img_fast[]" class="form-controll" multiple="multiple">
                                 </div>
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

    </section>
    @include('backend/alert')
    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
               <h3 class="box-title">Danh sách slide </h3>
            </div>
            <div class="box-body table-responsive no-padding">
               <table class="table table-hover">
                  <tr>
                     <th>Ảnh</th>
                     <th>Ảnh mobile</th>
                     <th>Tên</th>
                     <th class="text-center">Link</th>
                     <th class="text-center">id</th>
                     <th class="text-center"></th>
                  </tr>
                  @if(count($slide_img) != 0)
                     @foreach($slide_img as $key => $val)
                        <tr>
                           <!-- cot anh dai dien -->
                           <td class=""> 
                              @if($val->img)
                                 <img width="100px" src="{{asset('/source/slide/'.$val->img)}}" />
                              @else
                                  <img width="100px" src="{{asset('upload/theme/noimg.jpg')}}" />
                              @endif
                            </td>
                           <td class=""> 
                              @if($val->img_m)
                                 <img width="100px" src="{{asset('/source/slide/'.$val->img_m)}}" />
                              @else
                                  <img width="100px" src="{{asset('upload/theme/noimg.jpg')}}" />
                              @endif
                            </td>
                           <!-- cot tieu de -->
                           <td class="">
                              <div class="admin-list-post">
                                 <div class="si_title">
                                    <b  class="text-dark">{{$val->title}}</b>
                                 </div>
                                 <div class="si_title">{{$val->des}}
                                 </div>
                              </div>
                           </td>
                        
                           <!-- link  -->
                           <td  class="text-center">
                              @if($val -> link != '')
                                 <a href="{{$val -> link}}" target="_blank"> Xem</a>
                              @endif
                           </td>
                           <!-- id  -->
                           <td  class="text-center">
                              {{$val -> id}}
                           </td>
                           <td  class="text-center">
                               <!-- cot  trang thai  -->
                               <?php if($val->status == 'off'){ ?>
                                 <a href="<?php echo url()->current().'/status/'.$val->id; ?>">
                                    <i class="fa fa-exclamation-circle text-danger"></i>
                                 </a>
                              <?php }elseif($val->status == 'on'){ ?>
                                 <a href="<?php echo url()->current().'/status/'.$val->id; ?>">
                                    <i class="fa fa-check-circle text-success"></i>
                                 </a>
                              <?php } ?>
                              <!-- xoa -->
                              <a  href="" data-toggle="modal" data-target="#call_del_{{$val -> id}}">
                                 <i class="fa fa-trash text-danger"></i>
                              </a>
                              <div class="modal fade" id="call_del_{{$val -> id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-centered" role="document">   
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title"><i class="fa fa-trash text-danger"></i> Bạn có chắc chắn muốn xóa?</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                       </div>
                                       <div class="modal-body text-left">
                                          <!-- id thuoc tinh -->
                                          <b>Thông tin xóa: </b> {{$val -> title}}
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                                          <a href="<?php echo url()->current().'/del/'.$val->id; ?>" role="button" class="btn btn-danger">Ok Xóa</a>
                                       </div>
                                    </div>
                                 </div>    
                              </div>
                              <!-- sua  -->
                              <a  href="" data-toggle="modal" data-target="#call_edit_{{$val -> id}}">
                                 <i class="fa fa-edit text-primary"></i>
                              </a>
                              <div class="modal fade" id="call_edit_{{$val -> id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-centered modal-lg" role="document">   
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h6 class="modal-title" id="exampleModalCenterTitle"> Sửa hình ảnh slide </h6>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                          </button>
                                       </div>
                                       <div class="modal-body text-left">
                                          <form action="{{asset('admin/slide/'.$slide_id.'/img/edit/'.$val->id)}}" method="POST" enctype="multipart/form-data">
                                             <input type="hidden" name="_token" value="{{csrf_token()}}">
                                             <div>
                                                <div class="form-group">
                                                   <label class="font-weight-bold"> Tiêu đề ảnh silde</label>
                                                   <input name="title" class="form-control" value="{{$val -> title}}" type="text" required>
                                                </div>
                                                <!-- ảnh slide  -->
                                                <div class="form-group">
                                                   {{F_input_image($val -> img,'img',$val -> id,asset('/source/slide/'))}}
                                                </div>   
                                                <div class="form-group">
                                                   <label>Hình ảnh Mobile</label>
                                                   {{F_input_image_2($val -> img_m,'img_m','m_'.$val -> id,asset('/source/slide'))}}
                                                 </div>                 
                                                <!-- link  -->
                                                <div class="form-group">
                                                   <label class="font-weight-bold"> Link ảnh</label>
                                                   {{F_input_basic('text',$val -> link,'link','','form-control','','')}}
                                                </div>
                                             
                                                <div class="form-group">
                                                   <label class="font-weight-bold"> Mô tả</label>
                                                   {{F_input_textarea($val ->des,'des','','form-control','','')}}
                                                </div>
                                                <!-- nut bam  -->
                                                <div class="form-group row">
                                                   <div class="col-md-6">
                                                      <label class="font-weight-bold">Tên 2</label>
                                                      {{F_input_basic('text',$val -> button,'button','','form-control','','')}}
                                                   </div>
                                                   <!-- link nut bam-->
                                                   <div class="col-md-6">
                                                      <label class="font-weight-bold">Link nút bấm</label>
                                                      {{F_input_basic('text',$val -> link_button,'link_button','','form-control','','')}}
                                                   </div>
                                                </div>
                                                <!-- css class id  -->
                                                <div class="form-group row">
                                                   <div class="col-md-6">
                                                      <label class="font-weight-bold">Class Css</label>
                                                      {{F_input_basic('text',$val ->css_class,'css_class','','form-control','','')}}
                                                      {{-- type, value, name, id,class , attri, placeholder --}}
                                                   </div>
                                                   <!-- css id -->
                                                   <div class="col-md-6">
                                                      <label class="font-weight-bold">Id Css</label>
                                                      {{F_input_basic('text',$val ->css_id,'css_id','','form-control','','')}}
                                                      {{-- type, value, name, id,class , attri, placeholder --}}
                                                   </div>
                                                   {{-- thu tu  --}}
                                                   <div class="col-md-6">
                                                      <label class="font-weight-bold">Thứ tự</label>
                                                      {{F_input_basic('number',$val -> orderby,'orderby','','form-control','required','')}}
                                                      {{-- type, value, name, id,class , attri, placeholder --}}
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Đóng</button>
                                                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>    
                              </div>
                           </td>
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
               {{$slide_img->appends(request()->input()) ->links()}}
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
@extends('backend.index')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
         <a href="{{asset('admin/price')}}" class="btn btn-primary btn-sm">Quay lại</a>
         <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#price_new">Thêm bảng giá</button>
        @include('Price::inc_price_new')
    </section>
    @include('backend/alert')
    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
               <h3 class="box-title">Danh sách bảng giá </h3>
            </div>
            <div class="box-body table-responsive no-padding">
               <table class="table table-hover">
                  <tr>
                     <th>Ảnh</th>
                     <th>Tên</th>
                     <th class="text-center">Giá</th>
                     <th class="text-center">Link</th>
                     <th class="text-center">id</th>
                     <th class="text-center"></th>
                  </tr>
                  @if(count($price_detail) != 0)
                     @foreach($price_detail as $key => $val) 
                        <tr>
                           <!-- cot anh dai dien -->
                           <td class=""> 
                              @if($val->img)
                                 <img width="30px" src="{{asset('/source/price/'.$val->img)}}" />
                              @else
                                  <img width="30px" src="{{asset('upload/theme/noimg.jpg')}}" />
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
                        
                           <!-- gia  -->
                           <td  class="text-center">
                               {{number_format($val->price)}} đ
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
                                <a  href="" data-toggle="modal" data-target="#call_edit_{{$val -> id}}"  class="btn btn-sm btn-primary mx-2">
                                    <i class="fa fa-edit"></i> Sửa
                                </a>
                               
                              
                           </td>
                        </tr>
                        @include('Price::inc_price_edit')
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
               {{$price_detail->appends(request()->input()) ->links()}}
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
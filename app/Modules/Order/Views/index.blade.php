@extends('backend.index')
@section('content')
    <div class="content-wrapper">

    @include('backend/alert')
    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
               <h3 class="box-title">Danh sách đơn hàng  </h3>
            </div>
            <div class="box-body table-responsive no-padding">
               <table class="table table-hover">
                  <tr>
                     {{-- <th>Mã</th> --}}
                     <th>Tên</th>
                     <th>Điện thoại</th>
                     <th>Email</th>
                     <th class="text-center">Nội dung</th>
                     <th class="text-center">Thời gian</th>
                     <th class="text-center"></th>
                  </tr>
                  @if(count($order) != 0)
                     @foreach($order as $key => $val)
                        <tr>
                           <td class="">
                              {{$val->name}}
                           </td>
                           <td class="">
                              {{$val->tel}}
                           </td>
                           <td class="">
                              {{$val->email}}
                           </td>


                           <td  class="text-center">
                              {{$val->note}}
                           </td>

                            <td class="text-center">
                                <?php
                                $date = date_create($val -> created_at);
                                echo date_format($date,'d/m/Y').'<br />';
                                echo date_format($date,'H:i:s');
                            ?>
                            </td>
                           <td  class="text-center">

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
                                          <b>Thông tin xóa: </b> {{$val -> name}}
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
                                          <h6 class="modal-title" id="exampleModalCenterTitle"><i class="text-danger fa fa-edit"></i> Sửa thể loại</h6>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                          </button>
                                       </div>
                                       <div class="modal-body text-left">
                                            <form action="{{asset('admin/order/edit/'.$val->id)}}" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <div class="row">

                                                    <div class="col-md-4">
                                                       <div class="form-group">
                                                             <label>Họ và tên</label>
                                                                {{F_input_basic('text',$val->name,'name','','form-control','','')}}
                                                       </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                       <div class="form-group">
                                                             <label>Số điện thoại</label>
                                                                {{F_input_basic('text',$val->tel,'tel','','form-control','','')}}
                                                       </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                       <div class="form-group">
                                                                <label>Email</label>
                                                                {{F_input_basic('text',$val->email,'email','','form-control','','')}}
                                                       </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                       <div class="form-group">
                                                                <label>Nội dung</label>
                                                                <textarea name="note"  class="form-control" rows="10">{{$val->note}}</textarea>
                                                       </div>
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
               {{$order->appends(request()->input()) ->links()}}
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection

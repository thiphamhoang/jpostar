@extends('backend.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#call_new">Thêm mới</a>
        <a href="{{asset('admin/autocomment')}}" class="btn btn-primary btn-sm">Quay lại</a>
    </section>

    <div class="modal fade" id="call_new" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm Tên mới</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body text-left">
                    <form action="{{asset('admin/autocomment/contact/new_multi')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name_cat">Mỗi tên 1 dòng</label>
                            <textarea name="name" class="form-control" rows="10"></textarea>
                         </div>
                        
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                         <button type="submit" class="btn btn-primary">Gửi</button>
                        
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    @include('backend/alert')
    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
       
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
                                    <th>Email</th>
                                    <th class="text-center">Điện thoại</th>
                                    <th class="text-center"></th>
                                    <th class="text-center">ID</th>
                                </tr>
                                @if(count($contact) != 0)
                                @foreach($contact as $key => $val)
                                <tr>
                                    <!-- tene -->
                                    <td class="">
                                        {{$val->name}}
                                    </td>
                                    {{-- email  --}}
                                    <td>
                                        {{$val->email}}
                                    </td>
                                
                                    <!-- dien thoai -->
                                    <td class="text-center">
                                        {{$val->tel}}
                                    </td>
                                    <td class="text-center">
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
                                        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#call_edit_{{$val->id}}">
                                            Sửa
                                        </a>

                                        <div class="modal fade" id="call_edit_{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Sửa</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    <form action="{{asset('admin/autocomment/contact/edit/'.$val->id)}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Tên</label>
                                                            <input type="text" name="name" class="form-control" value="{{$val->name}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Điện thoại</label>
                                                            <input type="text" name="tel" class="form-control" value="{{$val->tel}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" name="email" class="form-control" value="{{$val->email}}">
                                                        </div>
                                                        
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                        <button type="submit" class="btn btn-primary">Gửi</button>
                                                        
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                        <!-- xoa -->
                                        <a href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#call_del_{{$val -> id}}">
                                            Xóa
                                        </a>
                                        
                                        <div class="modal fade" id="call_del_{{$val -> id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"><i class="fa fa-trash text-danger"></i>
                                                            Bạn có chắc chắn muốn xóa?</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-left">
                                                        <!-- id thuoc tinh -->
                                                        <b>Thông tin xóa: </b> {{$val -> name}}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                            data-dismiss="modal">Đóng</button>
                                                        <a href="<?php echo url()->current().'/del/'.$val->id; ?>"
                                                            role="button" class="btn btn-danger">Ok Xóa</a>
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
                        {{$contact->appends(request()->input()) ->links()}}
                    </div>
                    
                </div>

                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection

@extends('backend.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a href="{{asset(url()->current().'/new')}}" class="btn btn-danger btn-sm">Thêm mới</a>
    </section>
    @include('backend/alert')
    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <form clas="form-inline" action="{{url()->current()}}" method="get">
                    <div class="row">
                        <div class="col-md-2">
                            <select class="form-control form-control-sm mx-2" name="display" onchange='if(this.value != 0) { this.form.submit(); }'>
                                <option value="50">Hiển thị</option>
                                <option value="50" @if(isset($display)) @if($display == '50') selected @endif @endif>50</option>
                                <option value="75" @if(isset($display)) @if($display == '75') selected @endif @endif>75</option>
                                <option value="100" @if(isset($display)) @if($display == '100') selected @endif @endif>100</option>
                            </select>
                        </div>
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
                            <a href="{{asset('admin/post')}}" class="btn btn-sm btn-light">xóa lọc</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách bài viết </h3>
                        <div class="box-tools">
                            
                        </div>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <form action="{{asset('admin/post/'.$post_type->url.'/action')}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <table class="table table-hover">
                                <tr>
                                    <th scope="col" width="1%"><input type="checkbox" value="" onClick="toggle(this)"></th>
                                    <th>Ảnh</th>
                                    <th>Tên</th>
                                    <th>Danh mục</th>
                                    <th class="text-center">Ngày</th>
                                    <th class="text-center"></th>
                                    <th class="text-center">ID</th>
                                </tr>
                                @if(count($post) != 0)
                                @foreach($post as $key => $val)
                                <tr>
                                    <td><input type="checkbox" value="{{$val->id}}" name="check[]"></td>
                                    <!-- cot anh dai dien -->
                                    <td class="">
                                        @if($val->img)
                                        <img width="30px" src="{{asset('/source/post/'.$val->img)}}" />
                                        @else
                                        <img width="30px" src="{{asset('upload/theme/noimg.jpg')}}" />
                                        @endif
                                    </td>
                                    <!-- cot tieu de -->
                                    <td class="">
                                        <div class="admin-list-post">
                                            <div class="admin-list-post-title">
                                                <a href="{{ asset('admin/post/'.$post_type->url.'/edit/'.$val->id)}}">
                                                    <b class="text-dark">{{$val->title}}</b>
                                                </a>
                                            </div>

                                        </div>
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
                                        <a href="" data-toggle="modal" data-target="#call_del_{{$val -> id}}">
                                            <i class="fa fa-trash text-danger"></i>
                                        </a>
                                        {{-- xem  --}}
                                        @if(isset($val->f_cat))
                                            <a href="{{asset($val->url.'.html')}}">
                                                xem
                                            </a>
                                        @endif
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
                                                        <b>Thông tin xóa: </b> {{$val -> title}}
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
                          
                            <button type="submit" class="btn btn-sm btn-light" name="action" value="del">
                                Xóa lựa chọn
                            </button>
                            <button type="submit" class="btn btn-sm btn-light" name="action" value="status">
                                Thay đổi trạng thái
                            </button>
                        </form>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        {{$post->appends(request()->input()) ->links()}}
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

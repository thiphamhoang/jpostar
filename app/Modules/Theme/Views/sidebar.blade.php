@extends('backend.index')
@section('content')
<div class="content-wrapper"  style="background-color: #ecf0f5;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <a href="{{asset('admin/dashboard/')}}" class="btn btn-primary btn-sm">Quay lại</a>

      <h3>Sửa sidebar</h3>
      @include('backend/alert')
    </section>

    <!-- Main content -->
      <section class="content">
         <div class="row">
            <!-- danh sach widget -->
            <div class="col-md-2">
               <ul class="list-group" id="sortable">
                  @if(count($sidebar_list) > 0)
                     @foreach($sidebar_list as $val)
                        <li id="item_{{$val->id}}" class="ui-state-default list-group-item d-flex justify-content-between align-items-center  ">
                           <a class="@if($val -> status != 'on') text-danger @endif" href="{{asset('admin/theme/sidebar/'.$val->id)}}">
                             {{$val->name}}
                           </a>
                        </li>
                     @endforeach
                  @endif
               </ul>
               <div class="dropdown">
                <button class="btn btn-primary btn-sm mt-2 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Thêm hàng
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                   <a class="dropdown-item" href="{{asset('admin/theme/sidebar_new/img')}}"><i class="fa fa-plus text-sm"></i> Hình ảnh</a>
                   <a class="dropdown-item" href="{{asset('admin/theme/sidebar_new/img_bg')}}"><i class="fa fa-plus text-sm"></i> Hình nền</a>
                   <a class="dropdown-item" href="{{asset('admin/theme/sidebar_new/content')}}"><i class="fa fa-plus text-sm"></i> Thêm Nội dung</a>
                   {{-- <a class="dropdown-item" href="{{asset('admin/theme/sidebar_new/menu')}}"><i class="fa fa-plus text-sm"></i> Thêm Menu</a>
                   <a class="dropdown-item" href="{{asset('admin/theme/sidebar_new/tin_tuc')}}"><i class="fa fa-plus text-sm"></i> Thêm tin tức</a>
                   <a class="dropdown-item" href="{{asset('admin/theme/sidebar_new/video_youtube')}}"><i class="fa fa-plus text-sm"></i> Video Youtube</a> --}}
                </div>
             </div>

            </div>
            <!-- ket thuc danh sach widget -->
            <!-- danh sach widget -->
            <div class="col-md-10">
               <div class="box box-primary p-3">
                    Chọn 1 sidebar hoặc thêm mới
               </div>
            </div>
            <!-- ket thuc danh sach  -->
         </div>

      </section>
  </div>
@endsection

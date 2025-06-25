@extends('backend.index')
@section('content')
<div class="content-wrapper" style="background-color: #ecf0f5;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        
        <h3 class="m-3">Sửa thông tin trang: {{$theme->title}}</h3>
        <a href="{{asset('admin/dashboard')}}" class="btn btn-primary btn-sm">Quay lại</a>
        <a href="{{asset('admin/theme/'.$theme_id.'/info')}}" class="btn btn-primary btn-sm"><i class="fa fa-cog"></i> Cấu hình SEO</a>
        <a href="{{asset('admin/theme/'.$theme_id.'/row/'.$row_first_id)}}" class="btn btn-primary btn-sm"><i class="fa fa-palette"></i>  Sửa giao diện</a>

        @include('backend/alert')
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-2">
                @include('Theme::inc/inc_row')
            </div>
            <div class="col-md-5">
                <form action="{{asset('admin/theme/'.$theme->id.'/info')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="box-title">
                                Tối ưu SEO
                            </div>
                        </div>
                        <!-- widget group meta  -->
                        <div class="box-body">
                            <!-- toi uu seo -->
                            <!-- tieu de bài viết  -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Tiêu đề SEO <title></title>"
                                    name="title_seo" value="{{$theme -> title_seo}}">
                            </div>
                            <!-- mô tả bài viết  -->
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="des_seo"
                                    placeholder="Mô tả SEO (meta description)">{{$theme -> des_seo}}</textarea>
                            </div>
                            <!-- meta keyword bài viết  -->
                            <div class="form-group">
                                <input type="text" class="form-control" rows="3" name="key_seo"
                                    placeholder="Từ khóa SEO, cách nhau dấu phẩy (meta keyword)"
                                    value="{{$theme -> key_seo}}">
                            </div>
                            <!-- index-->
                            <div class="form-group">
                                <select class="form-control" name="index_meta">
                                    <option value="INDEX, FOLLOW" @if($theme -> index_meta == 'INDEX, FOLLOW')
                                        {{'selected'}} @endif>INDEX, FOLLOW</option>
                                    <option value="NOINDEX, FOLLOW" @if($theme -> index_meta == 'NOINDEX, FOLLOW')
                                        {{'selected'}} @endif>NOINDEX, FOLLOW</option>
                                    <option value="INDEX, NOFOLLOW" @if($theme -> index_meta == 'INDEX, NOFOLLOW')
                                        {{'selected'}} @endif>INDEX, NOFOLLOW</option>
                                    <option value="NOINDEX, NOFOLLOW" @if($theme -> index_meta == 'NOINDEX, NOFOLLOW')
                                        {{'selected'}} @endif>NOINDEX, NOFOLLOW</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    @if($theme->type == 'home')
                        {{-- phan head  --}}
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <div class="box-title">
                                    Cài đặt head
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label><i class="fa fa-image"></i> Ảnh favicon (kích thước tối đa 100pixel x
                                        100pixel)</label>
                                    {{F_input_image($theme->favicon,'favicon','edit_favicon',asset('/source/theme/'))}}
                                </div>
                                <div class="form-group">
                                    <label><i class="fa fa-image"></i> Ảnh hiển thị mạng xã hội cho trang chủ (facebook,
                                        zalo)</label>
                                    {{F_input_image_2($theme->og_image,'og_image','edit_og_image',asset('/source/theme/'))}}
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold"><i class="fa fa-book-reader"></i> Code head</label>
                                    <textarea name="head" class="form-control" id="" cols="30"
                                        rows="10">{{$theme->head}}</textarea>
                                </div>
                            </div>
                        </div>
                    @endif
                    {{-- gui  --}}
                    <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                </form>
            </div>
            <!-- ket thuc danh sach  -->
        </div>

    </section>
</div>
@endsection

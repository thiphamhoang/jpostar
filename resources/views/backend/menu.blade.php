<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <!-- trang chu -->

            <li class="<?php if(Request::segment(2) == 'dashboard'){echo 'active';} ?>">
                <a data-project="no" href="{{asset('admin/dashboard')}}">
                    <i class="fa fa-home"></i> <span>Trang chủ</span>
                </a>
            </li>


            @can('post_view')
                <li class="<?php if(Request::segment(5) == 'bai-viet'){echo 'active';} ?>">
                    <a href="{{asset('admin/post/bai-viet')}}">
                        <i class="fas fa-edit"></i> <span>Bài viết</span>
                    </a>
                </li>
                <li class="<?php if(Request::segment(5) == 'service'){echo 'active';} ?>">
                    <a href="{{asset('admin/post/service')}}">
                        <i class="fas fa-edit"></i> <span>Dịch vụ</span>
                    </a>
                </li>
 
            @endcan


            @can('form_view')
            <li class="<?php if(Request::segment(4) == 'order'){echo 'active';} ?>">
                <a href="{{asset('admin/order')}}">
                    <i class="fab fa-wpforms"></i> <span>Liên hệ</span>
                </a>
            </li>
            @endcan
            @can('cat_view')
            <li class="<?php if(Request::segment(4) == 'cat'){echo 'active';} ?>">
                <a href="{{asset('admin/cat')}}">
                    <i class="fab fa-buffer"></i> <span>Danh mục</span>
                </a>
            </li>
            @endcan

            @can('menu_view')
            <li class="<?php if(Request::segment(4) == 'menu'){echo 'active';} ?>">
                <a href="{{asset('admin/menu/0')}}">
                    <i class="fa fa-list"></i> <span>Menu</span>
                </a>
            </li>
            @endcan
            @can('admin_user_view')
            <li class="<?php if(Request::segment(4) == 'user'){echo 'active';} ?>">
                <a href="{{asset('admin/user')}}">
                    <i class="fa fa-user"></i> <span>Tài khoản</span>
                </a>
            </li>
            @endcan
            @can('slide_view')
            <li class="<?php if(Request::segment(4) == 'slide'){echo 'active';} ?>">
                <a href="{{asset('admin/slide')}}">
                    <i class="fa fa-photo-video"></i> <span>Slide</span>
                </a>
            </li>
            @endcan
            <li class="treeview <?php if( Request::segment(4) == 'them'){echo 'active';} ?>">
                <a href="#">
                    <i class="fa fa-palette"></i> <span>Cài đặt website</span>
                    <span class="pull-right-container"><i class="fa fa-arrow-circle-down pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    @can('theme_view')
                        @foreach($_theme_list_ as $theme_m)
                            <li class="<?php if(Request::segment(5) == 'info'){echo 'active';} ?>">
                                <a href="{{asset('admin/theme/'.$theme_m->id.'/info')}}">
                                    <i class="fa fa-cog"></i> <span>{{$theme_m->title}}</span>
                                </a>
                            </li>
                        @endforeach

                    @endcan

                </ul>
            </li>


        </ul>
    </section>
</aside>

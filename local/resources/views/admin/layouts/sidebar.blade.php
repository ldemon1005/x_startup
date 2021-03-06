<link rel="stylesheet" type="text/css" href="css/aside.css">
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
{{-- <a href="index3.html" class="brand-link">
  <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
       style="opacity: .8">
  <span class="brand-text font-weight-light">AdminLTE 3</span>
</a> --}}

<!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <div class="avatarImgSidebar" style="background: url('{{asset('')}}') no-repeat center /cover;">
                </div>
            </div>
            <div class="info">
                <a href="#" class="d-block">X-startup
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#"
                       class="nav-link @if (Request::segment(2) == 'account') active @endif">
                        <i class="fa fa-user"></i>
                        <p>
                            Quản lí tài khoản
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('list_user')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Danh sách tài khoản</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#"
                       class="nav-link @if (Request::segment(2) == 'group') active @endif">
                        <i class="fa fa-users"></i>
                        <p>
                            Quản lý nhóm
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('list_group')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Danh sách nhóm</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#"
                       class="nav-link @if (Request::segment(2) == 'question') active @endif">
                        <i class="fa fa-question"></i>
                        <p>
                            Quản lý phản hồi
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('list_question')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Danh sách phản hồi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#"
                       class="nav-link @if (Request::segment(2) == 'article') active @endif">
                        <i class="fa fa-newspaper"></i>
                        <p>
                            Quản lý tin tức
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('list_article')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Danh sách tin tức</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('form_article',0)}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#"
                       class="nav-link @if (Request::segment(2) == 'careers') active @endif">
                        <i class="fa fa-user-md"></i>
                        <p>
                            Quản lý ngành nghề
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('list_career')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Danh sách ngành nghề</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('form_career',0)}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="{{ asset('logout') }}" class="nav-link">
                        <i class="fa fa-sign-out"></i>
                        <p>
                            Đăng xuất
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
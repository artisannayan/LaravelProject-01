<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="#">
                            <img src="{{ asset('backend') }}/img/authors/avatar1.jpg" class="img-circle" alt="User Image"></a>
                        <div class="content-profile">
                            <h4 class="media-heading">Addison</h4>
                            <ul class="icon-list">
                                <li>
                                    <a href="users.html">
                                        <i class="fa fa-fw ti-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen.html">
                                        <i class="fa fa-fw ti-lock"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="edit_user.html">
                                        <i class="fa fa-fw ti-settings"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="fa fa-fw ti-shift-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <li>
                        <a href="#">
                            <i class="menu-icon ti-desktop"></i>
                            <span class="mm-text ">Dashboard 1</span>
                        </a>
                    </li>
                    <li class="active" id="active">
                        <a href="{{route('dashboard')}}">
                            <i class="menu-icon ti-layout-list-large-image"></i>
                            <span class="mm-text ">Dashboard 2</span>
                        </a>
                    </li>

                    <li class="menu-dropdown">
                        <a href="javascript:void(0)">
                            <i class="menu-icon ti-check-box"></i>
                            <span>Category</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw ti-receipt"></i> Add New Category
                                    <span class="fa arrow"></span>
                                </a>
                               
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-fw ti-clipboard"></i> View All Category
                                    <span class="fa arrow"></span>
                                </a>
                            </li>
                        </ul>
                    </li>

             <li class="menu-dropdown">
                        <a href="javascript:void(0)">
                            <i class="menu-icon ti-check-box"></i>
                            <span>Product</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('product.create')}}">
                                    <i class="fa fa-fw ti-receipt"></i> Add New Product
                                    <span class="fa arrow"></span>
                                </a>
                               
                            </li>
                            <li>
                                <a href="{{route('product.index')}}">
                                    <i class="fa fa-fw ti-clipboard"></i> View All Product
                                    <span class="fa arrow"></span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- / .navigation --> </div>
            <!-- menu --> </section>
        <!-- /.sidebar --> </aside>
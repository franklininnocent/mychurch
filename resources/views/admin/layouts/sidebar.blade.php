<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset("bower_components/admin-lte/dist/img/sh.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sacred<b>Heart</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset("bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar text-sm flex-column na" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard<i class="right fas "></i></p>
                    </a>

                </li>

                <li class="nav-item has-treeview {!! Request::is('administrator/family/*')  ? ' active menu-open' : '' !!}">
                    <a href="#" class="nav-link {!! Request::is('administrator/family/*') ? ' active' : '' !!}">
                        <i class="nav-icon fa fa-users"></i>
                        <p>Family Manager<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ url('administrator/family/list') }}"
                               class="nav-link {!! Request::is('administrator/family/*') ? 'active ' : '' !!}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p></a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {!! Request::is('administrator/family/*')  ? ' active menu-open' : '' !!}">
                    <a href="#" class="nav-link {!! Request::is('administrator/family/*') ? ' active' : '' !!}">
                        <i class="nav-icon fa fa-users"></i>
                        <p>BCC Manager<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ url('administrator/family/list') }}"
                               class="nav-link {!! Request::is('administrator/family/*') ? 'active ' : '' !!}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p></a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview {!! Request::is('administrator/global-settings/*')  ? ' active menu-open' : '' !!}">
                    <a href="#" class="nav-link {!! Request::is('administrator/global-settings/*') ? ' active' : '' !!}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Global Settings<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ url('administrator/global-settings/parish/list') }}"
                               class="nav-link {!! Request::is('administrator/global-settings/parish/*') ? 'active ' : '' !!}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Parish Manager</p></a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>User Manager<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sample</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Sacrament Manager<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sample</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {!! Request::is('admin/settings/*')  ? ' active menu-open' : '' !!}">
                    <a href="#" class="nav-link {!! Request::is('admin/settings/*') ? ' active' : '' !!}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Settings<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ url('admin/settings/task_status/list') }}"
                               class="nav-link {!! Request::is('admin/settings/task_status/*') ? 'active ' : '' !!}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Task Status</p></a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/settings/service_type/list') }}"
                               class="nav-link {!! Request::is('admin/settings/service_type/*') ? 'active ' : '' !!}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Service Types</p></a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/settings/service/list') }}"
                               class="nav-link {!! Request::is('admin/settings/service/*') ? 'active ' : '' !!}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Services</p></a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/settings/role/list') }}"
                               class="nav-link {!! Request::is('admin/settings/role/*') ? 'active ' : '' !!}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Roles</p></a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/settings/business/profile') }}"
                               class="nav-link {!! Request::is('admin/settings/business/*') ? 'active ' : '' !!}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Business Profile</p></a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/settings/invoice') }}"
                               class="nav-link {!! Request::is('admin/settings/invoice/*') ? 'active ' : '' !!}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p></a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/settings/customer-invoice') }}"
                               class="nav-link {!! Request::is('admin/settings/customer-invoice/*') ? 'active ' : '' !!}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Customer Invoice</p></a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Layout Options
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation + Sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/boxed.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Boxed</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Sidebar <small>+ Custom Area</small></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-topnav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Navbar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-footer.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Footer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Collapsed Sidebar</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

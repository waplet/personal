<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="#"><i class="fa fa-image fa-fw"></i> Portfolio<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level {{ Request::is('admin/product/edit/*') ? 'in' : '' }}">
                    <li {{ (Request::is('admin/product') ? 'class="active"' : '') }}>
                        <a href="{{ url('admin/product') }}">View Products</a>
                    </li>
                    <li {{ (Request::is('admin/product/create') ? 'class="active"' : '') }}>
                        <a href="{{ url('admin/product/create') }}">Add Product</a>
                    </li>
                </ul>
            </li>
            <li {{ (Request::is('admin/') ? 'class="active"' : '') }}>
                <a href="{{ url ('admin/') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li {{ (Request::is('*charts') ? 'class="active"' : '') }}>
                <a href="{{ url ('admin/charts') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Charts</a>
                <!-- /.nav-second-level -->
            </li>
            <li {{ (Request::is('*tables') ? 'class="active"' : '') }}>
                <a href="{{ url ('admin/tables') }}"><i class="fa fa-table fa-fw"></i> Tables</a>
            </li>
            <li {{ (Request::is('*forms') ? 'class="active"' : '') }}>
                <a href="{{ url ('admin/forms') }}"><i class="fa fa-edit fa-fw"></i> Forms</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                        <a href="{{ url ('admin/panels') }}">Panels and Collapsibles</a>
                    </li>
                    <li {{ (Request::is('*buttons') ? 'class="active"' : '') }}>
                        <a href="{{ url ('admin/buttons' ) }}">Buttons</a>
                    </li>
                    <li {{ (Request::is('*notifications') ? 'class="active"' : '') }}>
                        <a href="{{ url('admin/notifications') }}">Alerts</a>
                    </li>
                    <li {{ (Request::is('*typography') ? 'class="active"' : '') }}>
                        <a href="{{ url ('admin/typography') }}">Typography</a>
                    </li>
                    <li {{ (Request::is('*icons') ? 'class="active"' : '') }}>
                        <a href="{{ url ('admin/icons') }}"> Icons</a>
                    </li>
                    <li {{ (Request::is('*grid') ? 'class="active"' : '') }}>
                        <a href="{{ url ('admin/grid') }}">Grid</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li {{ (Request::is('*blank') ? 'class="active"' : '') }}>
                        <a href="{{ url ('admin/blank') }}">Blank Page</a>
                    </li>
                    <li>
                        <a href="{{ url ('admin/login') }}">Login Page</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li {{ (Request::is('*documentation') ? 'class="active"' : '') }}>
                <a href="{{ url ('admin/documentation') }}"><i class="fa fa-file-word-o fa-fw"></i> Documentation</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
 <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.users') }}"><i class="fa fa-users fa-fw"></i> Người dùng</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Lĩnh vực<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="
                                    {{ route('admin.categories') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.create.category') }}">Thêm mới</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('admin.jobs') }}"><i class="fa fa-cube fa-fw"></i> Công việc
                        </li>
                        <li>
                            <a href="{{ route('admin.companies') }}"><i class="fas fa-archive"></i> Công ty</a>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
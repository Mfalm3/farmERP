<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('/')}}" class="site_title"><i class="fa fa-paw"></i> <span>{{config('app.name')}}</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{auth()->user()->name}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Dashboard</a>
                    </li>
                    <li><a><i class="fa fa-exchange"></i>Inventory <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/seed/stock">Seed Stock</a></li>
                            <li><a href="/seed/inventory">In the Pipeline</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-leaf"></i>Seed Records <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/seed/plant">Seed Plant</a></li>
                            <li><a href="/seed/report">Seeds Report</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-cart-plus"></i>Order Records <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/orders/create">Add Order</a></li>
                            <li><a href="/orders">View Orders</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-line-chart"></i>Sales Records <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/sales/create">Add Sales</a></li>
                            <li><a href="/sales">View Sales</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-dollar"></i>Expenses <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/expenses/create">Add Expenses</a></li>
                            <li><a href="/expenses">View Expenses</a></li>
                            <li><a href="/suppliers">Suppliers</a></li>
                        </ul>
                    </li>
                    <li><a href="/employees"><i class="fa fa-users"></i> Employee Records</a>
                    </li>
                    <li><a href="/reports"><i class="fa fa-pie-chart"></i> Reports</a>
                    </li>
                    <li><a><i class="fa fa-cogs"></i>Settings <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Role Managment</a></li>
                            <li><a href="#">Configuration</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        @include('partials._sidenav_footer')
    </div>
</div>
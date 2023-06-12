<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="/welcome" class="site_title"> <img src="{{ asset('images/logo.PNG') }}" alt="..." height="50px">
                <span>E-Posyandu</span></a>
        </div>
        <div class="clearfix"></div>

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="/welcome"><i class="fa fa-home"></i> Home </a>
                    </li>
                    <li><a><i class="fa fa-eyedropper"></i> Kategori Vaksinasi <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/category-vaccines"><i class="fa fa-table"></i> Data kategori vaksin</a></li>
                            <li><a href="/category-vaccines/create"><i class="fa fa-edit"></i> Tambah kategori
                                    vaksin</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user-md"></i> Bidan <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/midwives"><i class="fa fa-table"></i> Data Bidan</a></li>
                            <li><a href="/midwives/create"><i class="fa fa-edit"></i> Tambah data bidan</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-child"></i> Anak <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/children"><i class="fa fa-table"></i> Data Anak</a></li>
                            <li><a href="/children/create"><i class="fa fa-edit"></i> Tambah data anak</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-calendar"></i> Jadwal Vaksinasi <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/vaccination-schedules"><i class="fa fa-table"></i> Data Jadwal Vaksinasi</a></li>
                            <li><a href="/vaccination-schedules/create"><i class="fa fa-edit"></i> Tambah data jadwal</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Pendaftaran Vaksinasi <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/vaccination-registrations"><i class="fa fa-table"></i> Data Pendaftaran</a></li>
                            <li><a href="/vaccination-registrations/create"><i class="fa fa-edit"></i> Daftar</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>

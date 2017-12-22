<!-- BEGIN HEADER MENU -->
<div class="page-header-menu">
    <div class="container-fluid">
        <!-- BEGIN HEADER SEARCH BOX -->
        <form class="search-form" action="page_general_search.html" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="query">
                <span class="input-group-btn">
                                            <a href="#" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
            </div>
        </form>
        <!-- END HEADER SEARCH BOX -->
        <!-- BEGIN MEGA MENU -->
        <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
        <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
        <div class="hor-menu  ">
            <ul class="nav navbar-nav">
                <li class="menu-dropdown classic-menu-dropdown ">
                    <a href="#"> Dashboard
                        <span class="arrow"></span>
                    </a>
                    <ul class="dropdown-menu pull-left">
                        <li class=" ">
                            <a href="index.html" class="nav-link  ">
                                <i class="icon-bar-chart"></i> Default Dashboard
                                <span class="badge badge-success">1</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="dashboard_2.html" class="nav-link  ">
                                <i class="icon-bulb"></i> Dashboard 2 </a>
                        </li>
                        <li class=" ">
                            <a href="dashboard_3.html" class="nav-link  ">
                                <i class="icon-graph"></i> Dashboard 3
                                <span class="badge badge-danger">3</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-dropdown mega-menu-dropdown  ">
                    <a href="javascript:;"> Research
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" style="min-width: 710px">
                        <li>
                            <div class="mega-menu-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="mega-menu-submenu">
                                            <li>
                                                <a href="ui_colors.html"> Color Library </a>
                                            </li>
                                            <li>
                                                <a href="ui_general.html"> General Components </a>
                                            </li>
                                            <li>
                                                <a href="ui_buttons.html"> Buttons </a>
                                            </li>
                                            <li>
                                                <a href="ui_buttons_spinner.html"> Spinner Buttons </a>
                                            </li>
                                            <li>
                                                <a href="ui_confirmations.html"> Popover Confirmations </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="mega-menu-submenu">
                                            <li>
                                                <a href="maps_vector.html"> Vector Maps </a>
                                            </li>
                                            <li>
                                                <a href="ui_timeline.html"> Timeline 1 </a>
                                            </li>
                                            <li>
                                                <a href="ui_timeline_2.html"> Timeline 2 </a>
                                            </li>
                                            <li>
                                                <a href="ui_timeline_horizontal.html"> Horizontal Timeline </a>
                                            </li>
                                            <li>
                                                <a href="ui_page_progress_style_1.html"> Page Progress Bar - Flash </a>
                                            </li>
                                            <li>
                                                <a href="ui_page_progress_style_2.html"> Page Progress Bar - Big Counter </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="mega-menu-submenu">
                                            <li>
                                                <a href="ui_alerts_api.html"> Metronic Alerts API </a>
                                            </li>
                                            <li>
                                                <a href="ui_session_timeout.html"> Session Timeout </a>
                                            </li>
                                            <li>
                                                <a href="ui_idle_timeout.html"> User Idle Timeout </a>
                                            </li>
                                            <li>
                                                <a href="ui_modals.html"> Modals </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="menu-dropdown classic-menu-dropdown">
                    <a href="javascript:;"> Development
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu pull-left">
                        <li class=" ">
                            <a href="layout_mega_menu_light.html" class="nav-link  "> Light Mega Menu </a>
                        </li>
                        <li class=" ">
                            <a href="layout_top_bar_light.html" class="nav-link  "> Light Top Bar Dropdowns </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-dropdown mega-menu-dropdown mega-menu-full">
                    <a href="javascript:;"> Toools
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" style="min-width: ">
                        <li>
                            <div class="mega-menu-content">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="mega-menu-submenu">
                                            <li>
                                                <h3>Online Research</h3>
                                            </li>
                                            <li>
                                                <a href="{{ route('github.search') }}"> GitHub profile</a>
                                            </li>
                                            <li>
                                                <a href="#"> Facebook All in One </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="mega-menu-submenu">
                                            <li>
                                                <h3>Image Forensic</h3>
                                            </li>
                                            <li>
                                                <a href="#"> RGB analytics</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="mega-menu-submenu">
                                            <li>
                                                <h3>Reverse Engineering</h3>
                                            </li>
                                            <li>
                                                <a href="#"> Software </a>
                                            </li>
                                            <li>
                                                <a href="#"> Malware analytics </a>
                                            </li>
                                            <li>
                                                <a href="#"> Binary </a>
                                            </li>
                                            <li>
                                                <a href="#"> CTF </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="mega-menu-submenu">
                                            <li>
                                                <h3>OWASP</h3>
                                            </li>
                                            <li>
                                                <a href="#"> XSS </a>
                                            </li>
                                            <li>
                                                <a href="#"> CSRF </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="menu-dropdown mega-menu-dropdown mega-menu-full">
                    <a href="javascript:;"> Hack Around
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" style="min-width: ">
                        <li>
                            <div class="mega-menu-content">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="mega-menu-submenu">
                                            <li>
                                                <h3>EWAY</h3>
                                            </li>
                                            <li>
                                                <a href="{{ route('github.search') }}"> Fingerprints</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="menu-dropdown classic-menu-dropdown ">
                    <a href="javascript:;"> More
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu pull-left">
                        <li class="dropdown-submenu ">
                            <a href="javascript:;" class="nav-link nav-toggle ">
                                <i class="icon-settings"></i> Form Stuff
                                <span class="arrow"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class=" ">
                                    <a href="form_controls.html" class="nav-link "> Bootstrap Form
                                        <br>Controls </a>
                                </li>
                                <li class=" ">
                                    <a href="form_controls_md.html" class="nav-link "> Material Design
                                        <br>Form Controls </a>
                                </li>
                                <li class=" ">
                                    <a href="form_validation.html" class="nav-link "> Form Validation </a>
                                </li>
                                <li class=" ">
                                    <a href="form_validation_states_md.html" class="nav-link "> Material Design
                                        <br>Form Validation States </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu ">
                            <a href="javascript:;" class="nav-link nav-toggle ">
                                <i class="icon-briefcase"></i> Tables
                                <span class="arrow"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class=" ">
                                    <a href="table_static_basic.html" class="nav-link "> Basic Tables </a>
                                </li>
                                <li class=" ">
                                    <a href="table_static_responsive.html" class="nav-link "> Responsive Tables </a>
                                </li>
                                <li class=" ">
                                    <a href="table_bootstrap.html" class="nav-link "> Bootstrap Tables </a>
                                </li>
                                <li class="dropdown-submenu ">
                                    <a href="javascript:;" class="nav-link nav-toggle"> Datatables
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="">
                                            <a href="table_datatables_managed.html" class="nav-link "> Managed Datatables </a>
                                        </li>
                                        <li class="">
                                            <a href="table_datatables_buttons.html" class="nav-link "> Buttons Extension </a>
                                        </li>
                                        <li class="">
                                            <a href="table_datatables_colreorder.html" class="nav-link "> Colreorder Extension </a>
                                        </li>
                                        <li class="">
                                            <a href="table_datatables_rowreorder.html" class="nav-link "> Rowreorder Extension </a>
                                        </li>
                                        <li class="">
                                            <a href="table_datatables_scroller.html" class="nav-link "> Scroller Extension </a>
                                        </li>
                                        <li class="">
                                            <a href="table_datatables_fixedheader.html" class="nav-link "> FixedHeader Extension </a>
                                        </li>
                                        <li class="">
                                            <a href="table_datatables_responsive.html" class="nav-link "> Responsive Extension </a>
                                        </li>
                                        <li class="">
                                            <a href="table_datatables_editable.html" class="nav-link "> Editable Datatables </a>
                                        </li>
                                        <li class="">
                                            <a href="table_datatables_ajax.html" class="nav-link "> Ajax Datatables </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END MEGA MENU -->
    </div>
</div>
<!-- END HEADER MENU -->
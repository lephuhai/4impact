@extends('layouts.app')

@section('styles')
    <style>
        .page-head {
            border-bottom: 1px solid #d5cfdb;
            box-shadow: 0 2px 0 rgba(0, 0, 0, .03);
            position: relative;
        }

        .page-content {
            padding: 0;
        }

        .portlet.light.portlet-fit > .portlet-body {
            padding: 30px 20px 20px;
        }

        .organization-home .nav-header {
            padding: 0 0 10px;
            margin: 0;
        }

        .organization-home .nav-header.with-divider {
            border-top: 1px solid #e2dee6;
            padding-top: 30px;
        }

        .nav-header {
            margin-bottom: 8px;
            text-transform: uppercase;
            font-size: 12px;
            color: #968ba0;
            font-weight: 600;
            line-height: 1;
        }

        .nav {
            /*margin-bottom: 20px;*/
            padding-left: 0;
            list-style: none;
        }

        .nav-stacked {
            margin-bottom: 20px;
        }

        .nav-stacked li {
            margin-bottom: 6px;
        }

        .nav-stacked > li {
            float: none;
        }

        .nav > li, .nav > li > a {
            position: relative;
            display: block;
        }

        .nav-stacked li.active a, .nav-stacked li.active a:hover {
            border: 0;
            background: none;
            color: #343c45;
            font-weight: 600;
        }

        .nav-stacked > li + li {
            margin-top: 2px;
            margin-left: 0;
        }

        .nav-stacked li {
            margin-bottom: 6px;
        }

        .nav-stacked > li {
            float: none;
        }

        .nav-stacked li > a:active, .nav-stacked li > a:focus, .nav-stacked li > a:hover {
            background: none;
            color: #161319;
        }

        .nav > li, .nav > li > a {
            position: relative;
            display: block;
        }

        .nav-stacked li > a {
            font-size: 14px;
            line-height: 1.5;
            padding: 0;
            margin: 4px 0;
            display: block;
            border: 0;
            background: none;
            color: #493e54;
            position: relative;
        }

        /*.org-sidebar .nav-stacked li.active a:after {*/
        /*left: -30px;*/
        /*}*/
        .nav-stacked li.active a:after, .nav-stacked li.active a:focus:after, .nav-stacked li.active a:hover:after {
            position: absolute;
            display: block;
            content: "";
            top: 2px;
            bottom: 3px;
            left: -15px;
            width: 4px;
            background: #6c5fc7;
        }

        .organization-home .box, .organization-home .issue-list {
            margin-bottom: 25px;
        }

        .box.empty {
            padding: 20px;
            text-align: center;
        }

        .box {
            background: #fff;
            border: 1px solid #e2dee6;
            border-radius: 3px;
            margin: 0 0 20px;
            box-shadow: 0 1px 0 rgba(0, 0, 0, .03);
        }

        h4 {
            font-size: 22px;
        }

        h1, h2, h3, h4, h5, h6 {
            margin: 0 0 20px;
            font-weight: 600;
            line-height: 1;
        }

        .btn-default {
            color: #493e54;
            background: #fff;
            font-weight: 600;
            background-image: -webkit-linear-gradient(top, #fff, #fcfbfc);
            background-image: -o-linear-gradient(top, #fff 0, #fcfbfc 100%);
            background-image: linear-gradient(180deg, #fff 0, #fcfbfc);
            background-repeat: repeat-x;
            border-color: #c1b8ca;
            box-shadow: 0 2px 0 rgba(0, 0, 0, .03);
        }

        .btn-group-sm > .btn, .btn-sm {
            font-size: 12px;
            padding: 4px 9px;
        }

        .btn-sm .icon-refresh {
            position: relative;
            font-size: 14px;
            font-weight: bold;
            top: 2px;
        }

        .btn-sidebar-header {
            float: right;
            font-size: 12px;
            color: #625471;
            font-weight: 600;
            line-height: 1em;
        }

        a, a:hover {
            text-decoration: none;
            -webkit-transition: color .2s linear;
            -o-transition: color linear .2s;
            transition: color .2s linear;
        }

        a:hover {
            color: #315cac;
        }

        .iframe-trends {
            border: 1px solid #e2dee6;
            box-shadow: 0 1px 0 rgba(0, 0, 0, .03)
        }

    </style>
@endsection

@section('content')
    <!-- END PAGE BREADCRUMBS -->
    <!-- BEGIN PAGE CONTENT INNER -->
    <div class="page-content-inner organization-home">
        <div class="portlet light portlet-fit ">
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-2 org-sidebar hidden-xs">
                        <section>
                            <h6 class="nav-header">Organization</h6>
                            <ul class="nav nav-stacked">
                                <li @if(Route::currentRouteName() == 'dashboard.index') class="active" @endif>
                                    <a href="{{ route('dashboard.index') }}">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#">Projects &amp; Teams</a>
                                </li>
                                <li>
                                    <a href="#">Stats</a>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <h6 class="nav-header with-divider">Issues</h6>
                            <ul class="nav nav-stacked">
                                <li @if(Route::currentRouteName() == 'dashboard.index') class="active" @endif>
                                    <a href="{{ route('dashboard.index') }}">Dashboard</a>
                                </li>
                                <li class="">
                                    <a href="#">Projects &amp; Teams</a>
                                </li>
                                <li class="">
                                    <a href="#">Stats</a>
                                </li>
                            </ul>
                        </section>

                        <section>
                            <h6 class="nav-header with-divider">Manage</h6>
                            <ul class="nav nav-stacked">
                                <li @if(Route::currentRouteName() == 'manage.revenue') class="active" @endif>
                                    <a href="{{ route('manage.revenue') }}">Revenue</a>
                                </li>
                            </ul>
                        </section>
                    </div>

                    @yield('dashboard_content')

                </div>
            </div>
        </div>
    </div>

@endsection
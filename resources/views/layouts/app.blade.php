<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="#1 Toools for social listening and data visualization" />
    <meta content="machine" name="author" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/layouts/layout3/css/themes/blue-hoki.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="/assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>

    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">


    <title>{{ config('app.name', '4Impact') }}</title>

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    @yield('styles')
</head>
<body class="page-container-bg-solid page-header-menu-fixed">
<div class="page-wrapper">
    <div class="page-wrapper-row">
        <div class="page-wrapper-top">
            <!-- BEGIN HEADER -->
            <div class="page-header">

                @include('layouts.header')

                @include('layouts.menu')

            </div>
            <!-- END HEADER -->
        </div>
    </div>
    <div class="page-wrapper-row full-height">
        <div class="page-wrapper-middle">
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">

                        <img id="nyancat" src="/img/nyancat.gif" alt="Nyancat Runner">

                        <div class="container-fluid">
                            <!-- BEGIN PAGE TITLE -->
                            <div class="page-title">
                                <h1>Machine Worker </h1>
                            </div>
                            <!-- END PAGE TITLE -->
                            <!-- BEGIN PAGE TOOLBAR -->
                            <div class="page-toolbar">
                                <!-- BEGIN THEME PANEL -->
                                <div class="btn-group btn-theme-panel">
                                    <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-settings"></i>
                                    </a>
                                    <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <h3>THEME COLORS</h3>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <ul class="theme-colors">
                                                            <li class="theme-color theme-color-default" data-theme="default">
                                                                <span class="theme-color-view"></span>
                                                                <span class="theme-color-name">Default</span>
                                                            </li>
                                                            <li class="theme-color theme-color-blue-hoki" data-theme="blue-hoki">
                                                                <span class="theme-color-view"></span>
                                                                <span class="theme-color-name">Blue Hoki</span>
                                                            </li>
                                                            <li class="theme-color theme-color-blue-steel" data-theme="blue-steel">
                                                                <span class="theme-color-view"></span>
                                                                <span class="theme-color-name">Blue Steel</span>
                                                            </li>
                                                            <li class="theme-color theme-color-yellow-orange" data-theme="yellow-orange">
                                                                <span class="theme-color-view"></span>
                                                                <span class="theme-color-name">Orange</span>
                                                            </li>
                                                            <li class="theme-color theme-color-yellow-crusta" data-theme="yellow-crusta">
                                                                <span class="theme-color-view"></span>
                                                                <span class="theme-color-name">Yellow Crusta</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <ul class="theme-colors">
                                                            <li class="theme-color theme-color-green-haze" data-theme="green-haze">
                                                                <span class="theme-color-view"></span>
                                                                <span class="theme-color-name">Green Haze</span>
                                                            </li>
                                                            <li class="theme-color theme-color-red-sunglo" data-theme="red-sunglo">
                                                                <span class="theme-color-view"></span>
                                                                <span class="theme-color-name">Red Sunglo</span>
                                                            </li>
                                                            <li class="theme-color theme-color-red-intense" data-theme="red-intense">
                                                                <span class="theme-color-view"></span>
                                                                <span class="theme-color-name">Red Intense</span>
                                                            </li>
                                                            <li class="theme-color theme-color-purple-plum" data-theme="purple-plum">
                                                                <span class="theme-color-view"></span>
                                                                <span class="theme-color-name">Purple Plum</span>
                                                            </li>
                                                            <li class="theme-color theme-color-purple-studio" data-theme="purple-studio">
                                                                <span class="theme-color-view"></span>
                                                                <span class="theme-color-name">Purple Studio</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 seperator">
                                                <h3>LAYOUT</h3>
                                                <ul class="theme-settings">
                                                    <li> Theme Style
                                                        <select class="theme-setting theme-setting-style form-control input-sm input-small input-inline tooltips" data-original-title="Change theme style" data-container="body" data-placement="left">
                                                            <option value="boxed" selected="selected">Square corners</option>
                                                            <option value="rounded">Rounded corners</option>
                                                        </select>
                                                    </li>
                                                    <li> Layout
                                                        <select class="theme-setting theme-setting-layout form-control input-sm input-small input-inline tooltips" data-original-title="Change layout type" data-container="body" data-placement="left">
                                                            <option value="boxed" selected="selected">Boxed</option>
                                                            <option value="fluid">Fluid</option>
                                                        </select>
                                                    </li>
                                                    <li> Top Menu Style
                                                        <select class="theme-setting theme-setting-top-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change top menu dropdowns style" data-container="body"
                                                                data-placement="left">
                                                            <option value="dark" selected="selected">Dark</option>
                                                            <option value="light">Light</option>
                                                        </select>
                                                    </li>
                                                    <li> Top Menu Mode
                                                        <select class="theme-setting theme-setting-top-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) top menu" data-container="body"
                                                                data-placement="left">
                                                            <option value="fixed">Fixed</option>
                                                            <option value="not-fixed" selected="selected">Not Fixed</option>
                                                        </select>
                                                    </li>
                                                    <li> Mega Menu Style
                                                        <select class="theme-setting theme-setting-mega-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change mega menu dropdowns style" data-container="body"
                                                                data-placement="left">
                                                            <option value="dark" selected="selected">Dark</option>
                                                            <option value="light">Light</option>
                                                        </select>
                                                    </li>
                                                    <li> Mega Menu Mode
                                                        <select class="theme-setting theme-setting-mega-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) mega menu" data-container="body"
                                                                data-placement="left">
                                                            <option value="fixed" selected="selected">Fixed</option>
                                                            <option value="not-fixed">Not Fixed</option>
                                                        </select>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END THEME PANEL -->
                            </div>
                            <!-- END PAGE TOOLBAR -->
                        </div>
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE CONTENT BODY -->
                    <div class="page-content">

                        @yield('content')

                    </div>
                    <!-- END PAGE CONTENT BODY -->
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
        </div>
    </div>
    <div class="page-wrapper-row">
        <div class="page-wrapper-bottom">
            <!-- BEGIN FOOTER -->

            @include('layouts.footer')

            <!-- END FOOTER -->
        </div>
    </div>
</div>
<!-- BEGIN QUICK NAV -->
<nav class="quick-nav">
    <a class="quick-nav-trigger" href="#0">
        <span aria-hidden="true"></span>
    </a>
    <ul>
        <li>
            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank" class="active">
                <span>Purchase Metronic</span>
                <i class="icon-basket"></i>
            </a>
        </li>
        <li>
            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/reviews/4021469?ref=keenthemes" target="_blank">
                <span>Customer Reviews</span>
                <i class="icon-users"></i>
            </a>
        </li>
        <li>
            <a href="http://keenthemes.com/showcast/" target="_blank">
                <span>Showcase</span>
                <i class="icon-user"></i>
            </a>
        </li>
        <li>
            <a href="http://keenthemes.com/metronic-theme/changelog/" target="_blank">
                <span>Changelog</span>
                <i class="icon-graph"></i>
            </a>
        </li>
    </ul>
    <span aria-hidden="true" class="quick-nav-bg"></span>
</nav>
<div class="quick-nav-overlay"></div>
<!-- END QUICK NAV -->
<!--[if lt IE 9]>
<script src="/assets/global/plugins/respond.min.js"></script>
<script src="/assets/global/plugins/excanvas.min.js"></script>
<script src="/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="/assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
<script src="/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->

<script src="/assets/global/scripts/base.components.min.js"></script>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}

    @yield('scripts')
</body>
</html>

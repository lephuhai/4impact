@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="/assets/pages/css/profile.min.css">

    <style>
        .form-group p.message {
            margin: 4px 0 0 0;
            font-size: 13px;
            line-height: 1.5;
            color: #999;
        }

        .form-group label {
            line-height: 1.5em;
            font-weight: 600;
        }
    </style>
@endsection

@section('content')

    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="#">{{ Auth::user()->getAuthIdentifier() }}</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Profile</span>
        </li>
    </ul>

    <div class="page-content-inner">
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div class="profile-sidebar">
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet bordered">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic">
                            <img src="/assets/layouts/layout3/img/avatar.png" class="img-responsive" alt=""> </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name"> machine </div>
                            <div class="profile-usertitle-job"> Publisher </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->
                        <div class="profile-userbuttons">
                            <button type="button" class="btn btn-circle green-haze btn-xs"><i class="fa fa-check"></i> Đã kích hoạt</button>
                        </div>

                        <!-- END SIDEBAR BUTTONS -->
                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li @if(Route::currentRouteName() == 'profile.account') class="active" @endif>
                                    <a href="{{ route('profile.account') }}">
                                        <i class="icon-home"></i> Profile </a>
                                </li>
                                <li @if(Route::currentRouteName() == 'profile.password') class="active" @endif>
                                    <a href="{{ route('profile.password') }}">
                                        <i class="icon-lock"></i> Password </a>
                                </li>
                                <li @if(Route::currentRouteName() == 'profile.social_profiles') class="active" @endif>
                                    <a href="{{ route('profile.social_profiles') }}">
                                        <i class="icon-social-facebook"></i> Social Profiles</a>
                                </li>
                                <li @if(Route::currentRouteName() == 'profile.notifications') class="active" @endif>
                                    <a href="{{ route('profile.notifications') }}">
                                        <i class="icon-envelope"></i> Email Notifications</a>
                                </li>
                                <li @if(Route::currentRouteName() == 'profile.sessions') class="active" @endif>
                                    <a href="{{ route('profile.sessions') }}">
                                        <i class="icon-shield"></i> Sessions</a>
                                </li>
                            </ul>
                        </div>
                        <!-- END MENU -->
                    </div>
                    <!-- END PORTLET MAIN -->
                </div>
                <!-- END BEGIN PROFILE SIDEBAR -->
                <!-- BEGIN PROFILE CONTENT -->
                @yield('profile_content')
                <!-- END PROFILE CONTENT -->
            </div>
        </div>
    </div>
@endsection


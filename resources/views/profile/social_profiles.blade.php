@extends('layouts.profile.app')

@section('styles')

    @parent

    <style>
        div.connection {
            margin: 15px 0 0 0;
            color: #fff;
            font-weight: bold;
        }

        .form-btn {
            font-weight: 600;
            color: #fff;
        }

        .auth-twitter {
            background-color: #1da1f2;
        }

        .auth-facebook {
            background-color: #3b5998;
        }

        .form-btn.auth-twitter:hover, .form-btn.auth-twitter:focus {
            background-color: #0d95e8;
            color: #fff;
        }

        .form-btn.auth-facebook:hover, .form-btn.auth-facebook:focus {
            background-color: #344e86;
            color: #fff;
        }

    </style>

@endsection

@section('profile_content')

    <div class="profile-content">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light">
                    <div class="portlet-title tabbable-line">
                        <div class="caption caption-md">
                            <i class="icon-globe theme-font hide"></i>
                            <span class="caption-subject font-blue-madison bold uppercase">Social Profiles</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-pane">
                            <form role="form">
                                <div class="form-group">
                                    <label class="control-label">Twitter</label>
                                    <input disabled="disabled" type="text" title="Twitter" class="form-control" name="twitter">
                                    <div class="connection group">
                                        <a href="#" class="form-btn btn auth-twitter"><i class="fa fa-twitter"></i> Connect to Twitter</a>
                                    </div>
                                    <p class="message">
                                        One-click sign in
                                    </p>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Facebook</label>
                                    <input disabled="disabled" type="text" title="Facebook" class="form-control" name="facebook">
                                    <div class="connection group">
                                        <a href="#" class="form-btn btn auth-facebook"><i class="fa fa-facebook"></i> Connect to Facebook</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@extends('layouts.profile.app')

@section('profile_content')

    <div class="profile-content">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light">
                    <div class="portlet-title tabbable-line">
                        <div class="caption caption-md">
                            <i class="icon-globe theme-font hide"></i>
                            <span class="caption-subject font-blue-madison bold uppercase">Change password</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-pane active" id="tab_1_1">
                            <form role="form" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label">Current Password <span class="required">*</span></label>
                                    <input type="password" title="Old Password" class="form-control" name="current-password">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">New Password <span class="required">*</span></label>
                                    <input type="password" title="New Password" class="form-control" name="password">
                                    <p class="message">
                                        Minimum 6 characters
                                    </p>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Re-type New Password <span class="required">*</span></label>
                                    <input type="password" title="Re-type New Password" class="form-control" name="password_confirmation">
                                </div>

                                <div class="margiv-top-10">
                                    <button type="submit" class="btn green-haze">Change</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@extends('layouts.profile.app')

@section('profile_content')

    <div class="profile-content">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light">
                    <div class="portlet-title tabbable-line">
                        <div class="caption caption-md">
                            <i class="icon-globe theme-font hide"></i>
                            <span class="caption-subject font-blue-madison bold uppercase">Account</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-pane active" id="tab_1_1">
                            <form role="form" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label">Name <span class="required">*</span></label>
                                    <input spellcheck="false" type="text" placeholder="Name" class="form-control" name="fullname" value="Hai Le Phu">
                                    <p class="message">
                                        We’re big on real names around here, so people know who’s who
                                    </p>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Username</label>
                                    <input type="text" placeholder="Username" class="form-control" value="machine">
                                    <p class="message">
                                        Your Impact URL: https://4impact.vn/<strong><span id="username">machine</span></strong>
                                    </p>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input type="text" placeholder="youremail@email.com" class="form-control" value="lephuhai0511@gmail.com">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Phone Number</label>
                                    <input title="Phone Number" type="text" class="form-control" value="0963296583">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Location</label>
                                    <input type="text" class="form-control" title="Location">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Website</label>
                                    <input type="text" class="form-control" title="Website">
                                    <p class="message">
                                        Your home page, blog or company site, e.g. http://aboutme.vn
                                    </p>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Bio</label>
                                    <textarea title="Bio" class="form-control" name="bio" id="bio" cols="30" rows="4"></textarea>
                                </div>
                                <div class="margiv-top-10">
                                    <button type="submit" class="btn green-haze">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
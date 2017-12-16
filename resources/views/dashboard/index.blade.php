@extends('layouts.app')

@section('content')

    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="index.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Layouts</span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMBS -->
    <!-- BEGIN PAGE CONTENT INNER -->
    <div class="page-content-inner">
        <div class="note note-info">
            <p> To set fixed mega menu apply <code>page-header-menu-fixed</code> to the body element. </p>
        </div>
        <div class="portlet light portlet-fit ">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green bold uppercase">Basic Portlet</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                        <i class="icon-cloud-upload"></i>
                    </a>
                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                        <i class="icon-wrench"></i>
                    </a>
                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                        <i class="icon-trash"></i>
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <p> Hi! This is an amazing UI! Is there a way to turn sidebar completely off with a simple body class, like that which is used to minimize the sidebar? Also, I’m looking for a way to make portlets fill the vertical
                    space between the fixed header and fixed footer. I know that full height divs are a chore, but I’m wondering if you have already written any code that checks the height of the window and adjusts the
                    height of an element that I could re-purpose or extend for these full height content areas? If you have, I’d love a tip on where to find it in app.js or wherever else. Otherwise any other suggestions
                    you may have. Thanks a ton!Hi! This is an amazing UI! Is there a way to turn sidebar completely off with a simple body class, like that which is used to minimize the sidebar? Also, I’m looking for a
                    way to make portlets fill the vertical space between the fixed header and fixed footer. I know that full height divs are a chore, but I’m wondering if you have already written any code that checks the
                    height of the window and adjusts the height of an element that I could re-purpose or extend for these full height content areas? If you have, I’d love a tip on where to find it in app.js or wherever
                    else. Otherwise any other suggestions you may have. Thanks a ton!Hi! </p>
            </div>
        </div>
    </div>

@endsection


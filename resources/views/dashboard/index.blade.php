@extends('layouts.app')

@section('styles')
    <style>
        .page-head {
            border-bottom: 1px solid #d5cfdb;
            box-shadow: 0 2px 0 rgba(0,0,0,.03);
            position: relative;
        }

        .page-content {
            padding: 0;
        }

        .portlet.light.portlet-fit>.portlet-body {
            padding: 30px 20px 20px;
        }
    </style>
@endsection

@section('content')
    <!-- END PAGE BREADCRUMBS -->
    <!-- BEGIN PAGE CONTENT INNER -->
    <div class="page-content-inner">
        <div class="portlet light portlet-fit ">
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


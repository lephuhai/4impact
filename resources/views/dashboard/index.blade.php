@extends('layouts.dashboard.app')

@section('styles')

    @parent

    <style>

        .activity-container {
            position: relative;
            margin-bottom: 0;
        }

        .organization-home .activity {
            background: #fff;
            border: 1px solid #e2dee6;
            border-radius: 3px;
            margin: 0 0 20px;
            box-shadow: 0 1px 0 rgba(0,0,0,.03);
        }

        .activity-container>ul {
            padding-left: 0;
            list-style: none;
            margin-bottom: 0;
        }

        .organization-home .activity .activity-item {
            margin: 0;
            padding: 10px 15px 10px 60px;
            border-bottom: 1px solid #efecf1;
            line-height: 1.4;
            font-size: 15px;
        }

        .activity-container>ul .activity-item {
            position: relative;
            font-size: 13px;
            color: #493e54;
        }

        .organization-home .activity .activity-item .activity-item-content {
            display: block;
            padding: 0;
        }

        .organization-home .activity .activity-item .avatar {
            position: absolute;
            width: 36px;
            height: 36px;
            left: 12px;
            top: 12px;
        }

        .activity-container>ul .activity-item .activity-author {
            font-weight: 600;
            color: #2f2936;
        }

        .organization-home .activity .activity-item .activity-meta {
            color: #625471;
            font-size: 85%;
        }

        .organization-home .activity .activity-item .project {
            font-weight: 600;
        }

        .organization-home .activity .activity-item .activity-meta a {
            color: #625471;
        }
    </style>

@endsection

@section('dashboard_content')

    <div class="col-md-7">
        <section>
            <div class="pull-right">
                <a class="btn btn-sm btn-default" href="#">View more</a>
                <a class="btn btn-sm btn-default" style="margin-left: 5px;">
                    <span class="icon icon-refresh"></span>
                </a>
            </div>
            <h4>Assigned to me</h4>
            <div class="box empty">No issues have been assigned to you.</div>

            {{--<div id="root"></div>--}}
        </section>

        <section>
            <div class="pull-right">
                <a class="btn btn-sm btn-default" href="#">View more</a>
                <a class="btn btn-sm btn-default" style="margin-left: 5px;">
                    <span class="icon icon-refresh"></span>
                </a>
            </div>
            <h4>Recent activity</h4>
            <div class="activity-container">
                <ul class="activity">
                    @for($i = 0; $i< 5; $i++)
                        <li class="activity-item activity-item-compact">
                            <div class="activity-item-content">
                            <span>
                                <span>
                                    <span class="avatar">
                                        <svg viewBox="0 0 120 120">
                                            <rect x="0" y="0" width="120" height="120" rx="15" ry="15" fill="#e63717"></rect>
                                            <text x="50%" y="50%" font-size="65" text-anchor="middle" fill="#FFFFFF" style="dominant-baseline: central;">H</text>
                                        </svg>
                                    </span>
                                    <span class="activity-author">hailp@eway.vn</span>
                                </span>
                                <span> assigned </span>
                                <span style="position: relative;">
                                    <a href="#">MASOFFER-LINK-TW</a>
                                </span>
                                <span> to themselves</span>
                            </span>
                                <div class="activity-meta">
                                    <a class="project" href="#">masoffer-link</a>
                                    <span class="bullet"></span>
                                    <time datetime="2017-12-23T15:51:05.592Z" title="December 23, 2017 3:51 PM UTC">17 hours ago </time>
                                </div>
                            </div>
                        </li>
                    @endfor
                </ul>
            </div>

        </section>
    </div>
    <div class="col-md-3">
        <section>
            <a class="btn-sidebar-header" href="#">View Stats</a>
            <h6 class="nav-header">EVENTS PER HOUR</h6>
        </section>

        <section>
            <h6 class="nav-header with-divider">Google Search Trends
                <a onclick="reloadIframe()" class="btn btn-sm btn-default pull-right" style="margin-top: -11px">
                    <span class="icon icon-refresh"></span>
                </a>
            </h6>
            <iframe scrolling="no" class="iframe-trends" width="100%" height="413"
                    src="https://trends.google.com.vn/trends/hottrends/widget?pn=p28&amp;tn=10&amp;h=413">
            </iframe>
        </section>
    </div>

@endsection

@section('scripts')

    <script>

        var $iframe = $('iframe');

        function reloadIframe() {
            $iframe.attr('src', $iframe.attr('src'));
        }

        // var iframeElement = React.createElement(
        //     'iframe',
        //     {
        //         scrolling: 'no',
        //         className: 'iframe-trends',
        //         width: '100%',
        //         height: '413',
        //         src: "https://trends.google.com.vn/trends/hottrends/widget?pn=p28&amp;tn=10&amp;h=413"
        //     }
        // );

        // var element = React.createElement(
        //     'h1',
        //     null,
        //     'Hello, ',
        //     "Hai Le Phu",
        //     '!'
        // );
        //
        // React.render(element, document.getElementById('root'));

    </script>

@endsection
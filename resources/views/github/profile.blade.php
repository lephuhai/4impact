@extends('layouts.app')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/fontawesome-stars.min.css">

    <style>
        .github-avatar {
            padding-bottom: 15px;
        }

        .br-widget a.br-selected:after {
            color: #f44336 !important;
        }

        .br-widget a.br-active:after {
            color: #e57373 !important;
        }

        .list-group-item {
            border: none;
        }
    </style>
@endsection

@section('content')

    <div class="container-fluid">
        <div class="page-content-inner">

            <div class="portlet light portlet-fit">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-github"></i>
                        <span class="caption-subject  bold uppercase">GitHub</span>
                    </div>
                </div>

                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="https://avatars2.githubusercontent.com/u/7351351?s=460&v=4" class="img-responsive rounded-3 github-avatar">
                            <select id="score-rate" title="Rating" autocomplete="off">
                                <option value="1" data-html="Normal">1</option>
                                <option value="2" data-html="Medium">2</option>
                                <option value="3" data-html="Good">3</option>
                                <option value="4" data-html="Better">4</option>
                                <option value="5" data-html="Best">5</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <ul class="list-group">
                                <li class="list-group-item"><i class="fa fa-user"></i> haipc (Hai Le Phu) <span class="badge">12</span></li>
                                <li class="list-group-item"><i class="fa fa-fw fa-database"></i> 39 public repos</li>
                                <li class="list-group-item"><i class="fa fa-fw fa-clock-o"></i> Joined GitHub 6 years ago</li>
                                <li class="list-group-item"><i class="fa fa-fw fa-building"></i> Eway.,JSC</li>
                                <li class="list-group-item"><i class="fa fa-fw fa-external-link"></i> <a
                                            href="https://github.com/haipc" target="_blank">View profile on GitHub</a></li>
                            </ul>
                        </div>
                        <div class="col-md-7">
                            <div class="col-md-12 text-right">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-sm btn-default" title="Overview">
                                        <input type="radio" value="hourly" autocomplete="off"> Overview
                                    </label>
                                </div>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-sm btn-default" title="Biểu đồ phân tích theo giờ">
                                        <input type="radio" value="hourly" autocomplete="off"> Hourly
                                    </label>
                                    <label class="btn btn-sm btn-default active" title="Biểu đồ phân tích theo ngày">
                                        <input type="radio" value="daily" autocomplete="off" checked=""> Daily
                                    </label>
                                    <label class="btn btn-sm btn-default" title="Biểu đồ phân tích theo tháng">
                                        <input type="radio" value="daily" autocomplete="off"> Month
                                    </label>
                                    <label class="btn btn-sm btn-default" title="Biểu đồ phân tích theo năm">
                                        <input type="radio" value="daily" autocomplete="off"> Year
                                    </label>

                                </div>
                            </div>
                            <div id="commit-chart" style="min-width: 310px; height: 250px; margin: 0 auto; padding-top: 50px;"></div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>


        </div>
    </div>

@endsection

@section('scripts')
    <script src="/assets/global/plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="/assets/global/plugins/highcharts/js/highcharts.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#score-rate').barrating({
                theme: 'fontawesome-stars',
            });

            $('.br-widget a').tooltip({title: function() { return this.dataset.ratingText }})
        });

        var chart_options = $.extend(true, {}, highcharts_option_base_1);
        chart_options.chart.type = 'spline';

        var option_2 = {
            chart: {
                type: 'spline'
            },
            legend: {
                borderColor: '#dddddd',
                layout: 'horizontal',
                align: 'left',
                verticalAlign: 'top',
                x: 50,
                y: 0,
                floating: true,
                borderWidth: 0,
                itemStyle: {
                    color: '#686868',
                    fontWeight: '500',
                    fontSize: '9px',
                },
            },
            colors: [ '#c0c0c0', '#4FC0E8', '#A0D468', '#FFCE55', '#AC92ED', '#48CFAE', '#EC87BF'],
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                gridLineWidth: 1,
                gridLineColor: '#F3F3F3',
                startOnTick: true,
                endOnTick: true,
                minPadding: 0,
                maxPadding: 0,
                tickWidth: 0,
                tickmarkPlacement: 'on',
                labels: {
                    style: {
                        color: '#9D9D9D',
                        fontSize: '9px',
                    },
                    formatter: function () {
                        return this.value;
                    },
                    useHTML: true,
                },
            },
            yAxis: {
                title: {
                    text: 'Commit (n)'
                },
                opposite: true,
                min: 0,
            },
            tooltip: {
                shared: true
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                areaspline: {
                    fillOpacity: 0.2
                },
                series: {
                    marker: {
                        lineColor: '#FFFFFF',
                        lineWidth: 1.2,
                        symbol: 'circle',
                        radius: 2.8,
                    }
                }
            },
            series: [{
                name: 'Commit',
                data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
            }]
        };

        $('#commit-chart').highcharts(option_2);

    </script>
@endsection
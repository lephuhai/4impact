@extends('layouts.dashboard.app')

@section('styles')

    @parent

    <style>
        .organization-home .count {
            font-size: 36px;
            color: #493e54;
            margin: 10px 0 20px;
        }
    </style>

@endsection

@section('dashboard_content')

    <div class="col-md-10">
        <section>

            <h4>Revenue Growth</h4>
            <div class="row">
                <div class="col-md-9">
                    <p>The chart below reflects events the system has received
                        across your entire organization. Events are broken down into
                        three categories: Accepted, Rate Limited, and Filtered. Rate
                        Limited events are entries that the system threw away due to quotas
                        being hit, and Filtered events are events that were blocked
                        due to your inbound data filter rules.</p>
                </div>
                <div class="col-md-3">
                    <h6 class="nav-header">Events change</h6>
                    <p class="count">13</p>
                </div>
            </div>

            <div id="revenue-chart" style="min-width: 310px; height: 250px; margin: 0 auto; padding-top: 50px;"></div>

            <div class="box empty">No issues have been assigned to you.</div>

        </section>
    </div>

@endsection

@section('scripts')

    @parent
    <script src="/assets/global/plugins/highcharts/js/highcharts.js"></script>

    <script type="text/javascript">

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
            colors: [ '#4FC0E8', '#A0D468', '#FFCE55', '#AC92ED', '#48CFAE', '#EC87BF'],
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
                    text: 'Revenue ($)'
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
                name: 'Revenue',
                data: [7.0, 7.0,7.0,7.0,7.0,7.0, 9.0,9.0, 15, 15, 13.9, 13.9]
            }]
        };

        $('#revenue-chart').highcharts(option_2);

    </script>
@endsection
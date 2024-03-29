$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function smooth_scroll_to(elm) {
    $('html, body').animate({scrollTop: elm.offset().top}, 1000);
}

var highcharts_option_base_1 = {
    chart: {
        type: 'areaspline',
    },
    title: {
        text: '',
        style: {
            fontFamily: 'Open Sans',
        }
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
    colors: ['#4FC0E8', '#A0D468', '#FFCE55', '#AC92ED', '#48CFAE', '#EC87BF'],
    xAxis: {
        categories: null,
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
    yAxis: [
        {
            labels: {
                style: {
                    color: '#9D9D9D',
                },
            },
            gridLineColor: '#F3F3F3',
        }
    ],
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
    }
};
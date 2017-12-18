<template>
    <div :id="id" style="min-width: 310px; height: 220px; margin: 0 auto"></div>
</template>

<script>
    import Highcharts from 'highcharts';
    export default {
        name: "spline",
        props: ['id', 'data', 'color1', 'color2', 'label1', 'label2', 'yAxisText', 'dataLabels'],
        mounted () {
            var self = this;
            this.$nextTick(function() {
                Highcharts.chart(this.id, {
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
                })
            })
        }
    }
</script>

<style scoped>

</style>
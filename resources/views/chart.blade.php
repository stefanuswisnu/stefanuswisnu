@extends('layouts.app')

@section('title', 'chart')

@section('content')

<div style="margin-top: 50px;" class="container">
    <div class="row justify-content-center">

        <!-- container graph -->
        <div id="container"></div>

        <!-- graph js -->
        <script src="https://code.highcharts.com/highcharts.js"></script>

        <script type="text/javascript">
            var userData = <?php echo json_encode($userData) ?>;

            Highcharts.chart('container', {
                title: {
                    text: 'New User Growth V-Lib, 2021'
                },
                subtitle: {
                    text: 'Source: V-Lib Statistics'
                },
                xAxis: {
                    categories: ['Wedesday', 'Thursday', 'Friday', 'Saturday', 'Sunday', 'Monday', 'Tuesday', ]
                },
                yAxis: {
                    title: {
                        text: 'Number of New Users'
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },
                plotOptions: {
                    series: {
                        allowPointSelect: true
                    }
                },
                series: [{
                    name: 'New Users',
                    data: userData
                }],
                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }
            });
        </script>

        <!-- end of graph -->

    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">{{ __('Total Passed and Failed Student in Data Analytics') }}</div>
            <div class="card-body">
                <div id="data analytics"></div>
            </div>
        </div>
        <h1></h1>
        <div class="card">
            <div class="card-header">{{ __('Total Passed and Failed Student in Digital Marketing') }}</div>
            <div class="card-body">
                <div id="digital marketing"></div>
            </div>
        </div>
        <h1></h1>
        <div class="card">
            <div class="card-header">{{ __('Total Passed and Failed Student in Product Management') }}</div>
            <div class="card-body">
                <div id="product management"></div>
            </div>
        </div>
    </div>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        var batch = <?php echo json_encode($batch) ?>;
        var daPassed = <?php echo json_encode($daPassed) ?>;
        var dmPassed = <?php echo json_encode($dmPassed) ?>;
        var pmPassed = <?php echo json_encode($pmPassed) ?>;
        var daFailed = <?php echo json_encode($daFailed) ?>;
        var dmFailed = <?php echo json_encode($dmFailed) ?>;
        var pmFailed = <?php echo json_encode($pmFailed) ?>;

        Highcharts.chart('data analytics', {

            chart: {
                type: 'column'
            },

            title: {
                text: 'Total Passed and Failed Student in Data Analytics'
            },

            xAxis: {
                title: {
                    text: 'Batch',
                },
                categories: batch
            },

            yAxis: [{ // Primary axis
                className: 'highcharts-color-0',
                title: {
                    text: 'Total Passed'
                }
            }, { // Secondary axis
                className: 'highcharts-color-1',
                opposite: true,
                title: {
                    text: 'Total Failed'
                }
            }],

            plotOptions: {
                column: {
                    borderRadius: 5
                }
            },

            series: [{
                name: 'Total Passed',
                data: daPassed
            }, {
                name: 'Total Failed',
                data: daFailed
            }]
        });

        Highcharts.chart('digital marketing', {

            chart: {
                type: 'column'
            },

            title: {
                text: 'Total Passed and Failed Student in Digital Marketing'
            },

            xAxis: {
                title: {
                    text: 'Batch',
                },
                categories: batch
            },

            yAxis: [{ // Primary axis
                className: 'highcharts-color-0',
                title: {
                    text: 'Total Passed'
                }
            }, { // Secondary axis
                className: 'highcharts-color-1',
                opposite: true,
                title: {
                    text: 'Total Failed'
                }
            }],

            plotOptions: {
                column: {
                    borderRadius: 5
                }
            },

            series: [{
                name: 'Total Passed',
                data: dmPassed
            }, {
                name: 'Total Failed',
                data: dmFailed
            }]
        });

        Highcharts.chart('product management', {

            chart: {
                type: 'column'
            },

            title: {
                text: 'Total Passed and Failed Student in Product Management'
            },

            xAxis: {
                title: {
                    text: 'Batch',
                },
                categories: batch
            },

            yAxis: [{ // Primary axis
                className: 'highcharts-color-0',
                title: {
                    text: 'Total Passed'
                }
            }, { // Secondary axis
                className: 'highcharts-color-1',
                opposite: true,
                title: {
                    text: 'Total Failed'
                }
            }],

            plotOptions: {
                column: {
                    borderRadius: 5
                }
            },

            series: [{
                name: 'Total Passed',
                data: pmPassed
            }, {
                name: 'Total Failed',
                data: pmFailed
            }]
        });

    </script>
@endsection

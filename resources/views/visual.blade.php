@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">{{ __('Total Student per Batch') }}</div>
            <div class="card-body">
                <div id="batch"></div>
            </div>
        </div>
        <h1></h1>
        <div class="card">
            <div class="card-header">{{ __('Total Student per Course') }}</div>
            <div class="card-body">
                <div id="course"></div>
            </div>
        </div>
        @can('admin')
        <h1></h1>
        <div class="card">
            <div class="card-header">{{ __('Total Student per Mentor') }}</div>
            <div class="card-body">
                <div id="mentor"></div>
            </div>
        </div>
        @endcan
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        var da = <?php echo json_encode($da) ?>;
        var dm = <?php echo json_encode($dm) ?>;
        var pm = <?php echo json_encode($pm) ?>;
        var batch = <?php echo json_encode($batch) ?>;
        var course = <?php echo json_encode($course) ?>;
        var courseN = <?php echo json_encode($courseN) ?>;
        var mentor = <?php echo json_encode($mentor) ?>;
        var mentorN = <?php echo json_encode($mentorN) ?>;

        Highcharts.chart('batch', {
            title: {
                text: 'Graph Total Student per Batch'
            },
            xAxis: {
                categories: batch
            },
            yAxis: {
                title: {
                    text: 'Total Student per Batch'
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
            series: [
                {
                    name: 'Data Analyst',
                    data: da
                },
                {
                    name: 'Digital Marketing',
                    data: dm
                },
                {
                    name: 'Product Management',
                    data: pm
                }
            ]
        });

        Highcharts.chart('course', {
            title: {
                text: 'Graph Total Student per Course'
            },
            xAxis: {
                text: 'course',
                categories: courseN
            },
            yAxis: {
                title: {
                    text: 'Total Student per Course'
                }
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [
                {
                    name: 'Total Student',
                    data: course
                }
            ]
        });

        Highcharts.chart('mentor', {
            title: {
                text: 'Graph Total Student per Mentor'
            },
            xAxis: {
                text: 'mentor',
                categories: mentorN
            },
            yAxis: {
                title: {
                    text: 'Total Student per Mentor'
                }
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [
                {
                    name: 'Total Student',
                    data: mentor
                }
            ]
        });

    </script>
@endsection

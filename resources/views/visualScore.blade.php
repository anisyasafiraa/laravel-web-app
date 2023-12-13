@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">{{ __('Average Score per Batch') }}</div>
            <div class="card-body">
                <div id="average"></div>
            </div>
        </div>
        <h1></h1>
        <div class="card">
            <div class="card-header">{{ __('Average score per Course') }}</div>
            <div class="card-body">
                <div id="course"></div>
            </div>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        var da = <?php echo json_encode($da) ?>;
        var dm = <?php echo json_encode($dm) ?>;
        var pm = <?php echo json_encode($pm) ?>;
        var batch = <?php echo json_encode($batch) ?>;
        var course = <?php echo json_encode($course) ?>;
        var cut = <?php echo json_encode($cut) ?>;
        var courseN = <?php echo json_encode($courseN) ?>;

        Highcharts.chart('average', {
            title: {
                text: 'Graph Average Score per Batch',
            },
            xAxis: {
                categories: batch
            },
            yAxis: {
                title: {
                    text: 'Average Score'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
            },
            plotOptions: {
                series: {
                    allowPointSelect: true,
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
                text: 'Graph Score per Course',
            },
            xAxis: {
                text: 'course',
                categories: courseN,
            },
            yAxis: {
                title: {
                    text: 'Score',
                }
            },
            plotOptions: {
                series: {
                    allowPointSelect: true,
                }
            },
            series: [
                {
                    name: 'Average Score',
                    data: course
                },
                {
                    name: 'Cut Score',
                    data: cut
                }
            ]
        });
    </script>
@endsection

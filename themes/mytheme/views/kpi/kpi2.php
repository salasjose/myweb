<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/highcharts-more.js"></script>


<div id="container" ></div>
<script>

    $(function() {

        $('#container').highcharts({
            chart: {
                type: 'gauge',
            },
            exporting: {
                enabled: false
            },
            pane: {
                startAngle: -90,
                endAngle: 90,
            },
            // the value axis
            yAxis: {
                min: 0,
                max: 100,
                plotBands: [{
                        from: 0,
                        to: 60,
                        color: '#DF5353' // red
                    }, {
                        from: 60,
                        to: 85,
                        color: '#DDDF0D' // yellow
                    }, {
                        from: 85,
                        to: 100,
                        color: '#55BF3B' // green'
                    }]
            },
            series: [{
                    name: 'Speed',
                    data: [<?php echo 20; ?>],
                }]

        });
    });

</script>


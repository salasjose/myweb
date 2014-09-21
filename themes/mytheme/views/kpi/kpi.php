<script src="http://code.highcharts.com/highcharts-more.js"></script>
<script src="http://code.highcharts.com/modules/solid-gauge.src.js"></script>
<div class="container">

    <div class="page-header">
        <p class="lead">Basic grid layouts to get you familiar with building within the Bootstrap grid system.</p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?php
            $this->widget('booster.widgets.TbHighCharts', array(
                'options' => array(
                    'chart' => array(
                        'type' => 'gauge',
                        'plotBackgroundColor' => null,
                        'plotBackgroundImage' => null,
                        'plotBorderWidth' => 0,
                        'plotShadow' => false
                    ),
                    'title' => array(
                        'text' => 'Speedometer'
                    ),
                    'pane' => array(
                        
                        'startAngle' => -150,
                        'endAngle' => 150,
                    ),
                    'yAxis' => array(
                        'min' => 0,
                        'max' => 200,
                        'plotBands' => array(
                            array('from' => 0, 'to' => 120, 'color' => '#55BF3B'), //green
                            array('from' => 121, 'to' => 200, 'color' => '#DF5353'), //red
                        )
                    ),
                    'series' => array(
                        array(
                            'name' => 'vvv',
                            'data' => '[100]',
                            'tooltip' => array('valueSuffix' => ' km/h')
                        )
                    )
                )//options
            ));
            ?>
        </div>
        <div class="col-md-4">


        </div>
        <div class="col-md-4">
            <?php ?>

        </div>
    </div>
</div>
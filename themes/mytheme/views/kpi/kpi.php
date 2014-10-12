<?php

$cs = Yii::app()->getClientScript();
$cs->registerScriptFile('http://code.highcharts.com/highcharts.js');
$cs->registerScriptFile('http://code.highcharts.com/highcharts-more.js');
?>
<?php

$this->widget('ext.booster.widgets.TbHighCharts', array(
    'options' => array(
        'chart' => array(
            'type' => 'gauge',
        ),
        'title' => array(
            'text' => 'KPI'
        ),
        'pane' => array(
            'center' => array('50%', '85%'),
            'startAngle' => '-90',
            'endAngle' => '90',
            'background' => null,
            'size' => 200
        ),
        'yAxis' => array(
            'min' => 0,
            'max' => 100,
            'plotBands' => array(
                array('from' => 0, 'to' => 60, 'color' => '#DF5353'), //green
                array('from' => 60, 'to' => 85, 'color' => '#E9F02B'), //red
                array('from' => 85, 'to' => 100, 'color' => '#55BF3B'), //red
            )
        ),
        'plotOptions' => array(
            'dial' => array('radius' => '100%')
        ),
        'series' => array(
            array(
                'name' => 'ร้อยละ',
                'data' => array(80),
                'tooltip' => array('valueSuffix' => ' %')
            )
        )
    )//options
));
?>
       
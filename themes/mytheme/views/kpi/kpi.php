<?php
// กรณี yii ไม่ยอม load highchart libary 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile('http://code.highcharts.com/highcharts.js');
$cs->registerScriptFile('http://code.highcharts.com/highcharts-more.js');
?>
<?php

//  กำหนดค่า KPI
$kpi = 80;


$this->widget('ext.booster.widgets.TbHighCharts', array(
    'options' => array(
        'chart' => array(
            'type' => 'gauge',
            'plotBackgroundColor' => null,
            'plotBackgroundImage' => null,
            'plotBorderWidth' => 0,
            'plotShadow' => false
        ),
        'title' => array(
            'text' => 'ร้อยละหญิงตั้งครรภ์ได้รับการฝากครรภ์ครั้งแรกก่อนหรือเท่ากับ 12 สัปดาห์'
        ),
        'credits' => array(
            'enabled' => false
        ),
        'pane' => array(
            //'center' => array('50%', '85%'),
            'startAngle' => '-90',
            'endAngle' => '90',
            'background' => null,
            'size' => 200
        ),
        'yAxis' => array(
            'min' => 0,
            'max' => 100,
            'title' => array('text' => "ร้อยละ " . $kpi),
            'minorTickInterval' => 'auto',
            'minorTickWidth' => 1,
            'minorTickLength' => 10,
            'minorTickPosition' => 'inside',
            'minorTickColor' => '#666',
            'tickPixelInterval' => 30,
            'tickWidth' => 2,
            'tickPosition' => 'inside',
            'tickLength' => 15,
            'tickColor' => '#666',
            'labels' => array(
                'step' => 2,
                'rotation' => 'auto'
            ),
            'plotBands' => array(
                array('from' => 0, 'to' => 60, 'color' => '#DF5353'), //red
                array('from' => 60, 'to' => 85, 'color' => '#E9F02B'), //yellow
                array('from' => 85, 'to' => 100, 'color' => '#55BF3B'), //green
            )
        ),
        'plotOptions' => array(
            'gauge' => array(
                'dataLabels' => array('enabled' => false)
            ),
            'dial' => array('radius' => '100%')
        ),
        'series' => array(
            array(
                'name' => 'ร้อยละ',
                'data' => array($kpi),
                'tooltip' => array('valueSuffix' => ' %')
            )
        )
    )//options
));
?>
       
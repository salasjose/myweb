<?php

$cs = Yii::app()->getClientScript();
$cs->registerScriptFile('http://code.highcharts.com/highcharts.js');
$cs->registerScriptFile('http://code.highcharts.com/highcharts-more.js');

$data = array
    (
    array("นายแพทย์ ก", 22),
    array("นายแพทย์ ข", 15),
    array("นายแพทย์ ค", 5),
    array("นายแพทย์ ง", 17)
);


$this->widget('booster.widgets.TbHighCharts', array(
    'options' => array(
        'chart' => array(
        ),
        'title' => array('text' => 'Power by Utehn PHNU.'),
        'plotOptions' => array(
            'pie' => array('showInLegend' => true)
        ),
        'series' => array(array(
                'type' => 'pie',
                'name' => 'จำนวน (ครั้ง)',
                'data' => $data,
                'point' => array(
                    'events' => array(
                        click => "function(event) {alert();}"
                    )
                )
            )),
    )
));
?>


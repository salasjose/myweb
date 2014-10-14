<?php

// กรณี yii ไม่ยอม load highchart libary 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile('http://code.highcharts.com/highcharts.js');
$cs->registerScriptFile('http://code.highcharts.com/highcharts-more.js');
?>

<?php

// ข้อมูล กราฟ *** ควรจะทำที่ Controller
$catagory = array('มค', 'กพ', 'มีค', 'เมย');

$year1 = 'ปีงบ 2557';
$data_year1 = array();
array_push($data_year1, 10);
array_push($data_year1, 11);
array_push($data_year1, 10);
array_push($data_year1, 15);


$year2 = 'ปีงบ 2558';
$data_year2 = array();
array_push($data_year2, 2);
array_push($data_year2, 14);
array_push($data_year2, 20);
array_push($data_year2, 25);
?>

<?php

$this->Widget('booster.widgets.TbHighCharts', array(
    'options' => array(
        'credits' => array('enabled' => false),
        'chart' => array(
            'type' => 'line'
        ),
        'title' => array('text' => 'แสดงกราฟเส้นแบบหลายเส้น'),
        'xAxis' => array(
            'categories' => $catagory
        ),
        'yAxis' => array(
            'title' => array('text' => 'จำนวน( หน่วย )'),
            'min' => 0
        ),
        'legend' => array(
            'layout' => 'vertical',
            'align' => 'right',
            'verticalAlign' => 'middle',
            'borderWidth' => 0
        ),
        'series' => array(
            array(
                'name' => $year1,
                'data' => $data_year1
            ),
            array(
                'name' => $year2,
                'data' => $data_year2
            )
        ),
        'plotOptions' => array(
            'line' => array(
                'dataLabels' => array('enabled' => TRUE),
            )
        )
    )
));
?>

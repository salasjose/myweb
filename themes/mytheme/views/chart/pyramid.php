<div class="well">
    <?php
    // import highchart libray
    $cs = Yii::app()->getClientScript();
    $cs->registerScriptFile('http://code.highcharts.com/highcharts.js');
    $cs->registerScriptFile('http://code.highcharts.com/highcharts-more.js');
    //end import
    
    $agegroup = array('0-1ปี', '2-5ปี', '5-10ปี','10ป๊+');
    $male = array(-40, -20, -10,-6);
    $female = array(60, 20, 10,6);
  
    $this->widget('booster.widgets.TbHighCharts', array(
        'options' => array(
            'title' => array('text' => 'กราฟแสดงจำนวนประชากรในเขตรับผิดชอบตามกลุ่มอายุ'),
            'chart' => array(
                'type' => 'bar'
            ),
            'xAxis' => array(
                array(
                    'categories' => $agegroup,
                    'reversed' => false,
                    'labels' => array('step' => 0)
                ),
                array(
                    'opposite' => true,
                    'reversed' => false,
                    'categories' => $agegroup,
                    'linkedTo' => 0,
                    'labels' => array(
                        'step' => 0
                    )
                )
            ),
            'yAxis' => array(
                'title' => array(
                    'text' => 'จำนวน'
                ),
                'min'=>-100,
                'max'=>100
            ),
            'series' => array(array(
                    'name' => 'เพศชาย',
                    'data' => $male
                ),
                array(
                    'name' => 'เพศหญิง',
                    'data' => $female
                ),
            ),
            'plotOptions'=>array(
                'series'=>array(
                    'stacking'=> 'normal'
                )
            )
        )
    ));
    ?>
</div>


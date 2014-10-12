<div class="well">
    <?php
    $data = $dataProvider->getData();
    $agegroup = array();
    $male = array();
    $female = array();
    $total = array();
   foreach ($data as $d) {       
        array_push($male, intval($d['male'])*(-1));
        array_push($female, intval($d['female']));
        array_push($agegroup,abs( $d['agegroup']));
    }
    
    $this->widget('booster.widgets.TbHighCharts', array(
        'options' => array(
             'title' => array('text' => 'กราฟแสดงจำนวนประชากรในเขตรับผิดชอบตามกลุ่มอายุ'),
            'chart' => array(
                'type' => 'bar'
            ),
            'xAxis' => array(
                categories => $agegroup
            ),
            'yAxis' => array(
                title => array(
                    text => 'จำนวน'
                ),
            ),
            'series' => array(array(
                    name => 'เพศชาย',
                    data => $male
                ),
                array(
                    name => 'เพศหญิง',
                    data => $female
                ), 
            )
        )
    ));
    ?>
</div>

<?php
echo $male[0];
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
    'columns' => array(
        array(
            'name' => 'agegroup',
            'header' => 'ช่องอายุ',
            'htmlOptions' => array(
                'align' => 'center',
                 'width' => '35%',
            )
        ),
        array(
            'name' => 'male',
            'header' => 'ผู้ชาย',
            'htmlOptions' => array(
                 'width' => '20%',
                'align' => 'center'
            )
        ),
        array(
            'name' => 'female',
            'header' => 'เพศหญิง',
            'htmlOptions' => array(
                 'width' => '20%',
                'align' => 'center'
            )
        ),
        array(
            'name' => 'total',
            'header' => 'ประชากรทั้งหมด',
           'htmlOptions' => array(
                'width' => '20%',
                'align' => 'center')
        ),
    )
));
?>


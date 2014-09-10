
<div class="well">
    <form method="POST">
        <?php
        $this->widget('booster.widgets.TbDatePicker', array(
            'name' => 'date1',
            'value' => $d1,
            'options' => array(
                'autoclose' => TRUE,
                'format' => 'yyyy-mm-dd',
                'language' => 'th'
            )
        ));
        ?>

        <?php
        $this->widget('booster.widgets.TbDatePicker', array(
            'name' => 'date2',
            'value' => $d2,
            'options' => array(
                'autoclose' => TRUE,
                'format' => 'yyyy-mm-dd',
            )
        ));
        ?>

        <button type="submit" class="btn btn-success">ประมวลผล</button>

    </form>

</div>


<?php
$this->widget('ext.booster.widgets.TbGridView', array(
    'id' => 'datatable',
    'dataProvider' => $dataProvider,
    'filter' => $filtersForm,
    'columns' => array(
        array(
            'name' => 'HOSPCODE',
            'header' => 'รหัสสถานบริการ'
        ),
        array(
            'name' => 'hosname',
            'header' => 'สถานบริการ'
        ),
        array(
            'name' => 'total',
            'header' => 'จำนวนประชากร'
        ),
    )
));
?>

<div class="well">
    <?php
    $data = $dataProvider->getData();

    $hosname = array();
    $total = array();
    foreach ($data as $d) {
        array_push($hosname, $d['hosname']);
        array_push($total, intval($d['total']));
    }

    $this->widget('ext.booster.widgets.TbHighCharts', array(
        'options' => array(
            'chart' => array(
                'type' => 'column',
                
            ),            
            'colors' => array('#4EBA0C'),
            'title' => array('text' => 'แผนภูมิแท่งแสดงจำนวนประชากร'),
            'yAxis' => array(
                'title' => array('text' => 'จำนวน (คน)')
            ),
            'xAxis' => array(
                'categories' => $hosname
            ),
            'series' => array(
                array(
                    'name' => 'ชื่อสถานบริการ',
                    'data' => $total
                )
            )
        )
    ));
    ?>


</div>


<?php
echo $sql;
?>

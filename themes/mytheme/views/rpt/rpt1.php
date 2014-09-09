<div class="well">
    <form method="POST">
        <?php
        $this->widget('booster.widgets.TbDatePicker', array(
            'name' => 'date1',
            'value'=>$d1,
            'options' => array(
                'autoclose' => TRUE,
                'format' => 'yyyy-mm-dd',
                'language'=>'th'
            )
        ));
        ?>

        <?php
        $this->widget('booster.widgets.TbDatePicker', array(
            'name' => 'date2',
            'value'=>$d2,
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

<?php
echo $sql;
?>

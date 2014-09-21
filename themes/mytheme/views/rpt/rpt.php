<?php
$dir = Yii::app()->theme->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($dir . '/js/script.js');
?>
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
        <button type="button" class="btn btn-default" onclick="return onBtn1_click();">ทดสอบ</button>

    </form>


</div>
<div id="div-show">
    <?php
    $this->widget('ext.booster.widgets.TbGridView', array(
        'id' => 'datatable',
        'dataProvider' => $dataProvider,
        'filter' => $filtersForm,
        'columns' => array(
            array(
                'name' => 'HOSPCODE',
                'header' => 'รหัสสถานบริการ',
                'htmlOptions' => array('style' => 'width: 500px; text-align: center;')
            ),
            array(
                'name' => 'hosname',
                'header' => 'สถานบริการ',
            //'filter' => $hosname
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
        $piedata=array();
        $hosname = array();
        $total = array();
        foreach ($data as $d) {
            // การ add element ให้ array ทำได้ 2 รูปแบบ
            array_push($piedata, array($d['hosname'], intval($d['total'])));
            //$piedata[] = array($d['hosname'], intval($d['total']), 6);
            
            array_push($hosname, $d['hosname']);
            //$hosname[] = $d['hosname'];
            
            array_push($total, intval($d['total']));
            //$total[] = intval($d['total']);
        }
        ?>
        <?php
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
    <pre>
        <?php
        print_r($piedata);
        echo "<hr>";
        echo $piedata[0][2];
        ?>
    </pre>
    <div class="well">
        <h1>UTEHN PHNU</h1>
        <?php
//ควรประมวลผลข้อมูลที่ controller แล้วค่อยโยนมาให้ view


        $this->widget('booster.widgets.TbHighCharts', array(
            'options' => array(
                'title' => array('text' => 'Power by Utehn PHNU.'),
                'series' => array(array(
                        'type' => 'pie',
                        'name' => 'จำนวน',
                        'data' => $piedata
                    )),
            )
        ));
        ?>
    </div>


    <?php
    echo $sql;
    ?>

</div>

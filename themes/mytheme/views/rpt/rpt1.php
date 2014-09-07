<?php

$this->widget('zii.widgets.grid.CGridView',array(
    'dataProvider'=>$dataProvider ,
    'columns'=>array(
        array(
            'name'=>'HOSPCODE',
            'header'=>'รหัสสถานบริการ'
        ),
         array(
            'name'=>'hosname',
            'header'=>'สถานบริการ'
        ),
         array(
            'name'=>'total',
            'header'=>'จำนวนประชากร'
        ),
    )
));


?>

<?php
    echo $sql;
?>

<div class="search-form" style="">  
    <form method="GET">
        <?php
        echo CHtml::activeTextField($model, 'findtext');
        ?>
        <input type="submit" value="ค้นหา"/>        
    </form>
</div>
<?php
        print_r($data);
?>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'cdisease-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'diseasecode',
        'mapdisease',
        'diseasename',
        'diseasenamethai',
        'code504',
        'code506',
    )
));
?>
<script>
    $('.search-form form').submit(function() {
        $('#cdisease-grid').yiiGridView('update', {
            data: $(this).serialize()
        });
        return false;
    });
</script>
<?php
/* @var $this CdiseaseController */
/* @var $model Cdisease */

$this->breadcrumbs = array(
    'Cdiseases' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Cdisease', 'url' => array('index')),
    array('label' => 'Create Cdisease', 'url' => array('create')),
);

?>



<div class="search-form" style="">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

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
        /*
          'codechronic',
          'codeoccupa',
          'aric',
          'pcudiag',
          'illornot',
          'flagdiagnewcodebhpp',
          'validscore',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
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

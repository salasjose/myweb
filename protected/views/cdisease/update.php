<?php
/* @var $this CdiseaseController */
/* @var $model Cdisease */

$this->breadcrumbs=array(
	'Cdiseases'=>array('index'),
	$model->diseasecode=>array('view','id'=>$model->diseasecode),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cdisease', 'url'=>array('index')),
	array('label'=>'Create Cdisease', 'url'=>array('create')),
	array('label'=>'View Cdisease', 'url'=>array('view', 'id'=>$model->diseasecode)),
	array('label'=>'Manage Cdisease', 'url'=>array('admin')),
);
?>

<h1>Update Cdisease <?php echo $model->diseasecode; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
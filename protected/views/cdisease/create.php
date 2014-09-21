<?php
/* @var $this CdiseaseController */
/* @var $model Cdisease */

$this->breadcrumbs=array(
	'Cdiseases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cdisease', 'url'=>array('index')),
	array('label'=>'Manage Cdisease', 'url'=>array('admin')),
);
?>

<h1>Create Cdisease</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this CdiseaseController */
/* @var $model Cdisease */

$this->breadcrumbs=array(
	'Cdiseases'=>array('index'),
	$model->diseasecode,
);

$this->menu=array(
	array('label'=>'List Cdisease', 'url'=>array('index')),
	array('label'=>'Create Cdisease', 'url'=>array('create')),
	array('label'=>'Update Cdisease', 'url'=>array('update', 'id'=>$model->diseasecode)),
	array('label'=>'Delete Cdisease', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->diseasecode),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cdisease', 'url'=>array('admin')),
);
?>

<h1>View Cdisease #<?php echo $model->diseasecode; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'diseasecode',
		'mapdisease',
		'diseasename',
		'diseasenamethai',
		'code504',
		'code506',
		'codechronic',
		'codeoccupa',
		'aric',
		'pcudiag',
		'illornot',
		'flagdiagnewcodebhpp',
		'validscore',
	),
)); ?>

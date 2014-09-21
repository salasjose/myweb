<?php
/* @var $this CdiseaseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cdiseases',
);

$this->menu=array(
	array('label'=>'Create Cdisease', 'url'=>array('create')),
	array('label'=>'Manage Cdisease', 'url'=>array('admin')),
);
?>

<h1>Cdiseases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

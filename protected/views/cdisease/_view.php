<?php
/* @var $this CdiseaseController */
/* @var $data Cdisease */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('diseasecode')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->diseasecode), array('view', 'id'=>$data->diseasecode)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mapdisease')); ?>:</b>
	<?php echo CHtml::encode($data->mapdisease); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diseasename')); ?>:</b>
	<?php echo CHtml::encode($data->diseasename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diseasenamethai')); ?>:</b>
	<?php echo CHtml::encode($data->diseasenamethai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code504')); ?>:</b>
	<?php echo CHtml::encode($data->code504); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code506')); ?>:</b>
	<?php echo CHtml::encode($data->code506); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codechronic')); ?>:</b>
	<?php echo CHtml::encode($data->codechronic); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('codeoccupa')); ?>:</b>
	<?php echo CHtml::encode($data->codeoccupa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aric')); ?>:</b>
	<?php echo CHtml::encode($data->aric); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pcudiag')); ?>:</b>
	<?php echo CHtml::encode($data->pcudiag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('illornot')); ?>:</b>
	<?php echo CHtml::encode($data->illornot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flagdiagnewcodebhpp')); ?>:</b>
	<?php echo CHtml::encode($data->flagdiagnewcodebhpp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('validscore')); ?>:</b>
	<?php echo CHtml::encode($data->validscore); ?>
	<br />

	*/ ?>

</div>
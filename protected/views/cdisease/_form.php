<?php
/* @var $this CdiseaseController */
/* @var $model Cdisease */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cdisease-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'diseasecode'); ?>
		<?php echo $form->textField($model,'diseasecode',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'diseasecode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mapdisease'); ?>
		<?php echo $form->textField($model,'mapdisease',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'mapdisease'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diseasename'); ?>
		<?php echo $form->textField($model,'diseasename',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'diseasename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diseasenamethai'); ?>
		<?php echo $form->textField($model,'diseasenamethai',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'diseasenamethai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'code504'); ?>
		<?php echo $form->textField($model,'code504',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'code504'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'code506'); ?>
		<?php echo $form->textField($model,'code506',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'code506'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codechronic'); ?>
		<?php echo $form->textField($model,'codechronic',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'codechronic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codeoccupa'); ?>
		<?php echo $form->textField($model,'codeoccupa',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'codeoccupa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aric'); ?>
		<?php echo $form->textField($model,'aric',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'aric'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pcudiag'); ?>
		<?php echo $form->textField($model,'pcudiag'); ?>
		<?php echo $form->error($model,'pcudiag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'illornot'); ?>
		<?php echo $form->textField($model,'illornot',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'illornot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flagdiagnewcodebhpp'); ?>
		<?php echo $form->textField($model,'flagdiagnewcodebhpp',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'flagdiagnewcodebhpp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'validscore'); ?>
		<?php echo $form->textField($model,'validscore',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'validscore'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
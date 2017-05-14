<?php
/* @var $this KotakController */
/* @var $model Kotak */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kotak-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
			'validateOnType'=>true,
			'validateOnChange'=>true,
		),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'panjang'); ?>
		<?php echo $form->textField($model,'panjang'); ?>
		<?php echo $form->error($model,'panjang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lebar'); ?>
		<?php echo $form->textField($model,'lebar'); ?>
		<?php echo $form->error($model,'lebar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tebal'); ?>
		<?php echo $form->textField($model,'tebal'); ?>
		<?php echo $form->error($model,'tebal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jari'); ?>
		<?php echo $form->textField($model,'jari'); ?>
		<?php echo $form->error($model,'jari'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tinggi'); ?>
		<?php echo $form->textField($model,'tinggi'); ?>
		<?php echo $form->error($model,'tinggi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
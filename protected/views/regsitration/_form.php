<?php
/* @var $this RegsitrationController */
/* @var $model Regsitration */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'regsitration-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'course_id'); ?>
		<?php echo $form->textField($model,'course_id'); ?>
		<?php echo $form->error($model,'course_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'father'); ?>
		<?php echo $form->textField($model,'father',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'father'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mother'); ?>
		<?php echo $form->textField($model,'mother',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'mother'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_birth'); ?>
		<?php echo $form->textField($model,'date_of_birth'); ?>
		<?php echo $form->error($model,'date_of_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gnder'); ?>
		<?php echo $form->textField($model,'gnder',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'gnder'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pinocde'); ?>
		<?php echo $form->textField($model,'pinocde',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pinocde'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'academic'); ?>
		<?php echo $form->textField($model,'academic',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'academic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idproof'); ?>
		<?php echo $form->textField($model,'idproof',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'idproof'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'exam_mode'); ?>
		<?php echo $form->textField($model,'exam_mode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'exam_mode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo'); ?>
		<?php echo $form->textField($model,'photo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'photo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'certificate'); ?>
		<?php echo $form->textField($model,'certificate',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'certificate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'register_on'); ?>
		<?php echo $form->textField($model,'register_on'); ?>
		<?php echo $form->error($model,'register_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'certificate_on'); ?>
		<?php echo $form->textField($model,'certificate_on'); ?>
		<?php echo $form->error($model,'certificate_on'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
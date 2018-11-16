<?php
/* @var $this SiteRegisterController */
/* @var $model SiteRegister */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'site-register-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'site_id'); ?>
		<?php echo $form->textField($model,'site_id',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'site_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_cpa'); ?>
		<?php echo $form->textField($model,'name_cpa',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name_cpa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'site_country'); ?>
		<?php echo $form->textField($model,'site_country',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'site_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doe_cpa'); ?>
		<?php echo $form->textField($model,'doe_cpa'); ?>
		<?php echo $form->error($model,'doe_cpa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location1'); ?>
		<?php echo $form->textField($model,'location1',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'location1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location2'); ?>
		<?php echo $form->textField($model,'location2',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'location2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iucn_cat'); ?>
		<?php echo $form->textField($model,'iucn_cat'); ?>
		<?php echo $form->error($model,'iucn_cat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wdpa_id'); ?>
		<?php echo $form->textField($model,'wdpa_id'); ?>
		<?php echo $form->error($model,'wdpa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'affiliation'); ?>
		<?php echo $form->textArea($model,'affiliation',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'affiliation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'partner_cats'); ?>
		<?php echo $form->textArea($model,'partner_cats',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'partner_cats'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'objective'); ?>
		<?php echo $form->textField($model,'objective',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'objective'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cats_area'); ?>
		<?php echo $form->textField($model,'cats_area'); ?>
		<?php echo $form->error($model,'cats_area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mgm_zone_details'); ?>
		<?php echo $form->textField($model,'mgm_zone_details',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'mgm_zone_details'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'basic_info'); ?>
		<?php echo $form->textField($model,'basic_info',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'basic_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mee_system'); ?>
		<?php echo $form->textField($model,'mee_system',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'mee_system'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mee_report_link'); ?>
		<?php echo $form->textField($model,'mee_report_link',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'mee_report_link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiger_population'); ?>
		<?php echo $form->textField($model,'tiger_population',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tiger_population'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'breeding'); ?>
		<?php echo $form->textField($model,'breeding',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'breeding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'population_trend'); ?>
		<?php echo $form->textField($model,'population_trend',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'population_trend'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area_suitable'); ?>
		<?php echo $form->textField($model,'area_suitable',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'area_suitable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actions_taken'); ?>
		<?php echo $form->textField($model,'actions_taken',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'actions_taken'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'staff_total'); ?>
		<?php echo $form->textField($model,'staff_total'); ?>
		<?php echo $form->error($model,'staff_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'staff_protection'); ?>
		<?php echo $form->textField($model,'staff_protection'); ?>
		<?php echo $form->error($model,'staff_protection'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'annual_budget'); ?>
		<?php echo $form->textField($model,'annual_budget'); ?>
		<?php echo $form->error($model,'annual_budget'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'site_image'); ?>
		<?php echo $form->textField($model,'site_image',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'site_image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cats_status'); ?>
		<?php echo $form->textField($model,'cats_status'); ?>
		<?php echo $form->error($model,'cats_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regsitered_on'); ?>
		<?php echo $form->textField($model,'regsitered_on'); ?>
		<?php echo $form->error($model,'regsitered_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cats_approval'); ?>
		<?php echo $form->textField($model,'cats_approval'); ?>
		<?php echo $form->error($model,'cats_approval'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
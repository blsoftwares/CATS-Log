<?php
/* @var $this SiteRegisterController */
/* @var $model SiteRegister */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'site_id'); ?>
		<?php echo $form->textField($model,'site_id',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_cpa'); ?>
		<?php echo $form->textField($model,'name_cpa',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'site_country'); ?>
		<?php echo $form->textField($model,'site_country',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doe_cpa'); ?>
		<?php echo $form->textField($model,'doe_cpa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'location1'); ?>
		<?php echo $form->textField($model,'location1',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'location2'); ?>
		<?php echo $form->textField($model,'location2',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iucn_cat'); ?>
		<?php echo $form->textField($model,'iucn_cat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wdpa_id'); ?>
		<?php echo $form->textField($model,'wdpa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'affiliation'); ?>
		<?php echo $form->textArea($model,'affiliation',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'partner_cats'); ?>
		<?php echo $form->textArea($model,'partner_cats',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'objective'); ?>
		<?php echo $form->textField($model,'objective',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cats_area'); ?>
		<?php echo $form->textField($model,'cats_area'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mgm_zone_details'); ?>
		<?php echo $form->textField($model,'mgm_zone_details',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'basic_info'); ?>
		<?php echo $form->textField($model,'basic_info',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mee_system'); ?>
		<?php echo $form->textField($model,'mee_system',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mee_report_link'); ?>
		<?php echo $form->textField($model,'mee_report_link',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiger_population'); ?>
		<?php echo $form->textField($model,'tiger_population',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'breeding'); ?>
		<?php echo $form->textField($model,'breeding',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'population_trend'); ?>
		<?php echo $form->textField($model,'population_trend',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'area_suitable'); ?>
		<?php echo $form->textField($model,'area_suitable',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actions_taken'); ?>
		<?php echo $form->textField($model,'actions_taken',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'staff_total'); ?>
		<?php echo $form->textField($model,'staff_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'staff_protection'); ?>
		<?php echo $form->textField($model,'staff_protection'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'annual_budget'); ?>
		<?php echo $form->textField($model,'annual_budget'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'site_image'); ?>
		<?php echo $form->textField($model,'site_image',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cats_status'); ?>
		<?php echo $form->textField($model,'cats_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'regsitered_on'); ?>
		<?php echo $form->textField($model,'regsitered_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cats_approval'); ?>
		<?php echo $form->textField($model,'cats_approval'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
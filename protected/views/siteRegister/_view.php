<?php
/* @var $this SiteRegisterController */
/* @var $data SiteRegister */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_id')); ?>:</b>
	<?php echo CHtml::encode($data->site_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('name_cpa')); ?>:</b>
	<?php echo CHtml::encode($data->name_cpa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_country')); ?>:</b>
	<?php echo CHtml::encode($data->site_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doe_cpa')); ?>:</b>
	<?php echo CHtml::encode($data->doe_cpa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location1')); ?>:</b>
	<?php echo CHtml::encode($data->location1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location2')); ?>:</b>
	<?php echo CHtml::encode($data->location2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iucn_cat')); ?>:</b>
	<?php echo CHtml::encode($data->iucn_cat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wdpa_id')); ?>:</b>
	<?php echo CHtml::encode($data->wdpa_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('affiliation')); ?>:</b>
	<?php echo CHtml::encode($data->affiliation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('partner_cats')); ?>:</b>
	<?php echo CHtml::encode($data->partner_cats); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('objective')); ?>:</b>
	<?php echo CHtml::encode($data->objective); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cats_area')); ?>:</b>
	<?php echo CHtml::encode($data->cats_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mgm_zone_details')); ?>:</b>
	<?php echo CHtml::encode($data->mgm_zone_details); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('basic_info')); ?>:</b>
	<?php echo CHtml::encode($data->basic_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mee_system')); ?>:</b>
	<?php echo CHtml::encode($data->mee_system); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mee_report_link')); ?>:</b>
	<?php echo CHtml::encode($data->mee_report_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiger_population')); ?>:</b>
	<?php echo CHtml::encode($data->tiger_population); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('breeding')); ?>:</b>
	<?php echo CHtml::encode($data->breeding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('population_trend')); ?>:</b>
	<?php echo CHtml::encode($data->population_trend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_suitable')); ?>:</b>
	<?php echo CHtml::encode($data->area_suitable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actions_taken')); ?>:</b>
	<?php echo CHtml::encode($data->actions_taken); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_total')); ?>:</b>
	<?php echo CHtml::encode($data->staff_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_protection')); ?>:</b>
	<?php echo CHtml::encode($data->staff_protection); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('annual_budget')); ?>:</b>
	<?php echo CHtml::encode($data->annual_budget); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_image')); ?>:</b>
	<?php echo CHtml::encode($data->site_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cats_status')); ?>:</b>
	<?php echo CHtml::encode($data->cats_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regsitered_on')); ?>:</b>
	<?php echo CHtml::encode($data->regsitered_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cats_approval')); ?>:</b>
	<?php echo CHtml::encode($data->cats_approval); ?>
	<br />

	*/ ?>

</div>
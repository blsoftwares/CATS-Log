<?php
/* @var $this SiteBudgetAllocationMethodController */
/* @var $data SiteBudgetAllocationMethod */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_id')); ?>:</b>
	<?php echo CHtml::encode($data->site_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('budget_method')); ?>:</b>
	<?php echo CHtml::encode($data->budget_method); ?>
	<br />


</div>
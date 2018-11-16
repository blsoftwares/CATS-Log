<?php
/* @var $this SiteCriteriaHistoryController */
/* @var $data SiteCriteriaHistory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_id')); ?>:</b>
	<?php echo CHtml::encode($data->site_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('criteria_id')); ?>:</b>
	<?php echo CHtml::encode($data->criteria_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assesment')); ?>:</b>
	<?php echo CHtml::encode($data->assesment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating')); ?>:</b>
	<?php echo CHtml::encode($data->rating); ?>
	<br />


</div>
<?php
/* @var $this RegsitrationController */
/* @var $data Regsitration */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enroll_id')); ?>:</b>
	<?php echo CHtml::encode($data->enroll_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('course_id')); ?>:</b>
	<?php echo CHtml::encode($data->course_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('father')); ?>:</b>
	<?php echo CHtml::encode($data->father); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother')); ?>:</b>
	<?php echo CHtml::encode($data->mother); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_birth')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_birth); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('gnder')); ?>:</b>
	<?php echo CHtml::encode($data->gnder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pinocde')); ?>:</b>
	<?php echo CHtml::encode($data->pinocde); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('academic')); ?>:</b>
	<?php echo CHtml::encode($data->academic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproof')); ?>:</b>
	<?php echo CHtml::encode($data->idproof); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('exam_mode')); ?>:</b>
	<?php echo CHtml::encode($data->exam_mode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo')); ?>:</b>
	<?php echo CHtml::encode($data->photo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('certificate')); ?>:</b>
	<?php echo CHtml::encode($data->certificate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('register_on')); ?>:</b>
	<?php echo CHtml::encode($data->register_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('certificate_on')); ?>:</b>
	<?php echo CHtml::encode($data->certificate_on); ?>
	<br />

	*/ ?>

</div>
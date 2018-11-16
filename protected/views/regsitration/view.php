<?php
/* @var $this RegsitrationController */
/* @var $model Regsitration */

$this->breadcrumbs=array(
	'Regsitrations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Regsitration', 'url'=>array('index')),
	array('label'=>'Create Regsitration', 'url'=>array('create')),
	array('label'=>'Update Regsitration', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Regsitration', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Regsitration', 'url'=>array('admin')),
);
?>

<h1>View Regsitration #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'enroll_id',
		'course_id',
		'name',
		'father',
		'mother',
		'date_of_birth',
		'gnder',
		'address',
		'pinocde',
		'state',
		'email',
		'mobile',
		'academic',
		'idproof',
		'exam_mode',
		'photo',
		'certificate',
		'status',
		'register_on',
		'certificate_on',
	),
)); ?>

<?php
/* @var $this RegsitrationController */
/* @var $model Regsitration */

$this->breadcrumbs=array(
	'Regsitrations'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Regsitration', 'url'=>array('index')),
	array('label'=>'Create Regsitration', 'url'=>array('create')),
	array('label'=>'View Regsitration', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Regsitration', 'url'=>array('admin')),
);
?>

<h1>Update Regsitration <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
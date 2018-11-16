<?php
/* @var $this RegsitrationController */
/* @var $model Regsitration */

$this->breadcrumbs=array(
	'Regsitrations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Regsitration', 'url'=>array('index')),
	array('label'=>'Manage Regsitration', 'url'=>array('admin')),
);
?>

<h1>Create Regsitration</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this SiteBudgetController */
/* @var $model SiteBudget */

$this->breadcrumbs=array(
	'Site Budgets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SiteBudget', 'url'=>array('index')),
	array('label'=>'Manage SiteBudget', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
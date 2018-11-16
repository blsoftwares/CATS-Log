<?php
/* @var $this SiteBudgetAllocationMethodController */
/* @var $model SiteBudgetAllocationMethod */

$this->breadcrumbs=array(
	'Site Budget Allocation Methods'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SiteBudgetAllocationMethod', 'url'=>array('index')),
	array('label'=>'Manage SiteBudgetAllocationMethod', 'url'=>array('admin')),
);
?>

<h1>Create SiteBudgetAllocationMethod</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
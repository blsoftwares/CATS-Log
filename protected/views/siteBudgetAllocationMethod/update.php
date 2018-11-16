<?php
/* @var $this SiteBudgetAllocationMethodController */
/* @var $model SiteBudgetAllocationMethod */

$this->breadcrumbs=array(
	'Site Budget Allocation Methods'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SiteBudgetAllocationMethod', 'url'=>array('index')),
	array('label'=>'Create SiteBudgetAllocationMethod', 'url'=>array('create')),
	array('label'=>'View SiteBudgetAllocationMethod', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SiteBudgetAllocationMethod', 'url'=>array('admin')),
);
?>

<h1>Update SiteBudgetAllocationMethod <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
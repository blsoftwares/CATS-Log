<?php
/* @var $this SiteBudgetAllocationMethodController */
/* @var $model SiteBudgetAllocationMethod */

$this->breadcrumbs=array(
	'Site Budget Allocation Methods'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SiteBudgetAllocationMethod', 'url'=>array('index')),
	array('label'=>'Create SiteBudgetAllocationMethod', 'url'=>array('create')),
	array('label'=>'Update SiteBudgetAllocationMethod', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SiteBudgetAllocationMethod', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SiteBudgetAllocationMethod', 'url'=>array('admin')),
);
?>

<h1>View SiteBudgetAllocationMethod #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'site_id',
		'budget_method',
	),
)); ?>

<?php
/* @var $this SiteBudgetController */
/* @var $model SiteBudget */

$this->breadcrumbs=array(
	'Site Budgets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SiteBudget', 'url'=>array('index')),
	array('label'=>'Create SiteBudget', 'url'=>array('create')),
	array('label'=>'Update SiteBudget', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SiteBudget', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SiteBudget', 'url'=>array('admin')),
);
?>

<h1>View SiteBudget #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'site_id',
		'financial_year',
		'budget',
		'budget_date',
	),
)); ?>

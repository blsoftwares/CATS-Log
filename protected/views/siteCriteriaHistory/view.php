<?php
/* @var $this SiteCriteriaHistoryController */
/* @var $model SiteCriteriaHistory */

$this->breadcrumbs=array(
	'Site Criteria Histories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SiteCriteriaHistory', 'url'=>array('index')),
	array('label'=>'Create SiteCriteriaHistory', 'url'=>array('create')),
	array('label'=>'Update SiteCriteriaHistory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SiteCriteriaHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SiteCriteriaHistory', 'url'=>array('admin')),
);
?>

<h1>View SiteCriteriaHistory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'site_id',
		'criteria_id',
		'assesment',
		'comment',
		'rating',
	),
)); ?>

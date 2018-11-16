<?php
/* @var $this SiteElementHistoryController */
/* @var $model SiteElementHistory */

$this->breadcrumbs=array(
	'Site Element Histories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SiteElementHistory', 'url'=>array('index')),
	array('label'=>'Create SiteElementHistory', 'url'=>array('create')),
	array('label'=>'Update SiteElementHistory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SiteElementHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SiteElementHistory', 'url'=>array('admin')),
);
?>

<h1>View SiteElementHistory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'site_id',
		'criteria_id',
		'assesment',
		'comment',
		'rating',
		'ratingby',
	),
)); ?>

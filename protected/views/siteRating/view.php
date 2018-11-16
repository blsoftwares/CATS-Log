<?php
/* @var $this SiteRatingController */
/* @var $model SiteRating */

$this->breadcrumbs=array(
	'Site Ratings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SiteRating', 'url'=>array('index')),
	array('label'=>'Create SiteRating', 'url'=>array('create')),
	array('label'=>'Update SiteRating', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SiteRating', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SiteRating', 'url'=>array('admin')),
);
?>

<h1>View SiteRating #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'site_id',
		'rating',
	),
)); ?>

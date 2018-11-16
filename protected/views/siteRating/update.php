<?php
/* @var $this SiteRatingController */
/* @var $model SiteRating */

$this->breadcrumbs=array(
	'Site Ratings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SiteRating', 'url'=>array('index')),
	array('label'=>'Create SiteRating', 'url'=>array('create')),
	array('label'=>'View SiteRating', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SiteRating', 'url'=>array('admin')),
);
?>

<h1>Update SiteRating <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
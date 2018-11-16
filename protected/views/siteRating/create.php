<?php
/* @var $this SiteRatingController */
/* @var $model SiteRating */

$this->breadcrumbs=array(
	'Site Ratings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SiteRating', 'url'=>array('index')),
	array('label'=>'Manage SiteRating', 'url'=>array('admin')),
);
?>

<h1>Create SiteRating</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
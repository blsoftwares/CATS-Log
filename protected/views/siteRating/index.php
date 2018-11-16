<?php
/* @var $this SiteRatingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Site Ratings',
);

$this->menu=array(
	array('label'=>'Create SiteRating', 'url'=>array('create')),
	array('label'=>'Manage SiteRating', 'url'=>array('admin')),
);
?>

<h1>Site Ratings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

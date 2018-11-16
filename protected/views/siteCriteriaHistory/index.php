<?php
/* @var $this SiteCriteriaHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Site Criteria Histories',
);

$this->menu=array(
	array('label'=>'Create SiteCriteriaHistory', 'url'=>array('create')),
	array('label'=>'Manage SiteCriteriaHistory', 'url'=>array('admin')),
);
?>

<h1>Site Criteria Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

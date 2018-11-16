<?php
/* @var $this SiteElementHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Site Element Histories',
);

$this->menu=array(
	array('label'=>'Create SiteElementHistory', 'url'=>array('create')),
	array('label'=>'Manage SiteElementHistory', 'url'=>array('admin')),
);
?>

<h1>Site Element Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

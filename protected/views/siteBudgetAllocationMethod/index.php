<?php
/* @var $this SiteBudgetAllocationMethodController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Site Budget Allocation Methods',
);

$this->menu=array(
	array('label'=>'Create SiteBudgetAllocationMethod', 'url'=>array('create')),
	array('label'=>'Manage SiteBudgetAllocationMethod', 'url'=>array('admin')),
);
?>

<h1>Site Budget Allocation Methods</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

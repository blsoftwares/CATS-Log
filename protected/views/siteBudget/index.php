<?php
/* @var $this SiteBudgetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Site Budgets',
);

$this->menu=array(
	array('label'=>'Create SiteBudget', 'url'=>array('create')),
	array('label'=>'Manage SiteBudget', 'url'=>array('admin')),
);
?>

<h1>Site Budgets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this SiteElementHistoryController */
/* @var $model SiteElementHistory */

$this->breadcrumbs=array(
	'Site Element Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SiteElementHistory', 'url'=>array('index')),
	array('label'=>'Manage SiteElementHistory', 'url'=>array('admin')),
);
?>

<h1>Create SiteElementHistory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this SiteCriteriaHistoryController */
/* @var $model SiteCriteriaHistory */

$this->breadcrumbs=array(
	'Site Criteria Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SiteCriteriaHistory', 'url'=>array('index')),
	array('label'=>'Manage SiteCriteriaHistory', 'url'=>array('admin')),
);
?>

<h1>Create SiteCriteriaHistory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
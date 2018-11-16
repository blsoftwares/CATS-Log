<?php
/* @var $this SiteCriteriaHistoryController */
/* @var $model SiteCriteriaHistory */

$this->breadcrumbs=array(
	'Site Criteria Histories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SiteCriteriaHistory', 'url'=>array('index')),
	array('label'=>'Create SiteCriteriaHistory', 'url'=>array('create')),
	array('label'=>'View SiteCriteriaHistory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SiteCriteriaHistory', 'url'=>array('admin')),
);
?>

<h1>Update SiteCriteriaHistory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
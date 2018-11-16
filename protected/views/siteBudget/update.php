<?php
/* @var $this SiteBudgetController */
/* @var $model SiteBudget */

$this->breadcrumbs=array(
	'Site Budgets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SiteBudget', 'url'=>array('index')),
	array('label'=>'Create SiteBudget', 'url'=>array('create')),
	array('label'=>'View SiteBudget', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SiteBudget', 'url'=>array('admin')),
);
?>

<h1>Update SiteBudget <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
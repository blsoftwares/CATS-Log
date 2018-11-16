<?php
/* @var $this SiteElementHistoryController */
/* @var $model SiteElementHistory */

$this->breadcrumbs=array(
	'Site Element Histories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SiteElementHistory', 'url'=>array('index')),
	array('label'=>'Create SiteElementHistory', 'url'=>array('create')),
	array('label'=>'View SiteElementHistory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SiteElementHistory', 'url'=>array('admin')),
);
?>

<h1>Update SiteElementHistory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
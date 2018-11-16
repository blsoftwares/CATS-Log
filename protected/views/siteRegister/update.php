<?php
/* @var $this SiteRegisterController */
/* @var $model SiteRegister */

$this->breadcrumbs=array(
	'Site Registers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SiteRegister', 'url'=>array('index')),
	array('label'=>'Create SiteRegister', 'url'=>array('create')),
	array('label'=>'View SiteRegister', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SiteRegister', 'url'=>array('admin')),
);
?>

<h1>Update SiteRegister <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
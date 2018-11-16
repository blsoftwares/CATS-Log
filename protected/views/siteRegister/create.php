<?php
/* @var $this SiteRegisterController */
/* @var $model SiteRegister */

$this->breadcrumbs=array(
	'Site Registers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SiteRegister', 'url'=>array('index')),
	array('label'=>'Manage SiteRegister', 'url'=>array('admin')),
);
?>

<h1>Create SiteRegister</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
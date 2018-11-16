<?php
/* @var $this SiteDocumentsController */
/* @var $model SiteDocuments */

$this->breadcrumbs=array(
	'Site Documents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SiteDocuments', 'url'=>array('index')),
	array('label'=>'Manage SiteDocuments', 'url'=>array('admin')),
);
?>

<h1>Create SiteDocuments</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
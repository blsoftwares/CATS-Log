<?php
/* @var $this SiteAssesmentDocumentController */
/* @var $model SiteAssesmentDocument */

$this->breadcrumbs=array(
	'Site Assesment Documents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SiteAssesmentDocument', 'url'=>array('index')),
	array('label'=>'Manage SiteAssesmentDocument', 'url'=>array('admin')),
);
?>

<h1>Create SiteAssesmentDocument</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
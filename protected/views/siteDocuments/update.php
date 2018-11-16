<?php
/* @var $this SiteDocumentsController */
/* @var $model SiteDocuments */

$this->breadcrumbs=array(
	'Site Documents'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SiteDocuments', 'url'=>array('index')),
	array('label'=>'Create SiteDocuments', 'url'=>array('create')),
	array('label'=>'View SiteDocuments', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SiteDocuments', 'url'=>array('admin')),
);
?>

<h1>Update SiteDocuments <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
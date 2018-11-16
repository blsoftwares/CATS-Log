<?php
/* @var $this SiteDocumentsController */
/* @var $model SiteDocuments */

$this->breadcrumbs=array(
	'Site Documents'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List SiteDocuments', 'url'=>array('index')),
	array('label'=>'Create SiteDocuments', 'url'=>array('create')),
	array('label'=>'Update SiteDocuments', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SiteDocuments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SiteDocuments', 'url'=>array('admin')),
);
?>

<h1>View SiteDocuments #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'site_id',
		'filename',
	),
)); ?>

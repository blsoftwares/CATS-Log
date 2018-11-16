<?php
/* @var $this SiteAssesmentDocumentController */
/* @var $model SiteAssesmentDocument */

$this->breadcrumbs=array(
	'Site Assesment Documents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SiteAssesmentDocument', 'url'=>array('index')),
	array('label'=>'Create SiteAssesmentDocument', 'url'=>array('create')),
	array('label'=>'Update SiteAssesmentDocument', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SiteAssesmentDocument', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SiteAssesmentDocument', 'url'=>array('admin')),
);
?>

<h1>View SiteAssesmentDocument #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'site_id',
		'criteria_id',
		'filename',
	),
)); ?>

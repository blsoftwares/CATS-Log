<?php
/* @var $this SiteAssesmentDocumentController */
/* @var $model SiteAssesmentDocument */

$this->breadcrumbs=array(
	'Site Assesment Documents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SiteAssesmentDocument', 'url'=>array('index')),
	array('label'=>'Create SiteAssesmentDocument', 'url'=>array('create')),
	array('label'=>'View SiteAssesmentDocument', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SiteAssesmentDocument', 'url'=>array('admin')),
);
?>

<h1>Update SiteAssesmentDocument <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
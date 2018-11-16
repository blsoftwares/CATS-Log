<?php
/* @var $this SiteAssesmentDocumentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Site Assesment Documents',
);

$this->menu=array(
	array('label'=>'Create SiteAssesmentDocument', 'url'=>array('create')),
	array('label'=>'Manage SiteAssesmentDocument', 'url'=>array('admin')),
);
?>

<h1>Site Assesment Documents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this SiteDocumentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Site Documents',
);

$this->menu=array(
	array('label'=>'Create SiteDocuments', 'url'=>array('create')),
	array('label'=>'Manage SiteDocuments', 'url'=>array('admin')),
);
?>

<h1>Site Documents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

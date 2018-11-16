<?php
/* @var $this SiteRegisterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Site Registers',
);

$this->menu=array(
	array('label'=>'Create SiteRegister', 'url'=>array('create')),
	array('label'=>'Manage SiteRegister', 'url'=>array('admin')),
);
?>

<h1>Site Registers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

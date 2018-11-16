<?php
/* @var $this RegsitrationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Regsitrations',
);

$this->menu=array(
	array('label'=>'Create Regsitration', 'url'=>array('create')),
	array('label'=>'Manage Regsitration', 'url'=>array('admin')),
);
?>

<h1>Regsitrations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

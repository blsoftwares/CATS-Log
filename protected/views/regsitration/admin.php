<?php
/* @var $this RegsitrationController */
/* @var $model Regsitration */

$this->breadcrumbs=array(
	'Regsitrations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Regsitration', 'url'=>array('index')),
	array('label'=>'Create Regsitration', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#regsitration-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Regsitrations</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'regsitration-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'enroll_id',
		'course_id',
		'name',
		'father',
		'mother',
		/*
		'date_of_birth',
		'gnder',
		'address',
		'pinocde',
		'state',
		'email',
		'mobile',
		'academic',
		'idproof',
		'exam_mode',
		'photo',
		'certificate',
		'status',
		'register_on',
		'certificate_on',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

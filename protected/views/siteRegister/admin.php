<?php
/* @var $this SiteRegisterController */
/* @var $model SiteRegister */

$this->breadcrumbs=array(
	'Site Registers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SiteRegister', 'url'=>array('index')),
	array('label'=>'Create SiteRegister', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#site-register-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Site Registers</h1>

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
	'id'=>'site-register-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'site_id',
		'email',
		'password',
		'name',
		'mobile',
		/*
		'address',
		'name_cpa',
		'site_country',
		'doe_cpa',
		'location1',
		'location2',
		'iucn_cat',
		'wdpa_id',
		'affiliation',
		'partner_cats',
		'objective',
		'cats_area',
		'mgm_zone_details',
		'basic_info',
		'mee_system',
		'mee_report_link',
		'tiger_population',
		'breeding',
		'population_trend',
		'area_suitable',
		'actions_taken',
		'staff_total',
		'staff_protection',
		'annual_budget',
		'site_image',
		'status',
		'cats_status',
		'regsitered_on',
		'cats_approval',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

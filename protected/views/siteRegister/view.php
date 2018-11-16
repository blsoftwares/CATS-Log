<?php
/* @var $this SiteRegisterController */
/* @var $model SiteRegister */

$this->breadcrumbs=array(
	'Site Registers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List SiteRegister', 'url'=>array('index')),
	array('label'=>'Create SiteRegister', 'url'=>array('create')),
	array('label'=>'Update SiteRegister', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SiteRegister', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SiteRegister', 'url'=>array('admin')),
);
?>

<h1>View SiteRegister #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'site_id',
		'email',
		'password',
		'name',
		'mobile',
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
	),
)); ?>

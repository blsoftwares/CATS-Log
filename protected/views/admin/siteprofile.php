<section role="main" class="content-body">
					<header class="page-header">
						<h2>CA|TS Log Site : <?php echo $model->name_cpa;?></h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>CA|TS Log Portal</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" ></a>
						</div>
					</header>
<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">Site Profile</h2>
									</header>
									<div class="panel-body">
										
<?php 
if(!empty($model)){
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'site_id',
		'email',
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
));
}
else
echo 'No data found for this site';
 ?>

									</div>
								</section>
                                
                              
							</div>
                            
                           
                            
						</div>
<section role="main" class="content-body">
					<header class="page-header">
						<h2>CA|TS Log Engagement</h2>
					
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
							
                         <?php if(!empty($model)){ ?>
                            <div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">Update <b><?php echo $model->name_cpa;?></b> Profile Status</h2>
									</header>
									<div class="panel-body">
										
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'site-register-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group col-md-3">
		<label>Site Objective</label>
		<p><?php echo $model->objective;?></p>
		
	</div>

	
	<div class="form-group col-md-3">
		<label>Official/Director Name</label>
		<p><?php echo $model->name;?></p>
		
	</div>
    
    <div class="form-group col-md-3">
		<label>Site Location</label>
		<p><?php echo $model->address;?></p>
	
	</div>

	<div class="form-group col-md-3">
		<label>Site Contact</label>
		<p><?php echo $model->mobile;?></p>
		
	</div>
<div class="clearfix"></div>


	<div class="form-group col-md-3">
		<label>Site Country</label>
		<p><?php echo $model->site_country;?></p>
		
	</div>
    
    <div class="form-group col-md-3">
		<label>Site Area(in sqkm)</label>
		<p><?php echo $model->cats_area;?></p>
		
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array('1'=>'Approved','0'=>'Reject'),array('empty'=>'--Select Status--','class'=>'form-control')); ?>
		
	</div>

	<div class="form-group col-md-3">
		<label>Action </label>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary form-control')); ?>
	</div>

<?php $this->endWidget(); ?>
									</div>
								</section>
                                
                              
							</div>
                            
                            <?php } ?>
                            
                            
                            <div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">CA|TS Log Engagement Registered Site List</h2>
									</header>
									<div class="panel-body">
<style>
.tr_isadmin { 
    background-color: red; 
}
</style>										
<?php 

$dataProvider = new CActiveDataProvider('SiteRegister', array(
   'criteria'=>array(
          'condition'=> '',
       )
));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'site-register-grid',
	'dataProvider'=>$dataProvider,
	'rowCssClassExpression' => '($data->id==$id) ? "tr_isadmin" : ""',
	'columns'=>array(
		'email',
		'password',
		array(
		'name'=>'Site Name',
		'value'=>'$data->name_cpa',
		),
		array(
		'name'=>'Site Director/Official',
		'value'=>'$data->name',
		),
		
		'mobile',
		/*
		'address',
		
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
		
		'cats_status',
		
		'cats_approval',
		*/
		array(
		'name'=>'Status',
		'value'=>'($data->status==1)?"Approved":"Rejected"',
		),
		array(
		'name'=>'Profile',
		'value'=>'($data->profile==1)?"Completed":"Pending"',
		),
		'regsitered_on',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}',
			'buttons' => array(
               'update' => array( //the name {reply} must be same
                 'label' => 'update', // text label of the button
                   'url' => 'CHtml::normalizeUrl(array("catsadmin/siteProfile/id/".rawurlencode($data->id)))', //Your URL According to your wish
                     
                   ),
               ),
		),
	),
)); ?>
									</div>
								</section>
                                
                              
							</div>
                            
                           
                            
						</div>
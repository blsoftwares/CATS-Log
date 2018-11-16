<section role="main" class="content-body">
					<header class="page-header">
						<h2>CA|TS Log Engagement</h2>
					
						
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


	<?php echo $form->errorSummary($model); ?>

	
    <b><?php echo CHtml::encode($model->getAttributeLabel('name_cpa')); ?>:</b>
	<?php echo CHtml::encode($model->name_cpa); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($model->address); ?>
	<br />
    
    <b><?php echo CHtml::encode($model->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($model->name); ?>
	<br />

	
	

	<b><?php echo CHtml::encode($model->getAttributeLabel('site_country')); ?>:</b>
	<?php echo CHtml::encode($model->site_country); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('doe_cpa')); ?>:</b>
	<?php echo CHtml::encode($model->doe_cpa); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('location1')); ?>:</b>
	<?php echo CHtml::encode($model->location1); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('location2')); ?>:</b>
	<?php echo CHtml::encode($model->location2); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('iucn_cat')); ?>:</b>
	<?php echo CHtml::encode($model->iucn_cat); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('wdpa_id')); ?>:</b>
	<?php echo CHtml::encode($model->wdpa_id); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('affiliation')); ?>:</b>
	<?php echo CHtml::encode($model->affiliation); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('partner_cats')); ?>:</b>
	<?php echo CHtml::encode($model->partner_cats); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('objective')); ?>:</b>
	<?php echo CHtml::encode($model->objective); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('cats_area')); ?>:</b>
	<?php echo CHtml::encode($model->cats_area); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('mgm_zone_details')); ?>:</b>
	<?php echo CHtml::encode($model->mgm_zone_details); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('basic_info')); ?>:</b>
	<?php echo CHtml::encode($model->basic_info); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('mee_system')); ?>:</b>
	<?php echo CHtml::encode($model->mee_system); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('mee_report_link')); ?>:</b>
	<?php echo CHtml::encode($model->mee_report_link); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('tiger_population')); ?>:</b>
	<?php echo CHtml::encode($model->tiger_population); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('breeding')); ?>:</b>
	<?php echo CHtml::encode($model->breeding); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('population_trend')); ?>:</b>
	<?php echo CHtml::encode($model->population_trend); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('area_suitable')); ?>:</b>
	<?php echo CHtml::encode($model->area_suitable); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('actions_taken')); ?>:</b>
	<?php echo CHtml::encode($model->actions_taken); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('staff_total')); ?>:</b>
	<?php echo CHtml::encode($model->staff_total); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('staff_protection')); ?>:</b>
	<?php echo CHtml::encode($model->staff_protection); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('annual_budget')); ?>:</b>
	<?php echo CHtml::encode($model->annual_budget); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('site_image')); ?>:</b>
	<?php echo CHtml::encode($model->site_image); ?>
	<br />

	

	<b><?php echo CHtml::encode($model->getAttributeLabel('regsitered_on')); ?>:</b>
	<?php echo CHtml::encode($model->regsitered_on); ?>
	<br />


	<div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array('1'=>'Activated','0'=>'De-Activated'),array('empty'=>'--Select Status--','class'=>'form-control')); ?>
		
	</div>
    
  

	<div class="form-group  col-md-6">
		<label></label>
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
          'condition'=> "site_country='".$user['country']."' and profile=1 ",
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
		'name'=>'Approved',
		'value'=>'($data->status==1)?"Activated ":"De-Activated"',
		),
		
		array(
		'name'=>'Profile',
		'value'=>'($data->profile==1)?"Completed":"Pending"',
		),
		array(
		'name'=>'Submit On',
		'value'=>'($data->regsitered_on=="0000-00-00")?"In-Completed":$data->regsitered_on',
		),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}',
			'buttons' => array(
               'update' => array( //the name {reply} must be same
                 'label' => 'update', // text label of the button
                   'url' => 'CHtml::normalizeUrl(array("national/siteProfile/id/".rawurlencode($data->id)))', //Your URL According to your wish
                     
                   ),
               ),
		),
	),
)); ?>
									</div>
								</section>
                                
                              
							</div>
                            
                           
                            
						</div>
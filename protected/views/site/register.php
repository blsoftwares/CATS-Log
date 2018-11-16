<style>
.required{color:#777  !important;
font-size:13px !important;
font-weight:normal !important;
}
</style>
				<section role="main" class="content-body">
					<header class="page-header">
						<h2> CA|TS Log Engagement Form</h2>
		
					</header>
<div class="row">
							<div class="col-lg-12">
								<section class="panel">
                                
									<?php if($msg!=""){?>
                                    <header class="panel-heading">										
									<p><?php echo $msg;?></p>
									</header>
                                    <?php }?>
                                    
									<div class="panel-body">
                                    
                                    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'site-register-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array(
        'enctype'=>'multipart/form-data'
    ),
)); ?>

	<?php if($form->errorSummary($model)){ ?>
	<div class="alert alert-danger"><?php echo $form->errorSummary($model); ?></div>
    <?php }?>
    
    
    
	<div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'name_cpa',array("class"=>"control-label")); ?>
		
		
	</div>   
	
	<div class="form-group col-md-6">
		
		<?php echo $form->textField($model,'name_cpa',array("class"=>"form-control" ,'size'=>60,'maxlength'=>200)); ?>
		
	</div>    

    
    <div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'doe_cpa',array("class"=>"form-control" ,"class"=>"control-label")); ?>
		
		
	</div>
	
	<div class="form-group col-md-6">
		<style>
		.ui-datepicker-month{ background:#f6a828  !important;}
        .ui-datepicker-year{ background:#f6a828  !important;}
        </style>
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'model'=>$model,
	'attribute'=>'doe_cpa',
    // additional javascript options for the date picker plugin
    'options'=>array(
        'showAnim'=>'fold',
		'dateFormat' => 'dd-mm-yy',
		'showOtherMonths'=>true,// Show Other month in jquery
        'selectOtherMonths'=>true,// Select Other month in jquery
		'changeYear' => true,			// can change year
		'changeMonth' => true,	
		
    ),
    'htmlOptions'=>array(
		'class'=>'form-control',
		'readonly'=>true
    ),
));
		
		//echo $form->textField($model,'doe_cpa',array("class"=>"form-control")); ?>
		
	</div>
	
    
    <div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'location1',array("class"=>"control-label")); ?>
		
		
	</div>
	
	<div class="form-group col-md-6">
		
		<?php echo $form->textField($model,'location1',array("class"=>"form-control" ,'size'=>20,'maxlength'=>20)); ?>
		
	</div>

	<div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'location2',array("class"=>"control-label")); ?>
		
		
	</div>
	
	<div class="form-group col-md-6">
		
		<?php echo $form->textField($model,'location2',array("class"=>"form-control" ,'size'=>20,'maxlength'=>20)); ?>
		
	</div>
    
    <div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'iucn_cat',array("class"=>"form-control" ,"class"=>"control-label")); ?>
		
		
	</div>
	
	 <div class="form-group col-md-6">
		
		 <?php echo $form->textField($model,'iucn_cat',array("class"=>"form-control")); ?>
		
	</div>

	<div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'wdpa_id',array("class"=>"control-label")); ?>
		
	</div>
	
	<div class="form-group col-md-6">
	
		<?php echo $form->textField($model,'wdpa_id',array("class"=>"form-control")); ?>
		
	</div>
    
    

	<div class="form-group  col-md-6">
		<?php echo $form->labelEx($model,'name',array("class"=>"control-label")); ?>
       
		
	</div>
	
		<div class="form-group  col-md-6">
		
		<?php echo $form->textField($model,'name',array("class"=>"form-control")); ?>
	</div>
    
	<div class="form-group  col-md-6">
		<?php echo $form->labelEx($model,'affiliation',array("class"=>"control-label")); ?>
	
		
	</div>
	
		<div class="form-group  col-md-6">
		
		 <div class="input-group  mb-md">		
		<?php echo $form->textField($model,'affiliation',array("class"=>"form-control" ,'rows'=>1, 'cols'=>50)); ?>
		<span class="input-group-addon">
		<span class="icon">Designation</span>
		</span>
		</div>
		
	</div>
    
    
    <div class="form-group   col-md-6">
		<?php echo $form->labelEx($model,'cats_area',array("class"=>"control-label")); ?>
		
		
		
	</div>
	
	<div class="form-group   col-md-6">
		
		<div class="input-group  mb-md">		
		<?php echo $form->textField($model,'cats_area',array("class"=>"form-control")); ?>
		<span class="input-group-addon">
		<span class="icon">/sq km</span>
		</span>
		</div>
		
		
	</div>
    
    <div class="form-group   col-md-6">
		<?php echo $form->labelEx($model,'staff_total',array("class"=>"control-label")); ?>
		
		
	</div>
	
	 <div class="form-group   col-md-6">
	
		<?php echo $form->textField($model,'staff_total',array("class"=>"form-control")); ?>
		
	</div>

	<div class="form-group   col-md-6">
		<?php echo $form->labelEx($model,'staff_protection',array("class"=>"control-label")); ?>
		
		
	</div>
	
	<div class="form-group   col-md-6">
		
		<?php echo $form->textField($model,'staff_protection',array("class"=>"form-control")); ?>
		
	</div>

	<div class="form-group   col-md-6">
		<?php echo $form->labelEx($model,'annual_budget',array("class"=>"control-label")); ?>
		
		
	</div>
	
	<div class="form-group   col-md-6">
		
		<div class="input-group  mb-md">
		<span class="input-group-addon">
		<span class="icon"><i class="fa fa-usd"></i></span>
		</span>
		<?php echo $form->textField($model,'annual_budget',array("class"=>"form-control")); ?>
		</div>
		
	</div>

	

	<div class="form-group  col-md-6">
		<?php echo $form->labelEx($model,'address',array("class"=>"control-label")); ?>
		
		
	</div>
	
		<div class="form-group  col-md-6">
		
		<?php echo $form->textArea($model,'address',array("class"=>"form-control" ,'rows'=>2, 'cols'=>50)); ?>
		
	</div>


	<div class="form-group  col-md-6">
		<?php echo $form->labelEx($model,'partner_cats',array("class"=>"control-label")); ?>
		
		
	</div>
	
	
	<div class="form-group  col-md-6">
    
     <?php 
		if($model->partner_cats_status=="")
		$model->partner_cats_status = "Yes";
		else
		$model->partner_cats_status = $model->partner_cats_status ;  ?>
		
		<?php
                $accountStatus = array('Yes'=>'Yes', 'No'=>'No');
                echo $form->radioButtonList($model,'partner_cats_status',$accountStatus,array('separator'=>' ','onclick'=>'showproject(this.value);'));
        ?>
        
       
        
       
		<?php echo $form->textArea($model,'partner_cats',array("class"=>"form-control" ,'rows'=>2, 'cols'=>50)); ?>
		<script>
		$(document).ready(function(){
			<?php if($model->partner_cats_status=="No"){?>
		 showproject('No');
		<?php } ?>
		
		})
		function showproject(project)
		{
			
			if(project=="Yes")
			{
			$("#SiteRegister_partner_cats").attr('readonly',false);
			$("#SiteRegister_partner_cats").text('<?php echo $model->partner_cats;?>');
			}
			if(project=="No")
			{
			$("#SiteRegister_partner_cats").attr('readonly',true);
			$("#SiteRegister_partner_cats").text('NA');
			}
		}
		</script>
	</div>
	
	
	<div class="clearfix"></div>
    
    <div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'site_image',array("class"=>"control-label")); ?>
	</div>
    
      <div class="form-group  col-md-6">
		
		<?php echo $form->fileField($model,'site_image',array('size'=>60,'maxlength'=>100)); ?>
		
	</div>

    
    <div class="clearfix"></div>
    
   <div>
  
   <p><strong>CA|TS Log is aimed at conservation / protected areas which have tiger conservation as a target and value. Please provide brief answers (maximum 100 words) to the following questions:		
</strong></p>
   </div>

	
	<div class="form-group  col-md-6">
		<?php echo $form->labelEx($model,'objective',array("class"=>"control-label")); ?>
		
		
	</div>

	
	<div class="form-group  col-md-6">
		
		<?php echo $form->textArea($model,'objective',array("class"=>"form-control" ,'rows'=>2,'size'=>60)); ?>
		
	</div>

	

	<div class="form-group  col-md-6">
		<?php echo $form->labelEx($model,'mgm_zone_details',array("class"=>"control-label")); ?>
		
		
	</div>
	


	<div class="form-group  col-md-6">
		
		<?php echo $form->textArea($model,'mgm_zone_details',array("class"=>"form-control",'rows'=>2,'size'=>60)); ?>
		
	</div>
    <div class="clearfix"></div>
    
   <div>
  
   <p><strong>The basic information source to determine the justification for a CA|TS Log assessment is an existing site-level management effectiveness evaluation (MEE) e.g. METT, Indian MME TR, Enhancing our Heritage.	</strong>	
</p>
   </div>      
   
   <div class="form-group  col-md-6">		
   <?php echo $form->labelEx($model,'mee_status',array("class"=>"control-label")); ?>					
   </div>			
   <div class="form-group  col-md-6">         
   <?php 		
   if($model->mee_status=="")		
   $model->mee_status = "Yes";		
   else		
   $model->mee_status = $model->mee_status ;  ?>				
   <?php                
   $mee_status = array('Yes'=>'Yes', 'No'=>'No');                
   echo $form->radioButtonList($model,'mee_status',$accountStatus,array('separator'=>' ','onclick'=>'showmee(this.value);'));        ?>    		
   <script>		
   $(document).ready(function(){			
   <?php if($model->mee_status=="No"){?>		 
   showmee('No');		
   <?php } ?>				
   })		
   function showmee(project)		
   {						
   if(project=="Yes")			
   {			
   $("#SiteRegister_mee_system").attr('readonly',false);			
   $("#SiteRegister_mee_system").text('<?php echo $model->mee_system;?>');						
   $("#SiteRegister_mee_report_link").attr('readonly',false);			
   $("#SiteRegister_mee_report_link").text('<?php echo $model->mee_report_link;?>');						
   }			
   if(project=="No")			
   {			
   $("#SiteRegister_mee_system").attr('readonly',true);			
   $("#SiteRegister_mee_system").text('N.A.');						
   $("#SiteRegister_mee_report_link").attr('readonly',true);			
   $("#SiteRegister_mee_report_link").text('N.A.');			
   }		
   }		
   </script>	
   </div>			
   <div class="clearfix"></div>   

	<div class="form-group  col-md-6">
		<?php echo $form->labelEx($model,'mee_system',array("class"=>"control-label")); ?>
		
		
	</div>
	
	<div class="form-group  col-md-6">
		
		<?php echo $form->textArea($model,'mee_system',array("class"=>"form-control",'size'=>60)); ?>
		
	</div>

	<div class="form-group  col-md-6">
		<?php echo $form->labelEx($model,'mee_report_link',array("class"=>"control-label")); ?>
		
		
	</div>
	
		<div class="form-group  col-md-6">
		
		<?php echo $form->textArea($model,'mee_report_link',array("class"=>"form-control",'size'=>60)); ?>
		
	</div>
    
    <div class="clearfix"></div>
   <div>
  
   <p><strong>If tigers are present in the conservation areas. Please provide brief answers (maximum 100 words) to the following questions:	</strong>	
</p>
   </div>
    
    <div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'tiger_population',array("class"=>"control-label")); ?>
		
		
	</div>
	
	  <div class="form-group col-md-6">
		
		<?php echo $form->textArea($model,'tiger_population',array("class"=>"form-control",'size'=>60)); ?>
		
	</div>

	<div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'breeding',array("class"=>"control-label")); ?>
		
		
	</div>
    
	
	<div class="form-group col-md-6">
		
		<?php echo $form->textArea($model,'breeding',array("class"=>"form-control",'size'=>60)); ?>
		
	</div>
    
	
     <div class="clearfix"></div>

	<div class="form-group  col-md-6">
		<?php echo $form->labelEx($model,'population_trend',array("class"=>"control-label")); ?>
		
		
	</div>
	
	<div class="form-group  col-md-6">
		
		<?php 
echo $form->radioButtonList($model,'population_trend',array('Stable'=>'Stable','Increasing'=>'Increasing','Decreasing'=>'Decreasing')); 
?>
		
	</div>
    <div class="clearfix"></div>
    
    <div>
  
   <p><strong>For sites which currently do not have viable tiger populations. Please provide brief answers (maximum 100 words) to the following questions:</strong>		
</p>
   </div>
    
    
	<div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'area_suitable',array("class"=>"control-label")); ?>
		
		
	</div>
	
	<div class="form-group col-md-6">
		
		<?php echo $form->textArea($model,'area_suitable',array("class"=>"form-control",'size'=>60)); ?>
		
	</div>
   

	<div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'actions_taken',array("class"=>"control-label")); ?>
		
		
	</div>
	
	<div class="form-group col-md-6">
		
		<?php echo $form->textArea($model,'actions_taken',array("class"=>"form-control",'size'=>60)); ?>
		
	</div>

<div>
  
   <p></strong>By completing and signing this form as the official representative of the conservation / protected area you are registering the site for CA|TS Log and hereby agree to work towards achieving CA|TS Log Approved status	</strong>	
</p>
   </div>
	
	<div class="form-group buttons">
		<center><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Register',array('class'=>'btn btn-primary','onclick'=>"this.disabled=true;this.value='Updating profile. Please wait....';this.form.submit();" )); ?></center>
	</div>

<?php $this->endWidget(); ?>

                                    
										
									</div>
								</section>
						
								
						
							</div>
						</div>
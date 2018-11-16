				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Profile Details</h2>
					
						
					</header>
<div class="row">
							
                            <div class="col-lg-12">
								<section class="panel">
									
									<div class="panel-body">
                                    <?php if(!empty($msg)){?>
                                    <p class="alert alert-info"><?php echo $msg;?></p>
                                    <?php }?>
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

	

	<?php echo $form->errorSummary($model); ?>
    
    
    
	<div class="form-group">
												<label class="col-md-4 control-label" for="inputDefault">Username *</label>
												<div class="col-md-8">
													
														
                                                        <p class="form-control"><?php echo $model->username;?></p>
														
													
                                                    
												</div>
											</div>
    
    
    
    
    <div class="form-group">
												<label class="col-md-4 control-label" for="inputDefault">Email *</label>
												<div class="col-md-8">
													
														
                                                        <?php echo $form->textField($model,'email',array('class'=>'form-control','size'=>60,'maxlength'=>200)); ?>
														
													
                                                    
												</div>
											</div>
                                          
                                          
                                          
                                            <div class="form-group">
												<label class="col-md-4 control-label" for="inputDefault">Password *</label>
												<div class="col-md-8">
													
														
                                                        <div class="input-group">
		
		<?php echo $form->passwordField($model,'password',array("class"=>"form-control")); ?>
        <span class="input-group-addon">
		<span class="icon" onclick="changeType();"><i class="fa fa-eye"></i></span>
		</span>
		</div>
														
													
                                                    <?php echo $form->error($model,'password',array('class'=>'alert-danger')); ?>
												</div>
											</div>
                                            
                                            
                                            <div class="form-group">
												<label class="col-md-4 control-label" for="inputDefault">Country *</label>
												<div class="col-md-8">
													
														
                                                        <p class="form-control"><?php echo $model->country;?></p>
														
													
                                                    
												</div>
											</div>
                                            
                                            
                                            
                                           <div class="form-group">
												<label class="col-md-4 control-label" for="inputDefault">Mobile </label>
												<div class="col-md-8">
													
														
                                                        <?php echo $form->textField($model,'mobile',array('class'=>'form-control','size'=>60,'maxlength'=>200)); ?>
														
													
                                                
												</div>
											</div>
                                            
                                            <div class="form-group">
												<label class="col-md-4 control-label" for="inputDefault">Profile Image </label>
												<div class="col-md-6">
													
														
                                                        <?php echo $form->fileField($model,'profileimage',array('class'=>'form-control','size'=>60,'maxlength'=>200)); ?>
														
													
                                                
												</div>
                                                
                                                <div class="col-md-2">
													
                                                    <?php if($model->profileimage!=""){ ?>
                                                     <img src="<?php echo Yii::app()->baseUrl;?>/img/site_documents/<?php echo $model->profileimage;?>"  width="100" height="100"  id="blah"/>
														
                                                        <?php } else{?>
                                                        
                                                       <img src="<?php echo Yii::app()->baseUrl;?>/img/site_documents/noimage.png" width="100" height="100" id="blah" />
                                                        <?php } ?>
                                                       
                                                
												</div>
											</div>
    
     <div class="clearfix"></div>
	
	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update',array('class'=>'btn btn-success','onclick'=>"this.disabled=true;this.value='Updating profile. Please wait....';this.form.submit();" )); ?>
	</div>

<?php $this->endWidget(); ?>

                                    
										
									</div>
								</section>
						
								
						
							</div>
                            </center>
						</div>
                        
                         <script>
						 
						 function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}
$(document).ready(function(){
$("#SiteRegister_profileimage").change(function() {
  readURL(this);
});
});
						 
						 
						 
						 
		function changeType()
    {
	$type=$('#UserLogin_password').attr('type');
     if($type=="text") 
		$('#UserLogin_password').attr('type','password');
	if($type=="password")
		$('#UserLogin_password').attr('type','text');
		
    }
</script>		
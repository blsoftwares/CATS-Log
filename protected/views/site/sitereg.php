<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/css/intlTelInput.css" />
<script src="<?php echo Yii::app()->baseUrl;?>/js/intlTelInput.js"></script>
<section class="body-sign">
			<div class="center-sign">
				<a href="<?php echo Yii::app()->baseUrl;?>" class="logo pull-left">
					<img src="<?php echo Yii::app()->baseUrl;?>/assets/images/logo.png" height="54" alt="Porto Admin">
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-weight-bold m-none">New CA|TS Log Site Registration</h2>
					</div>
					<div class="panel-body">
                    
                     <?php if($msg!=""){?>
                         <div class="alert alert-success">
                        
							<p class="text-weight-semibold"><?php echo $msg;?></p>
						</div>
                        <?php } ?>
                    
                    <div class="alert alert-info">
                        
							<p class="m-none text-weight-semibold h6">Register your site to CA|TS Log; To have safe heaven for Wild Tigers...!</p>
						</div>
                        
                        
                        
										
                                        
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'site-register-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

                                   <?php //echo $form->errorSummary($model); ?>    
											
                                            
                                          
                                          
                                            <div class="form-group">
												<label class="col-md-4 control-label" for="inputDefault">UserId *</label>
												<div class="col-md-8">
													
														
                                                        <?php echo $form->textField($model,'username',array('class'=>'form-control','size'=>60,'maxlength'=>200)); ?>
														
													
                                                    <?php echo $form->error($model,'username',array('class'=>'alert-danger')); ?>
												</div>
											</div>
                                            
                                            <div class="form-group">
												<label class="col-md-4 control-label" for="inputDefault">Name *</label>
												<div class="col-md-8">
													
														
                                                        <?php echo $form->textField($model,'reg_name',array('class'=>'form-control','size'=>60,'maxlength'=>200)); ?>
														
													
                                                    <?php echo $form->error($model,'reg_name',array('class'=>'alert-danger')); ?>
												</div>
											</div>
                                          
                                          
                                          
                                            <div class="form-group">
												<label class="col-md-4 control-label" for="inputDefault">Email Id *</label>
												<div class="col-md-8">
													
														
                                                        <?php echo $form->textField($model,'email',array('class'=>'form-control','size'=>60,'maxlength'=>200)); ?>
														
													
                                                    <?php echo $form->error($model,'email',array('class'=>'alert-danger')); ?>
												</div>
											</div>
						
											
											<div class="form-group">
												<label class="col-md-4 control-label" for="inputReadOnly">Password *</label>
												<div class="col-md-8">
													<div class="input-group input-group-icon">
															<span class="input-group-addon">
																<span class="icon"><i class="fa fa-key"></i></span>
															</span>
<?php echo $form->passwordField($model,'password',array('class'=>'form-control','size'=>20,'maxlength'=>20)); ?>														</div><?php echo $form->error($model,'password',array('class'=>'alert-danger')); ?>
                                                        </div>
                                                        
											</div>
                                            
                                            
											<div class="form-group">
												<label class="col-md-4 control-label" for="inputReadOnly">Re - Password *</label>
												<div class="col-md-8">
													<div class="input-group input-group-icon">
															<span class="input-group-addon">
																<span class="icon"><i class="fa fa-key"></i></span>
															</span>
<?php echo $form->passwordField($model,'repeat_password',array('class'=>'form-control','size'=>20,'maxlength'=>20)); ?>														</div> <?php echo $form->error($model,'repeat_password',array('class'=>'alert-danger')); ?>
                                                    </div>
                                                   
											</div>
                                            
                                            <div class="form-group">
												<label class="col-md-4 control-label" for="inputDisabled">Country *</label>
												<div class="col-md-8">
                                                 <?php
												$catc=SiteCountry::model()->findAllByAttributes(array('status'=>1),array('order'=>'name ASC'));
												?>
													<?php echo $form->dropDownList($model, 'site_country',
        CHtml::listData($catc, 'iso3', 'name'),array('empty'=>'--Select Country--','class'=>'form-control'));?>
<?php echo $form->error($model,'site_country',array('class'=>'alert-danger')); ?>
												</div>
		

											</div>
						
                                            
                                            
											<div class="form-group">
												<label class="col-md-4 control-label" for="inputReadOnly">Contact Mobile </label>
												<div class="col-md-8">
                                                                                                       
                                       <?php echo $form->textField($model,'mobile',array('class'=>'form-control','size'=>60,'maxlength'=>200)); ?>
													<?php echo $form->error($model,'mobile',array('class'=>'alert-danger')); ?>
												</div>
                                                
											</div>
						
										<div class="form-group">
                                        <p class="text-center text-muted mt-md mb-md">Please be sure that you have the rights to register your site in CA|TS Log</p>
                                        <center>
                                         <?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save',array('class'=>"mb-xs mt-xs mr-xs btn btn-primary",'onclick'=>"this.disabled=true;this.value='Saving data. Please wait....';this.form.submit();")); ?>
                                        </center>
                                        <span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>
                                        <p class="text-center text-muted mt-md mb-md">Already Registered for CA|TS Log Site? <a href="<?php echo Yii::app()->createUrl('site/login');?>">CA|TS Log Login!</a></p>
						
                        </div>
											
<?php $this->endWidget(); ?>
                                        
									</div>
                                    
				</div>

				<p class="text-center text-muted mt-md mb-md">© Copyright <?php echo date('Y');?>. All Rights Reserved.</p>
			</div>
		</section>
        <script>
		$(document).ready(function() {
    $('#site-register-form')
        .find('[name="SiteRegister[mobile]"]')
            .intlTelInput({
                utilsScript: '<?php echo Yii::app()->baseUrl;?>/js/utils.js',
                autoPlaceholder: true,
                preferredCountries: ['fr', 'us', 'gb']
            });
});
		</script>
<section class="body-sign">
			<div class="center-sign">
				<a href="<?php echo Yii::app()->baseUrl;?>" class="logo pull-left">
					<img src="<?php echo Yii::app()->baseUrl;?>/assets/images/logo.png" height="54" alt="Porto Admin">
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-weight-bold m-none"> Site Reviewer</h2>
					</div>
					<div class="panel-body">
						<div class="alert alert-info">
							<p class="m-none text-weight-semibold h6">Register to do audit & review CATS ENganement Sites Data.!</p>
						</div>
										<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'site-register-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

                                   <?php echo $form->errorSummary($model); ?>  
                                   
                                     <div class="form-group">
												<label class="col-md-4 control-label" for="inputDefault">Username :</label>
												<div class="col-md-8">
													<div class="input-group mb-md">
														
                                                        <?php echo $form->textField($model,'username',array('class'=>'form-control','size'=>60,'maxlength'=>200)); ?>
														
													</div>
                                                    
												</div>
											</div>
                                            
                                            <div class="form-group">
												<label class="col-md-4 control-label" for="inputDefault">Full Name :</label>
												<div class="col-md-8">
													<div class="input-group mb-md">
														
                                                        <?php echo $form->textField($model,'name',array('class'=>'form-control','size'=>60,'maxlength'=>200)); ?>
														
													</div>
                                                    
												</div>
											</div>
                                            
                                            
                                            <div class="form-group">
												<label class="col-md-4 control-label" for="inputDefault">Current position and affiliations :</label>
												<div class="col-md-8">
													<div class="input-group mb-md">
														
                                                        <?php echo $form->textField($model,'postion_affiliation',array('class'=>'form-control','size'=>60,'maxlength'=>200)); ?>
														
													</div>
                                                    
												</div>
											</div>
                                            
                                     
											<div class="form-group">
												<label class="col-md-4 control-label" for="inputDefault">Official Email Id :</label>
												<div class="col-md-8">
													<div class="input-group mb-md">
														<span class="input-group-addon">@</span>
                                                        <?php echo $form->textField($model,'email',array('class'=>'form-control','size'=>60,'maxlength'=>200)); ?>
														
													</div>
                                                    
												</div>
											</div>
						
											<div class="form-group">
												<label class="col-md-4 control-label" for="inputDisabled">Country :</label>
												<div class="col-md-8">
                                                <?php
												$catc=SiteCountry::model()->findAll(array('order'=>'name ASC'));
												?>
													<?php echo $form->dropDownList($model, 'country',
        CHtml::listData($catc, 'iso3', 'name'),array('class'=>'form-control'));?>

												</div>
		

											</div>
						
											<div class="form-group">
												<label class="col-md-4 control-label" for="inputReadOnly">Password :</label>
												<div class="col-md-8">
													<div class="input-group input-group-icon">
															<span class="input-group-addon">
																<span class="icon"><i class="fa fa-key"></i></span>
															</span>
<?php echo $form->passwordField($model,'password',array('class'=>'form-control','size'=>20,'maxlength'=>20)); ?>														</div>
                                                        </div>
                                                        
											</div>
                                            
                                            
											<div class="form-group">
												<label class="col-md-4 control-label" for="inputReadOnly">Contact Mobile :</label>
												<div class="col-md-8">
                                                <?php echo $form->textField($model,'mobile',array('class'=>'form-control','size'=>60,'maxlength'=>200)); ?>
													
												</div>
                                                
											</div>
						
										<div class="form-group">
                                        <p class="text-center text-muted mt-md mb-md">Please be sure that you are the right authority to register in CA|TS Log for your site</p>
						<button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary">Join Us</button>
                        </div>
											
<?php $this->endWidget(); ?>
									</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">© Copyright <?php echo date('Y');?>. All Rights Reserved.</p>
			</div>
		</section>
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>CATS-Log Admin Login Details</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Update Profile</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" ></a>
						</div>
					</header>
<div class="row">
							
                            <div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">Login Details</h2>
                                      
									</header>
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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    
    
    
	<div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array("class"=>"form-control",'size'=>60,'maxlength'=>200)); ?>
		
	</div>

	<div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'password'); ?><button type="button" onclick="changeType();"><i class="fa fa-eye"></i></button>
		<?php echo $form->passwordField($model,'password',array("class"=>"form-control",'size'=>20,'maxlength'=>20)); ?>
		
	</div>
    
    <div class="clearfix"></div>


	<div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array("class"=>"form-control",'size'=>10,'maxlength'=>10)); ?>
		
	</div>
    
     <div class="clearfix"></div>
	
	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update',array('class'=>'btn btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

                                    
										
									</div>
								</section>
						
								
						
							</div>
                            </center>
						</div>
                        
                         <script>
		function changeType()
    {
	$type=$('#UserLogin_password').attr('type');
     if($type=="text") 
		$('#UserLogin_password').attr('type','password');
	if($type=="password")
		$('#UserLogin_password').attr('type','text');
		
    }
</script>		
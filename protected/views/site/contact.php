 <link rel='stylesheet' id='academica-pro-style-css'  href='<?php echo Yii::app()->baseUrl;?>/css/bootstrap.css' type='text/css' media='all' />
<div id="main">

		<div class="wrapper full-width">
	
			
			
			<div class="widget">
				<h1 class="post-title">Contact Us</h1>
								
				<div class="divider">&nbsp;</div>
				
				<div class="post-content">
					<p><?php echo $msg;?></p>
                    
					<div class="cleaner">&nbsp;</div>
					
					<div class="post-content">
						<div id="contact-form-251">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'regsitration-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array(
	'enctype'=>'multipart/form-data',
	),
)); ?>

<div class="col-md-6 well">

	<div class="form-group">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array("class"=>"form-control",'size'=>60,'maxlength'=>200)); ?>
        <?php echo $form->error($model,'name',array('class'=>'text-danger')); ?>
		
	</div>
	
	<div class="form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array("class"=>"form-control",'size'=>60,'maxlength'=>200)); ?>
        <?php echo $form->error($model,'email',array('class'=>'text-danger')); ?>
		
	</div>


	<div class="form-group">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array("class"=>"form-control",'size'=>60,'maxlength'=>200)); ?>
        <?php echo $form->error($model,'phone',array('class'=>'text-danger')); ?>
		
	</div>



	<div class="form-group">
		<?php echo $form->labelEx($model,'body'); ?>
			<?php echo $form->textArea($model,'body',array("class"=>"form-control",'size'=>60,'maxlength'=>200)); ?>
            <?php echo $form->error($model,'body',array('class'=>'text-danger')); ?>
		
	</div>
   
<div class="form-group">
    <?php echo $form->labelEx($model,'verifyCode'); ?>
    <div>
    <?php $this->widget('CCaptcha'); ?>
    <?php echo $form->textField($model,'verifyCode',array("class"=>"form-control")); ?>
    </div>
    <?php echo $form->error($model,'verifyCode',array('class'=>'text-danger')); ?>
</div>
    
	<div class="clearfix"></div>
	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Send',array('class'=>'btn btn-primary')); ?>
	</div>
    
    </div>
	
	<div class="col-md-6 well">
   <center> <h1>SUGAM Computer Education</h1></center>
<div style="float: left; margin: 0 25px 0 0;">
<div class="shortcode-unorderedlist bullet"><p></p>
<ul>
<li>Address: Shastri Nagar, Sitapur, Uttar Pradesh – 261001</li>
<li>Contact Number: 8182806465 </li>
<li>E-mail: info@sugam.org.in</li>
<li>Webiste : sugam.org.in</li>

</ul>
<p></p></div>

</div>
</div>

<?php $this->endWidget(); ?>
</div>

						<div class="cleaner">&nbsp;</div>

						
					</div>
					
										
				</div><!-- end .post-content -->
	
				
								<div class="divider">&nbsp;</div>
				
				<div id="comments">
					<div id="comments">



		<!--<p class="title">Comments are closed.</p>-->
	

 
</div><!-- end #comments -->  
				</div><!-- end #comments -->
	
								
				<div class="cleaner">&nbsp;</div>
			</div><!-- end .widget -->

			<div class="cleaner">&nbsp;</div>
			
						
		</div><!-- end .wrapper -->

	</div>
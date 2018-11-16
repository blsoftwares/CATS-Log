 <link rel='stylesheet' href='<?php echo Yii::app()->baseUrl;?>/css/bootstrap.css' type='text/css' media='all' />

	<script type='text/javascript' src='<?php echo Yii::app()->baseUrl;?>/js/jquery.vticker.min.js'></script>

    	<div class="column column-narrow column-narrow-child column-last">

					
                    
                    <div class="widget-grey widget"><p class="title">Latest Updates</p>		
                    <div id="example">
                    <ul class="posts-archive archives-columns-one posts-archive-testimonials">
						<li class="loop-post-single loop-post-border loop-post-testimonial">
					<figure>
						<div class="post-excerpt">
			
							<blockquote class="testimonial-widget"><p>While your customers will have probably forgotten that your competitors even exist. Which brings us, by a somewhat circuitous route, to another small point, but one which we feel should be raised.</p>
</blockquote>
										
						</div><!-- end .post-excerpt -->
					</figure>
					<div class="cleaner">&nbsp;</div>
				</li>
                <li class="loop-post-single loop-post-border loop-post-testimonial">
					<figure>
						<div class="post-excerpt">
			
							<blockquote class="testimonial-widget"><p>While your customers will have probably forgotten that your competitors even exist. Which brings us, by a somewhat circuitous route, to another small point, but one which we feel should be raised.</p>
</blockquote>
							
			
						</div><!-- end .post-excerpt -->
					</figure>
					<div class="cleaner">&nbsp;</div>
				</li>
                <!-- .loop-post-single -->
						</ul><!-- -->
                        </div>
					
		<div class="cleaner">&nbsp;</div>
        
        </div>
        <div class="widget zoom-twitter-widget well" id="zoom_twitter_widget-2"><p class="h4">Need Help?</p>
	
        <div class="cleaner">&nbsp;</div>	
        <p><?php echo $msg;?></p>
        <!--contact-->
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

<div class="">

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
		<?php echo $form->labelEx($model,'phone',array('class'=>'text-danger')); ?>
		<?php echo $form->textField($model,'phone',array("class"=>"form-control",'size'=>60,'maxlength'=>200)); ?>
        <?php echo $form->error($model,'phone'); ?>
		
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

<?php $this->endWidget(); ?>
</div>
        
				
		<div class="cleaner">&nbsp;</div>
        </div>
        					
                            <div class="cleaner">&nbsp;</div>

				</div>
                
                <script>
                jQuery(function() {
      jQuery('#example').vTicker('init', {speed: 4000, 
    pause: 1000,
    showItems: 1,
	animate: true,
    padding:4});

});
                </script>
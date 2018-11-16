<script src="<?php echo Yii::app()->baseUrl;?>/js/highcharts.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/data.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/exporting.js"></script>
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
					
						
					</header>
                    
                    <div class="row">
                                
             <!-- Pillar Rtaing Chart -->
						<div class="col-lg-12 col-md-12">
							<section class="panel">
                            <header class="panel-heading">
																
										<center><h2 class="panel-title">Budget Allocation</h2></center>
									</header>
								
								<div class="panel-body">
									<?php
/* @var $this SiteBudgetController */
/* @var $model SiteBudget */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'site-budget-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'site_id'); ?>
		<?php echo $form->textField($model,'site_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'site_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'financial_year'); ?>
		<?php echo $form->textField($model,'financial_year',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'financial_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'budget'); ?>
		<?php echo $form->textField($model,'budget'); ?>
		<?php echo $form->error($model,'budget'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'budget_date'); ?>
		<?php echo $form->textField($model,'budget_date',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'budget_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
								</div>
							
								
								
							</section>
						</div>
                        
                        
                        
                        
                    
					</div>   
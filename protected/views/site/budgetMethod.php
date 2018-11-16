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
																
										
                                        <center><h2 class="panel-title">Site Budget Allotment Method</h2></center>
                                        
									</header>
								
								<div class="panel-body">
									<?php
/* @var $this SiteBudgetController */
/* @var $model SiteBudget */
/* @var $form CActiveForm */
?>

<div class="col-md-6">

<?php if($model->isNewRecord){?>

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

	
	<div class="form-group">
		<label for="SiteBudget_financial_year" class="required">Select Budget Allotment Method <span class="required">*</span></label>
        
        <div class="radio-custom">
																<input type="radio" id="radioExample1" name="budget_method" value="stepwise" <?php if($model->budget_method=="stepwise" || $model->budget_method=="") echo 'checked="checked"'; ?> >
																<label for="radioExample1">Pillar->Element->Standard Wise Allotment</label>
                                                               
															</div>
                                                             <div class="radio-custom">
																<input type="radio" id="radioExample1" name="budget_method" value="standardwise" <?php if($model->budget_method=="standardwise") echo 'checked="checked"'; ?>>
																<label for="radioExample1">Standard Wise Allotment</label>
                                                               
															</div>
		
	</div>
    
    
	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save',array('class'=>'btn btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

<?php } else{?>

<p><b>Your preferred budget allotment method</b></p>

<p><?php if($model->budget_method=="standardwise") echo 'Standard Wise Budget Allotment'; ?></p>

<p><?php if($model->budget_method=="stepwise") echo 'Step Wise Budget Allotment'; ?></p>

<?php } ?>

</div><!-- form -->
								</div>
							
								
								
							</section>
						</div>
                        
                      
                    
					</div>   
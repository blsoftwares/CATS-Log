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
																
										<center><h2 class="panel-title"> F Y : <?php echo $nextYear."-".($nextYear+1)?></h2></center>
                                        <center><h2 class="panel-title">Site Budget Allocation</h2></center>
                                        <center><h2 class="panel-title">Total Budget Allocated : <?php echo $budget;?></h2></center>
									</header>
								
								<div class="panel-body">
									<?php
/* @var $this SiteBudgetController */
/* @var $model SiteBudget */
/* @var $form CActiveForm */
?>

<div class="col-md-6">

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
		<?php echo $form->labelEx($model,'budget'); ?>
		<?php echo $form->textField($model,'budget',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'budget'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'budget_date'); ?>
		<?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'attribute'=>'budget_date',
	'model'=>$model,
	
    // additional javascript options for the date picker plugin
    'options'=>array(
        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
		'dateFormat'=>'dd-mm-yy',
    ),
    'htmlOptions'=>array(
        'class'=>'form-control',
    ),
));
?>
		<?php echo $form->error($model,'budget_date'); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save',array('btn btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
								</div>
							
								
								
							</section>
						</div>
                        
                      
                    
					</div>   
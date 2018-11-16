<section role="main" class="content-body">
					<header class="page-header">
						<h2>Reviewer Profile Management</h2>
					 	
					</header>
<div class="row">
							<div class="col-lg-4">
								                               
                                <section class="panel">
									<header class="panel-heading">
										
						
										<h2 class="panel-title"><?php echo ($model->isNewRecord)?'Create':'Update';?> Reviewer's Profile</h2>
									</header>
                                    <div class="panel-body">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'regsitration-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<p><?php echo $msg;?></p>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	
<div class="form-group">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>200,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
    
   
     <div class="form-group">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
    
     <div class="form-group">
		<?php echo $form->labelEx($model,'postion_affiliation'); ?>
		<?php echo $form->textField($model,'postion_affiliation',array('size'=>60,'maxlength'=>200,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'postion_affiliation'); ?>
	</div>
    

	<div class="form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>200,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	
	<div class="form-group">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array('empty'=>'--Select Status--','1'=>'Activated','0'=>'De-Activated'),array('maxlength'=>10,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
    
    <div class="form-group">
		<?php echo $form->labelEx($model,'approve'); ?>
		<?php echo $form->dropDownList($model,'approve',array('empty'=>'--Select Approval--','1'=>'Approved','0'=>'Not Approved'),array('maxlength'=>10,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'approve'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update'); ?>
	</div>

<?php $this->endWidget(); ?>


</section>
						
								
						
							</div>
                            
                            <div class="col-lg-8">
								                               
                                <section class="panel">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">Profile List</h2>
									</header>
                                    <div class="panel-body">

<?php 

$dataProvider = new CActiveDataProvider('UserLogin', array(
   'criteria'=>array(
          'condition'=> 'type= 4 and  country="'.$user['country'].'"',
       )
));



$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'regsitration-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'username',
		'email',
		'password',
		'country',
		
		array(

		'name'=>'Status',

		'value'=>'($data->status==1)?"Activated ":"De-Activated"',

		),
		
		array(

		'name'=>'Status',

		'value'=>'($data->approve==1)?"Approved ":"Not-Aapproved"',

		),
		
		
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}',
			'buttons' => array(
               'update' => array( //the name {reply} must be same
                 'label' => 'update', // text label of the button
                   'url' => 'CHtml::normalizeUrl(array("national/reviewerProfile/id/".rawurlencode($data->id)))', //Your URL According to your wish
                     
                   ),
               ),
		),
	),
)); ?>

</section>
						
								
						
							</div>

</div><!-- form -->
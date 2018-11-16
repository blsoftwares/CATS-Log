<section role="main" class="content-body">
					<header class="page-header">
						<h2>International Committee Profile Management</h2>
					 	
					</header>
<div class="row">
							<div class="col-lg-4">
								                               
                                <section class="panel">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">Create New Profile</h2>
                                        <h6>Maximum 14 members will be allowed</h6>
									</header>
                                    <div class="panel-body">
                                    
                                    <?php if($check<=14){ ?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'regsitration-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<p class="note"><?php echo $msg;?></p>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	
<div class="form-group">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>200,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'username',array('class'=>'alert-danger')); ?>
	</div>
    
    <div class="form-group">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'name',array('class'=>'alert-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'email',array('class'=>'alert-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>200,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'password',array('class'=>'alert-danger')); ?>
	</div>

	
	<div class="form-group">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array('1'=>'Active','0'=>'In-Active'),array('maxlength'=>10,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'status',array('class'=>'alert-danger')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary')); ?>
        
       
	</div>

<?php $this->endWidget(); ?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'regsitration-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<div class="row buttons">
<?php echo CHtml::button('Clear', array('submit' => array('catsadmin/ncProfile'),'class'=>'btn btn-secondary')); ?>
</div>

<?php $this->endWidget(); ?>


<?php }else{?>
You created maximum number of user for this profile
<?php } ?>



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
          'condition'=> 'type= 2',
       )
));



$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'regsitration-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'username',
		'email',
		'password',
		'mobile',
		'country',
		array(
		'name'=>'Status',
		'value'=>'($data->status==1)?"Approved":"Rejected"',
		),
		array(
		'name'=>'Active',
		'value'=>'($data->approve==1)?"Yes":"No"',
		),
		
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}',
			'buttons' => array(
               'update' => array( //the name {reply} must be same
                 'label' => 'update', // text label of the button
                   'url' => 'CHtml::normalizeUrl(array("catsadmin/incProfile/id/".rawurlencode($data->id)))', //Your URL According to your wish
                     
                   ),
               ),
		),
	),
)); ?>

</section>
						
								
						
							</div>

</div><!-- form -->
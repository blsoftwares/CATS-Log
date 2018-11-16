				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Upload Related Dcouments</h2>
					
						
					</header>
<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										
						<p><?php echo $msg;?></p>
										<h2 class="panel-title">Upload Supporting Documents for your Site Profile</h2>
                                        <h6 class="control-label">You may upload as many files one by one</h6>
									</header>
									<div class="panel-body">
         <div class="col-md-8 well">                           
                            <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'site-documents-form',
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

	<div class="form-group">
		<?php echo $form->labelEx($model,'name',array("class"=>"control-label")); ?>
		<?php echo $form->textField($model,'name',array("class"=>"form-control" ,'size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'filename',array("class"=>"control-label")); ?>
		<?php echo $form->fileField($model,'filename',array("class"=>"form-control" ,'size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'filename'); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Upload' : 'Save',array('class'=>'btn btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
<div class="col-md-4 well">
<p>
Document Lists
</p>
<table class="table">
<?php foreach($docs as $dlist){ ?>
<tr>
<td><?php echo $dlist['name'];?></td>
<td><a href="<?php echo $dlist['filename'];?>">File</a></td>
<td>X</td>
</tr>
<?php }?>
</table>
</div>
<div class="clearfix"></div>
<center>

<p>After uploading sufficient files , you may proceed to site filed assement process!</p>


<form action="" method="POST">
<input type="hidden" name="doassement" value="">
<input type="submit" value="Submit for Site Assesment" class="btn btn-danger">
</form>
</center>
                                    
										
									</div>
								</section>
						
								
						
							</div>
						</div>
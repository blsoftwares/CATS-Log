<section role="main" class="content-body">
<marquee><?php echo SiteRegister::model()->getSiteStatus($model['cats_status'],$model['site_id']); ?></marquee>

					<header class="page-header">
						<h2>CA|TS Log Site Assesment</h2>
						
					</header>
<cente><h2 class="mt-none text-primary">CA|TS Log Site Assesment Summary </h2></center>
 <hr>
<?php 
$st=CatsElement::model()->findAll();
foreach($st as $elist){ 
$eRating=SiteElementHistory::model()->findByAttributes(array('site_id'=>$model['site_id'], 'criteria_id'=>$elist['element_id']));


?>
<center><h4 class="mt-none"><b><?php echo $elist['element_id'];?>: <?php echo $elist['element_name'];?></b> (Rating : <?php echo (int)$eRating['rating'];?> <i class="fa fa-star"></i>)</h4></center>
<?php 
	$ste=CatsStandard::model()->findAllByAttributes(array('element_id'=>$elist['element_id']));

foreach($ste as $stlist){
	$stand=$stlist['standard_id'];
	$sRating=SiteStandardHistory::model()->findByAttributes(array('site_id'=>$model['site_id'], 'criteria_id'=>$stlist['standard_id']));
	?>
<center><h4 class="mt-none"><?php echo CatsPillar::model()->truncate($stlist['standard_name']);?> &nbsp;(Rating : <?php echo (int)$sRating['rating'];?> <i class="fa fa-star"></i>)</h4></center>
<div class="row">

<?php 
$cats=CatsCriteria::model()->findAllByAttributes(array('standard_id'=>$stlist['standard_id']));
foreach($cats as $clist){
			$cat=$clist['criteria_id'];
			$assesmentData=SiteCriteriaHistory::model()->findByAttributes(array('criteria_id'=> $clist['criteria_id'],'site_id'=>$model['site_id']));
			$assesmentVersion=SiteCriteriaVersion::model()->findByAttributes(array('criteria_id'=> $clist['criteria_id'],'site_id'=>$model['site_id'],'usertype'=>5));
			
			$color=CatsCriteria::model()->getCriteriaStatusPanel($clist['criteria_id'],$model['site_id'],'');
			
			//$assesment=(empty($assesmentData) || empty($assesmentVersion) )?'panel-danger':'panel-success';
			$rating=(int)$assesmentData['rating'];
			
			$action=($model['cats_status']==0)?'View/Edit':'View';

	?>
<div class="col-md-6 ui-sortable" data-plugin-portlet="" id="portlet-1" >
							
							
							<section class="panel <?php echo $color;?>" id="panel-3" data-portlet-item="">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="<?php echo Yii::app()->createUrl('site/faf',array('criteria'=>$cat,'standard'=>$stand,'element'=>$elist['element_id']));?>" target="_blank"><?php echo $action;?></a>
										
									</div>

									<h2 class="panel-title"><i class="fa fa-dot-circle-o"></i> <?php echo CatsPillar::model()->truncate($clist['criteria_name']); ?> &nbsp;&nbsp;(Rating : <?php echo ($rating>-1)?$rating.'<i class="fa fa-star"></i>':'Not Given' ;?> ) </h2>
								</header>
                                                         
                                
							</section>
                            
						</div>
                        
                        <?php }?>
                       
							                           
                            
						</div>
                     
                        <?php } ?>
                           <hr>
                        <?php } ?>
						<section class="panel">
									<header class="panel-heading">
																
										<h2 class="panel-title">Submit your site for review</h2>
                                        <p>Once you submit your site for review; you are not able to do any further self assesment </p>
									</header>
									<div class="panel-body">
                                    <?php $checkSite=SiteElementHistory::model()->checkSite($model,5);
									
									if($checkSite){ ?>
                        <?php if($model->cats_status==0){?>            
                                    
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
	<?php echo $form->errorSummary($model); ?>

									<div class="form-group">
												<div class="col-md-9">
		<?php echo $form->hiddenField($model,'cats_status',array('value'=>1,'size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->hiddenField($model,'cats_level',array('value'=>$level,'size'=>60,'maxlength'=>100)); ?>

												</div>
											</div>
						
						<div class="form-group">
                        		<?php echo CHtml::Button($assdoc->isNewRecord ? 'Submit Profile' : 'Submit Profile',array('class'=>'mb-xs mt-xs mr-xs btn btn-primary','data-toggle'=>"modal" ,'data-target'=>"#myModal")); ?>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Are you confirm to submit the site for review?</h4>
      </div>
      <div class="modal-body">
        <p>Please enter estimated review date for reviewer by before data unchanged</p>
        <div class="form-group">
         <div class="col-md-4">
         <?php
		 $this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'model'=>$model,
	'name'=>'endadate',
	
    // additional javascript options for the date picker plugin
    'options'=>array(
	'minDate'=>+5,
        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
		'dateFormat'=>'d-mm-yy',
    ),
    'htmlOptions'=>array(
        'style'=>'background-color:green;color:white;',
		'class'=>'form-control',
		'required'=>true,
		'readonly'=>true,
    ),
));
		 ?>
       
        </div>
        </div>
      </div>
      <div class="modal-footer">
          <?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save',array('class'=>"mb-xs mt-xs mr-xs btn btn-primary",'onclick'=>"this.disabled=true;this.value='Updating profile. Please wait....';this.form.submit();" )); ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- End Modal-->
	
                        </div>
											
<?php $this->endWidget(); ?>

<?php }else{?>

 <?php
 
  if(date('d-m-Y',strtotime($pdates['actiondate']))>date('d-m-Y')){?>
							<center>											
						
                      
                        	<div class="form-group col-md-6">
                              
                                  <form method="post" action="<?php echo Yii::app()->createUrl('site/ebook');?>">
                                  <input type="hidden" name="site_code" value="<?php echo Yii::app()->user->userid;?>" />
                                  <input type="submit" value="Download E-Book" />
                                  </form>
                        </div>
                        
						<div class="form-group col-md-6">
                                <form method="post" action="<?php echo Yii::app()->createUrl('site/backup');?>">
                                  <input type="hidden" name="backup" value="download" />
                                  <input type="submit" value="Download Backup" />
                                  </form>
                             </div>

                    </center>
                    
                    <?php } ?>

<?php } ?>


<?php 
}
else
if(!$checkSite && $model->cats_level!="0.0.0"){
?>
<center><p style="color:#900;">Site in Transit Phase. Site Needs More Improvement</p></center>
<?php }else{?>
<center><p style="color:#F00;">Please complete all your assesment for final submition of your site for CA|TS Log review</p></center>
<?php } ?>
									</div>
								</section>
<section role="main" class="content-body">
					<header class="page-header">
						<h2><?php echo $site['name_cpa'];?></h2>
					 <?php echo SiteRegister::model()->siteAuditorStage($site['site_id']);?>
						
					</header>
<div class="row">
							<div class="col-lg-8">
								                               
                                <section class="panel">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">Review self assesment and comment</h2>
									</header>
                                     <?php if($site['cats_status']==2){?>
									<div class="panel-body">
										<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'site-criteria-history-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Site Self Assesment</label>
												<div class="col-md-9">
<?php echo $form->textArea($siteData,'assesment',array("class"=>"form-control",'rows'=>3, 'cols'=>50)); ?>

												</div>
                                                <?php echo $form->error($siteData,'assesment',array('class'=>'text-danger')); ?>
											</div>
												<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Assesment Source</label>
												<div class="col-md-9">
<?php echo $form->textArea($siteData,'source_base',array("class"=>"form-control",'rows'=>3, 'cols'=>50)); ?>

												</div>
                                                <?php echo $form->error($siteData,'source_base',array('class'=>'text-danger')); ?>
											</div>										
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Reviewer Comment</label>
												<div class="col-md-9">
<?php echo $form->textArea($siteData,'ad_comment',array("class"=>"form-control",'rows'=>3, 'cols'=>50)); ?>

												</div>
                                                <?php echo $form->error($siteData,'ad_comment',array('class'=>'text-danger')); ?>
											</div>
                                            
                                             <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Your Comment</label>
												<div class="col-md-9">
<?php echo $form->textArea($siteData,'nc_comment',array("class"=>"form-control",'rows'=>3, 'cols'=>50)); ?>

												</div>
                                                <?php echo $form->error($siteData,'nc_comment',array('class'=>'text-danger')); ?>
											</div>
                                            
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Your Rating</label>
												<div class="col-md-9">
	<?php
$this->widget('CStarRating',array(
			'model'=>$siteData,
           'attribute'=>'rating',
            'value'=>$siteData->rating,
			'minRating'=>1,
            'maxRating'=>5,
            'starCount'=>5,
			'titles'=>array(
                '1'=>'Not Recognised: Absen',
                '2'=>'Recognised: No action Initiated',
                '3'=>'Recognised - Action in Planning Process',
                '4'=>'Recognised - Action Initiated',
                '5'=>'Recognised - Action Implemented'
            ),

            ));
?>
(Score : <?php echo $siteData->points;?>)
												</div>
                                                <?php echo $form->error($siteData,'rating',array('class'=>'text-danger')); ?>
											</div>
                                            
						
						<div class="form-group">
 <?php echo CHtml::submitButton($siteData->isNewRecord ? 'Update Rating' : 'Update Rating',array('class'=>'btn btn-primary')); ?>                        </div>
											
<?php $this->endWidget(); ?>
									</div>
                                    <?php } ?>
                                   
                                    <?php if($site['cats_status']==3){?>
                                    <p style="color:#030;">Site Approval in process to International COmmittee </p>
                                    <?php }?>
                                    <?php if($site['cats_status']==4){?>
                                    <p style="color:#030;">Site is CA|TS Log certified by International Committee </p>
                                    <?php }?>
								</section>
						
								
						
							</div>
                            
                            <div class="col-lg-4">
								<section class="panel">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">Standard & Criteria's</h2>
									</header>
									<div class="panel-body">
										<form class="form-horizontal form-bordered" method="get">
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Satndard</label>
												<div class="col-md-9">
                                                <p><?php echo $standardData['standard_name'];?></p>
                                     <p><?php echo $standardData['standard_desc'];?></p>
                                    <p></p>	</div>
											</div>
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Criteria</label>
												<div class="col-md-9">
                                           
                                    <p><?php echo $criteriaData['criteria_name'];?></p>
                                     <p><?php echo $criteriaData['criteria_desc'];?></p>
                                                </p>
												</div>
											</div>
                                            
                                            <div class="form-group">
                                            <header class="panel-heading">
                                            <h2 class="panel-title">Assesment Rating / Score</h2>
                                            </header>
												<div class="col-md-3" for="inputDefault"><b>Ratings</b></div>
												<div class="col-md-9">
                                                <p><b>Score </b>                                            </p>
												</div>
                                                
                                                <label class="col-md-3" for="inputDefault">5 <i class="fa fa-star"></i></label>
												<div class="col-md-9">
                                                <p> 1= Recognised - Action Implemented                                             </p>
												</div>
                                                <label class="col-md-3" for="inputDefault">4 <i class="fa fa-star"></i></label>
												<div class="col-md-9">
                                                <p> 0.75 = Recognised - Action Initiated
                                                </p>
												</div>
                                                <label class="col-md-3" for="inputDefault">3 <i class="fa fa-star"></i></label>
												<div class="col-md-9">
                                                <p> 
0.5 = Recognised - Action in Planning Process 

                                                </p>
												</div>
                                                <label class="col-md-3 " for="inputDefault">2 <i class="fa fa-star"></i></label>
												<div class="col-md-9">
                                                <p>
0.25= Recognised: No action Initiated 
                                                </p>
												</div>
                                                <label class="col-md-3 " for="inputDefault">1 <i class="fa fa-star"></i></label>
												<div class="col-md-9">
                                                <p>
0= Not Recognised: Absen
                                                </p>
												</div>
                                                <label class="col-md-3 " for="inputDefault">0 <i class="fa fa-star-o"></i></label>
												<div class="col-md-9">
                                                <p>
No Rating Given
                                                </p>
												</div>
											</div>
                                            
                                            
											
										</form>
									</div>
								</section>
                                
						
							</div>
                            
						</div>
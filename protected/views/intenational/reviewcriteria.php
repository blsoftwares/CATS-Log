<style>
.switch {
  position: relative;
  display: inline-block;
  width: 130px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ca2222;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2ab934;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(95px);
  -ms-transform: translateX(95px);
  transform: translateX(95px);
}

/*------ ADDED CSS ---------*/
.on
{
  display: none;
}

.on, .off
{
  color: white;
  position: absolute;
  transform: translate(-50%,-50%);
  top: 50%;
  left: 50%;
  font-size: 10px;
  font-family: Verdana, sans-serif;
}

input:checked+ .slider .on
{display: block;}

input:checked + .slider .off
{display: none;}

/*--------- END --------*/

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;}
</style>
<section role="main" class="content-body">
					<header class="page-header">
						<h2><?php echo $site['name_cpa'];?></h2>
                        <?php echo $site['cats_level'];?>
					</header>
<div class="row">

<div class="">
								<section class="panel col-lg-6">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">CA|TS Log Standard Guidelines</h2>
									</header>
									<div class="panel-body" style="height:100px;overflow:auto;">
                                	
                                    <p><?php echo $standardData['standard_name'];?></p>
                                     <p><?php echo $standardData['standard_desc'];?></p>
                                   										
									</div>
								</section>
                                
                                <section class="panel col-lg-6">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">CA|TS Log Criteria Guidelines</h2>
									</header>
									<div class="panel-body" style="height:100px;overflow:auto;">
                                	
                                   
                                    <p><?php echo $criteriaData['criteria_name'];?></p>
                                     <p><?php echo $criteriaData['criteria_desc'];?></p>

										
									</div>
								</section>

							</div>

                            
						</div>
                        
                        
                        <div class="row">
                        
                         <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'site-criteria-history-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array(
       'enctype'=>'multipart/form-data'
    ),
)); ?>
                        
                        <div id="formtext" class="col-md-8">
                        
                        <header class="panel-heading">
										
						
										<h2 class="panel-title">Site Self Assessment	
                                        <?php $status= ($siteData->status==0)?'':'checked="checked"'; ?>
                                        	<label class="switch" style="float:right;"><input type="checkbox" <?php echo $status;?>  id="togBtn"  disabled="disabled">
                                            <div class="slider round">
                                            <!--ADDED HTML --><span class="on">Applicable</span><span class="off">Not Applicable</span><!--END--></div></label>
                                            <script>
											
											$(document).ready(function(){
											
											$("#fileupload .fileupload").attr('disabled',true);
											$("#SiteCriteriaHistory_assesment").attr('readonly',true);
											$("#SiteCriteriaHistory_source_base").attr('readonly',true);
											})
											
                                           
											</script>
                                        </h2>									
                                        <?php echo $msg;?>
									
                                    
                                    </header>
                                    <div class="panel-body">                                    
                                   
<?php 

//echo $form->errorSummary($model); ?>
											<div class="form-group col-md-6">
												<label class="control-label" for="inputDefault">Evidence Details *</label>
                                                <input type="hidden" value="Appilcable" name="requiredRating" id="requiredRating">
												<div class="">
         
<?php echo $form->textArea($siteData,'assesment',array("class"=>"form-control",'rows'=>6, 'cols'=>50)); ?>

                     
		<?php echo $form->error($siteData,'assesment',array('class'=>'text-danger')); ?>
												</div>
											</div>
                                            
                                            <div class="form-group col-md-6">
												<label class="control-label" for="inputDefault">Evidence Source / References / URL(s) *</label>
												<div class="">
          
<?php echo $form->textArea($siteData,'source_base',array("class"=>"form-control",'rows'=>6, 'cols'=>50)); ?>

                                                
                                                
		<?php echo $form->error($siteData,'source_base',array('class'=>'text-danger')); ?>
												</div>
											</div>
                                 <div class="form-group">								 
                                 <button type="button" style="float:right;" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Assessment History</button>								 								 
                                 <!-- Modal --><div id="myModal" class="modal fade" role="dialog">  
                                 <div class="modal-dialog">    <!-- Modal content-->    
                                 <div class="modal-content">    
                                   <div class="modal-header">       
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>       
                                   <h4 class="modal-title">Assessment History</h4>      
                                   </div>     
                                    <div class="modal-body" id="assesmentHistory" style="height:300px;overflow:auto;">        <p><?php echo $this->renderPartial('/site/assesmentHistory',array('site_id'=>$site->site_id,'criteria_id'=>$criteriaData['criteria_id']))?></p>     
                                     </div>      
                                     <div class="modal-footer">        
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>      
                                     </div>   
                                      </div>  
                                      </div>
                                      </div>								 								
                                       </div> 
                                       
                                           
                                            
                                     <div class="form-group">
												<label class=" control-label" for="inputDefault">Reviewer Comment</label>
												<div class="">
<?php echo $form->textArea($siteData,'ad_comment',array("class"=>"form-control",'rows'=>3, 'cols'=>50)); ?>

												</div>
                                                <?php echo $form->error($siteData,'ad_comment',array('class'=>'text-danger')); ?>
									</div>
                                    
                                    
                                               
                                     <div class="form-group">
												<label class=" control-label" for="inputDefault">National Committee Comment</label>
												<div class="">
<?php echo $form->textArea($siteData,'nc_comment',array("class"=>"form-control",'rows'=>3, 'cols'=>50)); ?>

												</div>
                                                <?php echo $form->error($siteData,'nc_comment',array('class'=>'text-danger')); ?>
									</div>
                                    
                                     <div class="form-group">
												<label class=" control-label" for="inputDefault">Your Comment</label>
												<div class="">
<?php echo $form->textArea($siteData,'ic_comment',array("class"=>"form-control",'rows'=>3, 'cols'=>50)); ?>

												</div>
                                                <?php echo $form->error($siteData,'ic_comment',array('class'=>'text-danger')); ?>
									</div>
                                            
                                            
                                            <div class="form-group col-md-12">
												<header class="">
                                            <h2 class="panel-title">Rating / Score
                                            <div id="ratingRemark" style="float:right;display:none;">
                                            <p style="color:#F00;">Not Appilcable</p>
                                            
                                            </div>
                                            
                                            </h2>
                                            <br />
                                            </header>
                                            
												<div id="rating" class="">
	<?php
$this->widget('CStarRating',array(
			'model'=>$siteData,
           'attribute'=>'rating',
            'value'=>$siteData->rating,
			'minRating'=>1,
            'maxRating'=>5,
            'starCount'=>5,
			'readOnly'=>true,
			'titles'=>array(
                
				'1'=>'Not Recognised: Absent',
                '2'=>'Recognised: No action Initiated',
                '3'=>'Recognised - Action in Planning Process',
                '4'=>'Recognised - Action Initiated / Being Implemented',
                '5'=>'Recognised - Action Implemented / Progress Regularly Monitored'
            ),

            ));
?> <br />(Score  :<?php echo ($siteData->rating>0)?(float)$siteData->points:'N.A.';?>)

											</div>
                                            
                                            <?php echo $form->error($siteData,'rating',array('class'=>'text-danger')); ?>
                                            
                                            </div>
                                            
                                          
                        
                        <div class="form-group col-md-12">
                        <hr />
                                            <header class="">
                                            <h2 class="panel-title">Assesment Rating / Score</h2>
                                            </header>
												<br />
                                                <div class="col-md-6">
                                                <div class="col-md-3" for="inputDefault"><b>Ratings</b></div>
												<div class="col-md-9">
                                                <p><b>Score </b>                                           
                                                </p>
												</div>
                                                
                                                <label class="col-md-3" for="inputDefault">5 <i class="fa fa-star"></i></label>
												<div class="col-md-9">
                                                <p> 1= Recognised - Action Implemented / Progress Regularly Monitored                                             </p>
												</div>
                                                <label class="col-md-3" for="inputDefault">4 <i class="fa fa-star"></i></label>
												<div class="col-md-9">
                                                <p> 0.75 = Recognised - Action Initiated / Being Implemented
                                                </p>
												</div>
                                                <label class="col-md-3" for="inputDefault">3 <i class="fa fa-star"></i></label>
												<div class="col-md-9">
                                                <p> 
0.5 = Recognised - Action in Planning Process 

                                                </p>
												</div>
                                               
                                                </div>
                                                
                                                         <div class="col-md-6">
                                                <div class="col-md-3" for="inputDefault"><b>Ratings</b></div>
												<div class="col-md-9">
                                                <p><b>Score </b>                                           
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
0= Not Recognised: Absent
                                                </p>
												</div>
                                                <label class="col-md-3 " for="inputDefault">0 <i class="fa fa-star-o"></i></label>
												<div class="col-md-9">
                                                <p>
No Rating Given / Not Applicable
                                                </p>
												</div>
                                                </div>
                                                
                                                
											</div>
                                            
                                             <div class="form-group col-md-12">
                                          <?php echo CHtml::submitButton($siteData->isNewRecord ? 'Save' : 'Save',array('class'=>"mb-xs mt-xs mr-xs btn btn-primary",'onclick'=>"this.disabled=true;this.value='Saving data. Please wait....';this.form.submit();")); ?>

                        </div>
											
										
									</div>
                                    
          
                                    
                                    </div><!-- form-->
                                    <div id="fileupload" class="col-md-4">
                                     <header class="panel-heading">
										
										<h2 class="panel-title">Attach Documents</h2>
                                         <br />
                                        <?php echo round(5-$sizelimit,2) ;?>MB out of 5MB file(s) can be uploaded
                                        
									</header>
									<div class="panel-body">
                                    <?php 
								
									
									for($i=1;$i<=10;$i++){
										?>
                                     <div class="form-group">
																								
												  <?php if($files['file'.$i]!="") {?>	
                                                  <a target="_blank" href="<?php echo Yii::app()->baseUrl.'/sitedata/'.$site['site_id'].'/'.$criteriaData['criteria_id'].'/'.$files['file'.$i];?>" download><i class="fa fa-file"></i> <?php echo $files['filename'.$i];?> </a>
                                                  	
                                           <?php } else{?>
                                           
                                           <input type="text" name="filename<?php echo $i;?>" id="filename<?php echo $i;?>" class="fileupload form-control" placeholder="Enetr File Name <?php echo $i;?>" />
												<div class="col-md-4">
		
    <input type="file" name="file<?php echo $i;?>" class="fileupload"  id="file<?php echo $i;?>">

												</div>
                                           
                                           <?php }?>
                                            
                                                
											</div>
                                         
                                            
                                         <?php } ?>  
                                         </div>
                                    </div>
                                    
                                    <?php $this->endWidget(); ?>
                        
                        </div>
                     
                        
                        </section>
                        
                         <script>
											var size=0;
											var maxsize=<?php echo round(5-$sizelimit,2) ;?>;
											
                                              $('input:file').change(
    function(e) {
        var files = e.originalEvent.target.files;
		
        for (var i=0, len=files.length; i<len; i++){
            var n = files[i].name,
                s = files[i].size/1048576,
                t = files[i].type;
				size+=s;
 }
 
            if (size > maxsize) {
				$("#"+this.id).val('');
				size-=s;
               alert('Please deselect this file: "' + n + '," it\'s larger than the maximum filesize allowed. Sorry!');
            }else
			{
				
				$(this).wrap('<div id="file_input_container_'+this.id+'"></div>');
				$(this).after('<input type="button" value="Clear" onclick="reset_html(\'file_input_container_'+this.id+'\')" />');
			}
       
    })
	
	function reset_html(id) {
    $('#'+id).html($('#'+id).html());
	}
											</script>
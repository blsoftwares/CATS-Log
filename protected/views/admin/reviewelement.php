<section role="main" class="content-body">
					<header class="page-header">
						<h2><?php	 echo $model['name_cpa'];?></h2>				
					</header>
<div class="row">
						
						<div class="col-lg-8 col-md-12">
							<section class="panel">
								<header class="panel-heading panel-heading-transparent">
									
									<h2 class="panel-title">Element <?php echo $elementData['element_name'];?></h2>
								</header>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped mb-none">
											<thead>
												<tr>
													<th>#</th>
													<th>
                                                    Standard/Criteria</th>
													<th>Rating</th>
													
												</tr>
											</thead>
											<tbody>
                                            <?php 
                                            $stand=CatsStandard::model()->findAllByAttributes(array('element_id'=>$elementData['element_id']));
											$j=1;
                                                foreach($stand as $stlist){
													$standardRating=SiteStandardHistory::model()->findByAttributes(array('site_id'=>$model['site_id'],'criteria_id'=>$stlist['standard_id']));
													$sRating=floor($standardRating['rating']);
													?>
												<tr class="info">
													<td><?php echo $j;?></td>
													<td><?php echo CatsPillar::model()->truncate($stlist['standard_name']);?></td>
													<td><?php
$this->widget('CStarRating',array(
            'name'=>$stlist['standard_id'],
            'value'=>$sRating,
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

            'readOnly'=>true,
            ));
?>
</td>
													
												</tr>
                                                
                                                 <?php 
                                            $cats=CatsCriteria::model()->findAllByAttributes(array('standard_id'=>$stlist['standard_id']));$k=1;
                                                foreach($cats as $clist){
													
													$cratingData=SiteCriteriaHistory::model()->findByAttributes(array('site_id'=>$model['site_id'],'criteria_id'=>$clist['criteria_id']));
													
									$crating=floor($cratingData['rating']);
													?>
												<tr>
													<td><?php echo $k;?></td>
													<td><?php echo CatsPillar::model()->truncate($clist['criteria_name']);?></td>
													<td><?php
$this->widget('CStarRating',array(
            'name'=>$clist['criteria_id'],
            'value'=>$crating,
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

            'readOnly'=>true,
            ));
?>
</td>
													
												</tr>
                                                <?php $k++;} ?>
											
                                                
                                                
                                                <?php $j++;} ?>
											
											</tbody>
										</table>
									</div>
								</div>
							</section>
                            
                  <?php
$checkRating=SiteElementHistory::model()->checkRating($elementData['element_id'],$model);
if($checkRating){

				  ?>          <section class="panel">
								<header class="panel-heading panel-heading-transparent">
									
									<h2 class="panel-title">Summary : <?php echo $elementData['element_name'];?></h2>
								</header>
                                
                                <?php if($model['cats_status']==1){?>
								<div class="panel-body">
                                
                               
                                
                                <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'site-element-history-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($siteElement); ?>

                                
									<div class="table-responsive">
										<table class="table table-striped mb-none">
											<thead>
												<tr>
													<th>#</th>
													<th>Element</th>
													<th>Avg Rating</th>
                                                    
                                                    <th>Update Rating *</th>
													
												</tr>
											</thead>
											<tbody>
                                           
												<tr>
													<td>1</td>
													<td><?php echo $elementData['element_name'];?></td>
													<td><?php
$this->widget('CStarRating',array(
            'name'=>$elementData['element_id'],
            'value'=>floor($siteElement['rating']),
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

            'readOnly'=>true,
            ));
?>
</td>
<td><?php
$this->widget('CStarRating',array(
			'model'=>$siteElement,
           'attribute'=>'rating',
            'value'=>floor($siteElement['rating']),
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
</td>
													
												</tr>
                                                
                                                
                                                <tr>
                                                <td colspan="4">
                                               <?php echo CHtml::submitButton($model->isNewRecord ? 'Update Rating' : 'Update Rating',array('class'=>'btn btn-primary')); ?>

                                                </td>
                                                </tr>
                                                

                                              
											
											</tbody>
										</table>
									</div>
                                    
                                   
                                    
								</div>
                                 <?php $this->endWidget(); ?>
                                    <?php }else{ ?>
                                    
                                    Element Avg Rating<?php
$this->widget('CStarRating',array(
            'name'=>$elementData['element_id'],
            'value'=>floor($siteElement['rating']),
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

            'readOnly'=>true,
            ));
?>
                                    
                                    <?php }?>
                                    <br />
                                    <?php if($model['cats_status']==2){?>
                                    <p style="color:#030;">Site Approval in process to National COmmittee </p>
                                    <?php }?>
                                    <?php if($model['cats_status']==3){?>
                                    <p style="color:#030;">Site Approval in process to International COmmittee </p>
                                    <?php }?>
                                    <?php if($model['cats_status']==4){?>
                                    <p style="color:#030;">Site is CA|TS Log certified by International Committee </p>
                                    <?php }?>
							</section>
                            
                            <?php }else{ ?>
                            <p style="color:#F00">Please review and do rating to all criteria(s)</p>
                            <p style="color:#F00">If every criteria has reviewed and have rating then only you able to rate and comment on element</p>
                            <?php } ?>
                            
						</div>
                        
                        <div class="col-lg-4 col-md-12">
							<section class="panel">
								<header class="panel-heading panel-heading-transparent">
									
									<h2 class="panel-title">Assesment Rating</h2>
								</header>
								<div class="panel-body">
									<div class="table-responsive">
										<label class="col-md-3 control-label" for="inputDefault">5 <i class="fa fa-star"></i></label>
												<div class="col-md-9">
                                                <p> 1= Recognised - Action Implemented                                             </p>
												</div>
                                                <label class="col-md-3 control-label" for="inputDefault">4 <i class="fa fa-star"></i></label>
												<div class="col-md-9">
                                                <p> 0.75 = Recognised - Action Initiated
                                                </p>
												</div>
                                                <label class="col-md-3 control-label" for="inputDefault">3 <i class="fa fa-star"></i></label>
												<div class="col-md-9">
                                                <p> 
0.5 = Recognised - Action in Planning Process 

                                                </p>
												</div>
                                                <label class="col-md-3 control-label" for="inputDefault">2 <i class="fa fa-star"></i></label>
												<div class="col-md-9">
                                                <p>
0.25= Recognised: No action Initiated 
                                                </p>
												</div>
                                                <label class="col-md-3 control-label" for="inputDefault">1 <i class="fa fa-star"></i></label>
												<div class="col-md-9">
                                                <p>
0= Not Recognised: Absen
                                                </p>
												</div>
                                                <label class="col-md-3 control-label" for="inputDefault"> <i class="fa fa-star-o"></i></label>
												<div class="col-md-9">
                                                <p>
No rating Given
                                                </p>
												</div>
									</div>
								</div>
							</section>
                            
                            
                            
						</div>
                        
					</div>
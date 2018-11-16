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
													<td>&nbsp;&nbsp;<?php echo $k;?></td>
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
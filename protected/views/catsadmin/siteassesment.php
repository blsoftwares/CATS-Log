<script src="<?php echo Yii::app()->baseUrl;?>/js/highcharts.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/data.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/exporting.js"></script>
<section role="main" class="content-body">
					<header class="page-header">
						<h2><?php echo $model['name_cpa'];?></h2>
											
					</header>
                    
                    <div class="row">
		
						<div class="col-lg-12 col-md-12">
							<section class="panel">
								
								<div class="panel-body">
                                
                                <header class="panel-heading">														
								<h2 class="panel-title">CA|TS Log Self Assesment Data</h2>
							</header>
                                <div class="table-responsive">
									<table class="table table-bordered table-striped table-condensed mb-none">
										<thead>
											<tr>
												<th>S.No.</th>
												<th>Pillar</th>
                                                <th>Element</th>
                                                <th>Standrad</th>
                                                <th>Criteria</th>
                                                <th>Assesment</th>
                                                <th>Evidence Source</th>
												
											</tr>
										</thead>
										<tbody>
                                        <?php 
										$pillar=CatsPillar::model()->findAll();
										$pid='';
										$i=1;
										foreach($pillar as $plist){
										 ?>
                                         
                                          <?php 
										$ele=CatsElement::model()->findAllByAttributes(array('pillar_id'=>$plist['pillar_id']));
										$eid='';
										foreach($ele as $elist){
										 ?>
                                         
                                         <?php 
										$stn=CatsStandard::model()->findAllByAttributes(array('element_id'=>$elist['element_id']));
										$sid='';
										foreach($stn as $slist){
										 ?>
                                         
                                          <?php 
										$crt=CatsCriteria::model()->findAllByAttributes(array('standard_id'=>$slist['standard_id']));
										$cid='';
										foreach($crt as $clist){
											
														$assesmentData=SiteCriteriaHistory::model()->findByAttributes(array('criteria_id'=> $clist['criteria_id'],'site_id'=>$model['site_id']));

											
										 ?>
                                         
											<tr>
												<td><?php echo $i;?></td>
												<td><?php if($pid!=$plist['pillar_id']) echo $plist['pillar_name'];?></td>
												<td><?php if($eid!=$elist['element_id']) echo $elist['element_name'];?></td>
												<td><?php if($sid!=$slist['standard_id']) echo CatsPillar::model()->truncate($slist['standard_name']);?></td>
                                                <td><?php if($cid!=$clist['criteria_id']) echo CatsPillar::model()->truncate($clist['criteria_name']);?></td>
												<td style="max-width:200px;"> 
												
												<?php echo $assesmentData['assesment'];?></td>
												<td style="max-width:200px;"><?php echo $assesmentData['source_base'];?></td>
																								
											</tr>
                                            
                                             <?php 
											 $cid=$clist['criteria_id'];
											$sid=$slist['standard_id'];
										   $eid=$elist['element_id'];
										   $pid=$plist['pillar_id'];
										   $i++;
										  } ?>
                                          
                                             
                                          <?php 
										  
										  } ?>
                                            
                                            
                                          <?php 
										  
										  } ?>
                                            
                                         <?php 
										 
										 } ?>   
											
										</tbody>
									</table>
								</div>
                                
									
								</div>
							</section>
						</div>
                     
					</div>
<script src="<?php echo Yii::app()->baseUrl;?>/js/highcharts.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/data.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/exporting.js"></script>
<section role="main" class="content-body" id="print">


					<header class="page-header">
						<h2><?php echo $model['name_cpa'];?></h2>
					
						
					</header>
                    
            
                   
               <div class="row">
		
						<div class="col-lg-12 col-md-12">
					
               <section class="panel">
                
                                    <header class="panel-heading">
																
										<h2 class="panel-title">Site Send back for Improvement </h2>
                                       
									</header>
                                  
									<div class="panel-body">
                                    									
       <?php
  
  if(date('d-m-Y',strtotime($pdates['actiondate']))>date('d-m-Y')){?>
							<center>											
						
                      
                       <div class="form-group col-md-6">
                              
                                  <form method="post" action="<?php echo Yii::app()->createUrl('national/ebook');?>">
                                  
                                   <input type="hidden" name="site_code" value="<?php echo $model->site_id;?>" />
                                  <input type="submit" value="Download E-Book" />
                                  </form>
                        </div>
                        
						<div class="form-group col-md-6">
                                <form method="post" action="<?php echo Yii::app()->createUrl('national/backup');?>">
                                  <input type="hidden" name="backup" value="download" />
                                   <input type="hidden" name="sitecode" value="<?php echo $model->site_id;?>" />
                                  <input type="submit" value="Download Backup" />
                                  </form>
                             </div>

                    </center>
                    
                    <?php } ?>
                    
                    <div class="clearfix"></div>
               
									</div>
								</section>
                            </div>
                            </div>
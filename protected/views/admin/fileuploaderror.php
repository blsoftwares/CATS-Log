<section role="main" class="content-body">
					<header class="page-header">
						<h2>No action needed</h2>
					
						
					</header>
<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">No Pending Upload for this site </h2>
                                        <h6>Please make assesment and submit this site for review</h6>
									</header>
                                    
                                    <div class="col-md-6">
                                    
                                    <h2 class="panel-title">Download Previous E-Book Assesment </h2>
                              <?php 
							  if(!empty($model)){?>
								  
                                  <form method="post" action="<?php echo Yii::app()->createUrl('admin/ebook');?>">
                                  <input type="hidden" name="site_code" value="<?php echo $model->site_id;?>" />
                                  <input type="submit" value="Download E-Book" />
                                  </form>
								  
							<?php  }?>

						
                        </div>
									
								</section>
                                
            			
							</div>
						</div>
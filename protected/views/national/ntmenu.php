<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							CA|TS Log Committee Review
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="<?php echo Yii::app()->createUrl('national/index')?>">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
                                    
                                                                        
                                    <li <?php if($cid=="national" && $aid=="siteProfile") echo 'class="nav-active"'; ?>>
										<a href="<?php echo Yii::app()->createUrl('national/siteProfile')?>">
											<i class="fa fa-list" aria-hidden="true"></i>
											<span>Site Status Management</span>
										</a>
									</li>
                                                                  
                                      
                                   <li <?php if($cid=="national" && $aid=="reviewerProfile") echo 'class="nav-active"'; ?>>
										<a href="<?php echo Yii::app()->createUrl('national/reviewerProfile')?>">
											<i class="fa fa-user" aria-hidden="true"></i>
											<span>Reviewer's Profile Management</span>
										</a>
									</li> 
                                    
                                    
                                   
                                    <li <?php if($cid=="national" && $aid=="sitemapping") echo 'class="nav-active"'; ?>>
										<a href="<?php echo Yii::app()->createUrl('national/sitemapping')?>">
											<i class="fa fa-random" aria-hidden="true"></i>
											<span>Reviewer - Site Assignment</span>
										</a>
									</li>
                                    
                                    
                                    <li class="nav-parent">
                                    <a>
											<i class="fa fa-link" aria-hidden="true"></i>
											<span>Active Site List </span>
										</a>
                                        
                                        <ul class="nav nav-children" style="">
                                         <?php 
									  $sql="Select * FROM site_register Where status=1 and site_country IN (SELECT country FROM user_login where type=3 and id=".Yii::app()->user->ncm_id." )";
									$site=SiteRegister::model()->findAllBySql($sql);

									 foreach($site as $list){
									   
									 $cid=Yii::app()->controller->id ;
									   $site=$list['site_id'];

									   ?>
																		
									<li class="">
										<a href="<?php echo Yii::app()->createUrl('national/review',array('sitecode'=>$site));?>">
											<i class="fa fa-web" aria-hidden="true"></i>
											<span><?php echo $list['name_cpa'];?></span>
										</a>
										
									</li>
                                    
                                    <?php } ?>
                                        
                                        </ul>
                                        
                                      </li>
                                   
                                    
                                    
																		
								</ul>
							</nav>
				
				
							
						</div>
				
					</div>
				
				</aside>
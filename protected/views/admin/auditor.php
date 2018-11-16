<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							CA|TS Log Site Reviewer
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
										<a href="<?php echo Yii::app()->createUrl('admin/index')?>">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
                                   
                                     <?php 
									 $sql="Select * FROM site_register Where cats_status>=1 and site_id IN (SELECT site_id FROM reviewer_site WHERE reviewer_id=".Yii::app()->user->admin_id.")";
									$site=SiteRegister::model()->findAllBySql($sql);


									 foreach($site as $list){
									   
									 $cid=Yii::app()->controller->id ;
									   $site=$list['site_id'];

									   ?>
																		
									<li class="">
										<a href="<?php echo Yii::app()->createUrl('admin/review',array('sitecode'=>$site));?>">
											<i class="fa fa-web" aria-hidden="true"></i>
											<span><?php echo $list['name_cpa'];?></span>
										</a>
										
									</li>
                                    
                                    <?php } ?>
																		
								</ul>
							</nav>
				
				
							
						</div>
				
					</div>
				
				</aside>
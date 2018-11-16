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
										<a href="<?php echo Yii::app()->createUrl('admin/index')?>">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
                                    <li class="nav-active">
										<a href="<?php echo Yii::app()->createUrl('admin/chart')?>">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Charts Sample</span>
										</a>
									</li>
                                    
                                     <?php for($i=1;$i<=10;$i++){
									   
									 $cid=Yii::app()->controller->id ;
									   $aid=Yii::app()->controller->action->id; 
									   
									   $site='Sitename'.$i;

									   ?>
																		
									<li class="nav-parent <?php if(($aid=="sitesummary")&&($cid=="admin")&&($_GET['site']==$site)) echo 'nav-expanded nav-active';?>">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>SiteName <?php echo $i;?></span>
										</a>
										<ul class="nav nav-children <?php if(($aid=="sitesummary")&&($cid=="admin")&&($_GET['site']==$site)) echo 'nav-expanded nav-active';?>">
											
											<li class="<?php if(($aid=="sitesummary")&&($cid=="admin")&&($_GET['site']==$site)) echo 'nav-active';?>">				<a href="<?php echo Yii::app()->createUrl('admin/sitesummary',array('site'=> $site))?>">
													CA|TS Log Site Summary
												</a>
											</li>
                                            
											
										</ul>
									</li>
                                    
                                    <?php } ?>
																		
								</ul>
							</nav>
				
				
							
						</div>
				
					</div>
				
				</aside>
<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							CA|TS Log-Log Admin
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				 <?php 
                $cid=Yii::app()->controller->id ;
				$aid=Yii::app()->controller->action->id;
				?>
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
                                
									<li  <?php if($cid=="catsadmin" && $aid=="index") echo 'class="nav-active"'; ?>>
										<a href="<?php echo Yii::app()->createUrl('catsadmin/index')?>">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
                                   
                                   
                                     <li <?php if($cid=="catsadmin" && $aid=="incProfile") echo 'class="nav-active"'; ?>>
										<a href="<?php echo Yii::app()->createUrl('catsadmin/incProfile')?>">
											<i class="fa fa-user" aria-hidden="true"></i>
											<span>International Committee Profile</span>
										</a>
									</li>
                                    
                                      <li <?php if($cid=="catsadmin" && $aid=="ncProfile") echo 'class="nav-active"'; ?>>
										<a href="<?php echo Yii::app()->createUrl('catsadmin/ncProfile')?>">
											<i class="fa fa-user" aria-hidden="true"></i>
											<span>National Committee Profile</span>
										</a>
									</li>
                                    
                                      
                              																	
								</ul>
							</nav>
				
				
							
						</div>
				
					</div>
				
				</aside>
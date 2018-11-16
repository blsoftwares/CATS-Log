<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							CA|TS Log Admin Review
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
                                   
                                   
                                <?php 
									 $sql="Select * FROM site_register Where cats_status>=4";
									$site=SiteRegister::model()->findAllBySql($sql);

									 foreach($site as $list){
									   
									 $cid=Yii::app()->controller->id ;
									   $site=$list['site_id'];

									   ?>
																		
									<li class="">
										<a href="<?php echo Yii::app()->createUrl('catsadmin/review',array('sitecode'=>$site));?>">
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
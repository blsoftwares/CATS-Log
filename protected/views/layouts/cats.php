<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>CA|TS Log  Self Field Assessment :: Site</title>
		<meta name="keywords" content="CA|TS Log,Protected Area,IUCN" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="BLS">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/assets/vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/modernizr/modernizr.js"></script>
         <?php  Yii::app()->clientScript->registerCoreScript('jquery');?>
	</head>
	<body>
     <style>
	.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('<?php echo Yii::app()->baseUrl;?>/img/giphy.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
	</style>
    <div class="loader"></div>
    <script type="text/javascript">
$(window).on('load',function() {
    $(".loader").fadeOut();
});
</script>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="<?php echo Yii::app()->createUrl('site/dashboard')?>" class="logo">
						<img src="<?php echo Yii::app()->baseUrl;?>/assets/images/logo.png" height="35" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
                    
				</div>
                
			
				<!-- start: search & user box -->
				<div class="header-right">
                
               			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								 <?php
							$site=SiteRegister::model()->findByAttributes(array('email'=>Yii::app()->user->user_email));
							$image = ($site['profileimage']!="")?$site['profileimage']:'noimage.png';
							?>
                            
								<img src="<?php echo Yii::app()->baseUrl;?>/img/site_documents/<?php echo $image;?>" alt="Joseph Doe" class="img-circle" data-lock-picture="<?php echo Yii::app()->baseUrl;?>/img/site_documents/<?php echo $image;?>" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name"><?php echo SiteRegister::model()->getNameBySiteId(Yii::app()->user->userid);?></span>
								<span class="role">Site Manager</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="<?php echo Yii::app()->createUrl('site/catsprofile')?>"><i class="fa fa-user"></i>CA|TS Log Engagement Details</a>
								</li>
                                <li>
									<a role="menuitem" tabindex="-1" href="<?php echo Yii::app()->createUrl('site/profile')?>"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="<?php echo Yii::app()->createUrl('site/logout')?>"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
               
                                       
                                       
				<aside id="sidebar-left" class="sidebar-left">
                
                 <?php 
                $cid=Yii::app()->controller->id ;
				$aid=Yii::app()->controller->action->id;
				?>
                
		
					<div class="sidebar-header">
						<div class="sidebar-title">
							CA|TS Log Site assessment
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
                        
							<nav id="menu" class="nav-main" role="navigation">
                            
								<ul class="nav nav-main" id="menuscroll">
									
                                     <li>
										

                                        <a href="<?php echo Yii::app()->createUrl('site/dashboard');?>">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>   
                                    
                                     <li class="<?php if(($aid=="assesment")&&($_GET['standard']==$stand)) echo 'nav-active';?>">
										

                                        <a href="<?php echo Yii::app()->createUrl('site/assesment');?>">
											<i class="fa fa-list" aria-hidden="true"></i>
											<span>Assesment Summary</span>
										</a>
									</li>
                                    
                                    
                                     <?php $ele=CatsElement::model()->findAll();
								   foreach($ele as $slist){
									   $eid=$slist['element_id'];
									   ?>
                                    <li class="nav-parent <?php if(($aid=="faf" || $aid=="reviewelement" || $aid=="reviewstandard")&&($_GET['element']==$eid)) echo 'nav-expanded';?>">
										<a>
											<?php echo $elementStatus=CatsElement::model()->getCriteriaStatus($slist['element_id'] ,Yii::app()->user->userid);?>
                                           
											<span>Element <?php echo $slist['element_id']?></span>
										</a>
										<ul class="nav nav-children" style="">
                                        
                                        <li class="<?php if(($aid=="reviewelement")&&($_GET['element']==$eid)) echo 'nav-active';?>">
														<a href="<?php echo Yii::app()->createUrl('site/reviewelement',array('element'=>$slist['element_id'],'sitecode'=>Yii::app()->user->userid));?>">Summary for Element <?php echo $slist['element_id']?> </a>
														
													</li>
											
                                       <?php $stn=CatsStandard::model()->findAllByAttributes(array('element_id'=>$slist['element_id']));
									foreach($stn as $stlist){
										 $stand=$stlist['standard_id'];
										?>
											<li class="nav-parent <?php if(($aid=="reviewstandard" || $aid=="faf")&&($_GET['standard']== $stand)) echo 'nav-expanded';?>">
												<a>
                                                <?php echo $elementStatus=CatsStandard::model()->getCriteriaStatus($stand ,Yii::app()->user->userid);?>
 <?php echo CatsPillar::model()->truncate($stlist['standard_name']);?></a>
												
                                                <ul class="nav nav-children" style="">
                                                <li  class="<?php if(($aid=="reviewstandard")&&($_GET['standard']==$stand)) echo 'nav-active';?>">
														<a href="<?php echo Yii::app()->createUrl('site/reviewstandard',array('standard'=>$stand,'element'=>$slist['element_id'],'sitecode'=>Yii::app()->user->userid));?>">Summary for <?php echo CatsPillar::model()->truncate($stlist['standard_name'])?> </a>
														
													</li>
                                                
                                                <?php 
                                                $cats=CatsCriteria::model()->findAllByAttributes(array('standard_id'=>$stlist['standard_id']));
                                                foreach($cats as $clist){
													$cat=$clist['criteria_id'];
													 ?>
													<li class="<?php if(($aid=="faf")&&($_GET['criteria']==$cat)&&($_GET['standard']==$stand)) echo 'nav-active';?>">
														<a href="<?php echo Yii::app()->createUrl('site/faf',array('criteria'=>$cat,'standard'=>$stand,'element'=>$slist['element_id'],'element'=>$eid));?>">
														<?php echo $elementStatus=CatsCriteria::model()->getCriteriaStatusMenu($clist['criteria_id'] ,Yii::app()->user->userid);?>
														
														<?php echo CatsPillar::model()->truncate($clist['criteria_name']);?></a>
														
													</li>
													<?php } ?>
												</ul>
											</li>
                                            <?php }?>
                                            
										</ul>
									</li>
									<?php } ?>	                      
                                                                                                    
																		
								</ul>
							</nav>	
							
						</div>
				
					</div>
				
				</aside>
                
               
				<!-- end: sidebar -->

<?php echo $content;?>
					<!-- end: page -->
				</section>
			</div>
<!-- start right sidebar-->
<!-- end right sidebar -->
		</section>

		<!-- Vendor -->
		
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/flot/jquery.flot.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/raphael/raphael.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/morris/morris.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/gauge/gauge.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/javascripts/theme.init.js"></script>
        
	</body>
</html>
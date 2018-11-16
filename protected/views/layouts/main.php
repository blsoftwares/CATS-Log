<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>CA|TS Log Site Registrtion | Self Assesment</title>
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
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="<?php echo Yii::app()->createUrl('site/dashboard')?>" class="logo">
						<img src="<?php echo Yii::app()->baseUrl;?>/assets/images/logo.png" height="35" alt="Porto Admin" />
					</a>
					
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
				
					
				
					<div class="nano">
						<div class="nano-content">
							
							<hr class="separator" />
<?php				$model=SiteRegister::model()->findByPk(Yii::app()->user->user_id);
if($model->status==0){
?>
							<div class="sidebar-widget widget-tasks">
								<div class="widget-header">
									<p><b>Important ! Please read carefully before proceeding</b></p>
                                    <p>By completing the regsitartion form as the official representative of the tiger conservation area you are registering the
area for CA|TS Log and hereby agree to work towards achieving CA|TS Log</p>

<marquee><p><font color="#FF0000"><strong>Your profile is not verified by CATS Admin.</strong></font></p></marquee>
						
                               
                                </div>
							</div>
                            
                            <?php } ?>
				
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
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/vendor/jquery/jquery.js"></script>
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

		<!-- Examples -->
		<script src="<?php echo Yii::app()->baseUrl;?>/assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>
</html>
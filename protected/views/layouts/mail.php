<?php
$path= Yii::app()->request->getBaseUrl(true);
?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>CA|TS-Log</title>
		<meta name="keywords" content="CATS Log India" />
		<meta name="description" content="CATS-Log">
		<meta name="author" content="Blue Light Softwares">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo $path;?>/assets/vendor/bootstrap/css/bootstrap.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo $path;?>/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo $path;?>/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo $path;?>/assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo $path;?>/assets/stylesheets/theme-custom.css">

		<style>
		body {
			background: #ecedf0;
    width: 100%;
    color: #777;
    font-family: "Open Sans", Arial, sans-serif;
    line-height: 22px;
    margin: 0;
    font-size: 13px;
    overflow-x: hidden;
    overflow-y: scroll;
	
}
.body-sign {
    display: table;
    height: 100vh;
    margin: 0 auto;
    max-width: 500px;
    padding: 0 15px;
    width: 100%;
}
.body-sign .center-sign {
    display: table-cell;
    padding-top: 20px;
    vertical-align: middle;
}

.body-sign .panel-sign .panel-body {
    background: #FFF;
    border-top: 5px solid #0088cc;
    border-radius: 5px 0 5px 5px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    padding: 33px 33px 15px;
}
.panel-body {
    background: #fdfdfd;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    border-radius: 5px;
}
		</style>
	</head>
	<body>

<?php echo $content ?>

</body>
</html>
<style>
.header-img {
  width: 100%;
  height: auto;
}
</style>
<?php
$path=Yii::app()->request->getBaseUrl(true);
?>
<section class="body-sign" style="max-width:700px!important;">
			<div class="center-sign">
            
            
				<center>
                <a href="/" class="logo">
					<img src="<?php echo $path;?>/img/email_image.png" alt="CA|TS-Log">
				</a>
                <p></p>
                </center>

				<div class="panel panel-sign">
					
					<div class="panel-body">
                    
                   
                    
                    <p class="panel-title">Dear <?php echo $data['site_name'];?> ,</p>
                   
                    <p>&nbsp;</p>
                    
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;Thank you for submitting the self-assessment of your site, <?php echo $data['site_name'];?> of <?php echo $data['site_country'];?>. We have notified the <?php echo $data['national_committee'];?> regarding the submission of your site assessment process. The review process will be initiated from <?php echo $data['next_action_date'];?>. You can view your site status and progress on your dashboard.</p>
 
<p>&nbsp;</p>
<p><center>Please login to <a href="http://cats-log.org<?php echo Yii::app()->createUrl('site/login');?>" target="_blank">CA|TS-Log Login</a> page for viewing your site status on dashboard.</center></p>
<p><hr/></p>
<p>Thanks & Regards,</p>
<p>Team Admin,<br>CA|TS-Log.</p>
<p>&nbsp;</p>
<p class="text-center text-muted mt-md mb-md"><center>** This is a system generated message; please do not reply to it**</center></p>
<p class="text-center text-muted mt-md mb-md"><center>** For any queries related to CA|TS Process, please visit conservationassured.org**</center></p>
<p class="text-center text-muted mt-md mb-md"><center>** For any queries related to CA|TS-Log Process, write to us at query@cats-log.org**</center></p>
<p class="text-center text-muted mt-md mb-md"><center>** For any queries related to Tech Support, write to us at tecSupport@cats-log.org**</center></p>

											</div>
				</div>

				
			</div>
		</section>
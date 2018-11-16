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
                    
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;Thank you for completing the registration process of your site <?php echo $data['site_name'];?> on CA|TS-Log website. You Site details are mentioned below:</p>
 <p>&nbsp;</p>
						<p><strong>For Login </strong>[<a href="<?php echo Yii::app()->createUrl('site/login');?>" target="_blank">CATS-Log Login</a>]</p>	
                            <p>Username : <?php echo $data['username'];?></p>
                            <p>Password : <?php echo $data['password'];?></p>
                            
                            <p><strong>For e-mail Conversation</strong></p>	
                            
                            <p>Email ID : <?php echo $data['email_id'];?></p>
                            
                            <p><strong>Other Site Details</strong></p>
                            
                            <p>Site Name : <?php echo $data['site_name'];?></p>
                            <p>Site’s Country : <?php echo $data['site_country'];?></p>
                            <p>Registered Date : <?php echo $data['registered_date'];?></p>
<p>&nbsp;</p>
<p>For updating your engagement form or profile information, please follow the below mentioned steps:</p>
<ol>
<li>Login to CA|TS-Log Website</li>
<li>Click on the link which appears on the top-right corner with your site name (i.e., site_name)</li>
<li>If you click “CA|TS Engagement Profile” link; website will open your engagement form, there you can edit / update any information and then ‘Save’ it.</li>
<li>Or if you click “My Profile” link; website will open your Profile form, there you can edit / update your information and then ‘Save’ it.</li>
</ol>
<p>&nbsp;</p>
<p>Now, you may go ahead in filling up your assessment form against each ‘Criteria’ for all the ‘Standards’ mentioned by CA|TS. Also, you can see your site overview on the dashboard menu [appears on the left panel after you login to the CA|TS-Log website].</p>
<p>&nbsp;</p>
<p><center>Please visit the <a href="http://cats-log.org<?php echo Yii::app()->createUrl('site/login');?>" target="_blank">CA|TS-Log Login</a> page for completing your registration</center></p>
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
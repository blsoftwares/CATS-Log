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
                    
                   
                    
                    <p class="panel-title">Dear <?php echo $data['name'];?> ,</p>
                   
                    <p>&nbsp;</p>
                    
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;The site manager for the site “site_name” has completed their registration process (i.e., site manager registration and site engagement form). The site details are mentioned below:</p>
 <p>&nbsp;</p>
							
                           <p><strong>For e-mail / telephonic conversation</strong></p>
                            <p>Email ID : <?php echo $data['email_id'];?></p>
                            <p>Contact Num. : <?php echo $data['contact_number'];?></p>
                           
                            <p><strong>Other Details</strong></p>
                            <p>Username : <?php echo $data['username'];?></p>
                            <p>SIte Name : <?php echo $data['site_name'];?></p>
                            <p>Site’s Country : <?php echo $data['site_country'];?></p>
                        
                            <p>Registered Date : <?php echo $data['registered_date'];?></p>
<p>&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;You can see the site overview on your dashboard menu [appears on the left panel after you login to the CA|TS-Log website].</p>
<p>&nbsp;&nbsp;Now, please verify the site data and activate the same from your dashboard. To execute this process, please follow the below mentioned steps:</p>
<ol>
<li>	Login to CA|TS-Log website with national committee profile</li>
<li>	Click the menu “Sites Status Management” on to the left panel</li>
<li>	Click the update icon to left of each row of sites list provided</li>
<li>	Now, review the data filled by the site manager in the engagement form against their site, site_name</li>
<li>	Then, select the site status from the list shown at the bottom of this page as ‘Activate’ / ‘De-activate’ status</li>
<li>	Finally, click on the ‘Save’ button to change the status to either ‘Activate’ or ‘De-activate’</li>

</li>
</ol>
<p>&nbsp;</p>
<p><u><i>Note:</i></u> The site will only be allowed to fill the self-assessment form and proceed further once the national committee has approved the site.</p>
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
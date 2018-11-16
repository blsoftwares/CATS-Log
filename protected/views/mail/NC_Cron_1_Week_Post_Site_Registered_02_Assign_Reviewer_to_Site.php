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
                    
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;
                                There is a site in your country named, <?php echo $data['site_name'];?>; which was registered on <?php echo $data['registered_date'];?>. This site has not been assigned to any reviewer. Please allocate a reviewer to this site.</p>
 <p>&nbsp;</p>
							
                          <p>  To execute this activity, follow the below mentioned steps:</p>
                          <ol>

<li>	Login to CA|TS-Log website with national committee profile</li>
<li>	Click the menu “Reviewer - Site Assignment” on to the left panel</li>
<li>	Select a reviewer from the list appears to the left with the heading ‘Active Reviewer List’</li>
<li>	Now, check/click on to the list of site(s) (appears to the right with the heading ‘Approved Site List’) which you wish to assign to this reviewer</li>
<li>	Finally, click on the button “Assign Site(s) to Selected Reviewer” to assign the site(s) to the selected reviewer

</li></ol>
 <p>&nbsp;</p>
<p><u><i>Note:</i></u> If the site has no reviewer assigned, the system will not proceed with this site.</p>

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
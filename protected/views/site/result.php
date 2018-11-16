 <link rel='stylesheet' id='academica-pro-style-css'  href='<?php echo Yii::app()->baseUrl;?>/css/bootstrap.css' type='text/css' media='all' />
<div id="main">

		<div class="wrapper full-width">
	
			
			
			<div class="widget">
				<h1 class="post-title">Students' Result</h1>
								
				<div class="divider">&nbsp;</div>
				
				<div class="post-content">
					<p>Please download your certificate's</p>
                    
					<div class="cleaner">&nbsp;</div>
					
					<div class="post-content">
                    
                    <div class="col-md-3"></div>
                    <div class="col-md-6 well text-danger">
                    
                    
                       <center> <h1>Details</h1></center>
<div style="float: left; margin: 0 25px 0 0;">
<div class="shortcode-unorderedlist bullet"><p></p>
<ul>
<li>Name: <?php echo $model->name;?></li>
<li>Enrolment: <?php echo $model->enroll_id;?></li>
<li>Course: <?php echo $model->course_id;?></li>
<li>Study Center: <?php echo $model->exam_center;?></li>
<li>Certificate Status: <?php echo $model->status;?></li>
<?php if($model->certificate!=""){?>
<li>Certificate : <a href="<?php echo Yii::app()->baseurl."/students/certificate/".$model->certificate;?>" target="_blank">Download</a></li>
<?php }?>

</ul>
<p></p></div>

</div>
                    
                    
                    

</div>

<div class="col-md-3"></div>
                    


						<div class="cleaner">&nbsp;</div>

						
					</div>
					
										
				</div><!-- end .post-content -->
	
				
								<div class="divider">&nbsp;</div>
				
				<div id="comments">
					<div id="comments">



		<!--<p class="title">Comments are closed.</p>-->
	

 
</div><!-- end #comments -->  
				</div><!-- end #comments -->
	
								
				<div class="cleaner">&nbsp;</div>
			</div><!-- end .widget -->

			<div class="cleaner">&nbsp;</div>
			
						
		</div><!-- end .wrapper -->

	</div>
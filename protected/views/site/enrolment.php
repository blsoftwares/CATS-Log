 <link rel='stylesheet' id='academica-pro-style-css'  href='<?php echo Yii::app()->baseUrl;?>/css/bootstrap.css' type='text/css' media='all' />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div id="main">

		<div class="wrapper full-width">
	
			
			
			<div class="widget">
				<h1 class="post-title">Student's Enrolment</h1>
								
				<div class="divider">&nbsp;</div>
				
				<div class="post-content">
               
                    <?php
					$month=array_combine(range(1,12), range(1,12));
					$year=array_combine(range(date('Y')-10,date('Y')), range(date('Y')-10,date('Y')));
					 if($msg){?>
                    <div class="alert alert-danger"><?php echo $msg;?></div>
                    <?php }?>
                    
					<div class="cleaner">&nbsp;</div>
					
					<div class="post-content">
						<div id="contact-form-251">
                        <form method="post">
                        <table class="table table-condensed">
                        <tr>
                        <td><?php echo CHtml::dropDownList('month','month',$month,array("class"=>"form-control"));?></td>
                        <td><?php echo CHtml::dropDownList('year','year',$year,array("class"=>"form-control"));?></td>
                        <td><input type="submit" name="search" value="Filter" /></td>
                        </tr>
                        </table>
                        </form>
                        
                       <p> <span class="label label-primary lg">List of enrolled students . Verify Details and upload thier certificates</span></p>
                       
<table class="table table-condensed">
    <thead>
      <tr>
       <th>Enrolment date</th>
        <th>Enrolment Number</th>
        <th>Student's Name</th>
        <th>Father Name</th>
         <th>Address</th>
          <th>Certificate</th>
         <th>Upload Certificate</th>
       
       
      </tr>
    </thead>
    <tbody>
    <?php foreach($model as $list){?>
      <tr>
        <td><?php echo $list['register_on'];?></td>
        <td><?php echo $list['enroll_id'];?></td>
        <td><?php echo $list['name'];?></td>
        <td><?php echo $list['father'];?></td>
         <td><?php echo $list['address'].",".$list['pinocde'].",".$list['state'];?></td>
          <td><?php echo $list['status'];?></td>
         <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal<?php echo $list['id'];?>">Upload</button>
         <!-- Modal -->
<div id="myModal<?php echo $list['id'];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Certificate | Enrolemnt No: <?php echo $list['enroll_id'];?></h4>
      </div>
      <form method="post" enctype="multipart/form-data"> 
      <div class="modal-body">
        <input type="file" required="required"  name="fileupload" accept="application/pdf, image/*"/>
		<input type="hidden" value="<?php echo $list['enroll_id'];?>" name="enrolment" />
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Save</button>
      </div>
    </div>
    </form>

  </div>
</div>
</td>
       
</tr>
<?php }?>
    </tbody>
  </table>
<?php $this->widget('CLinkPager', array(
	'pages'=>$pages,
	    'header'=>'',
));
?>


</div>

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
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Reviewer - Site Assignment</h2>
					 	
					</header>

<form action="" method="post" id="mapping">
<div class="row">
							<div class="col-lg-6">
								        <?php echo $msg;?>                       
                                <section class="panel">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">Active Reviewer List</h2>
									</header>
                                    <div class="panel-body">
<div id="auditormsg"></div>
<div id="auditorlist">
 <?php
									
									$type_list=CHtml::listData($reviewer,'id', 'username');
									echo CHtml::DropDownList('reviewer','', $type_list,array('empty'=>'--Select--','onChange'=>'getSite(this.value);','class'=>'form-control')
                ); 
									
									?>
</div>

</div>

</section>
						
								
						
							</div>
                            
                            <div class="col-lg-6">
								                               
                                <section class="panel">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">Active Site List</h2>
									</header>
                                    <div class="panel-body">

<div id="sitemsg"></div>
<div id="sitelist"></div>
</div>


</section>
						
								
						
							</div>

</div><!-- form -->
<script type="text/javascript">
	
function getSite(reviewer)
{
	
	$('#sitelist').html('');
	$('#sitemsg').html('');
	
	$country='<?php echo $user['country'];?>';
	
	if(reviewer!="")
	{
	
	$.get('<?php echo Yii::app()->createUrl('national/getSiteList'); ?>?country='+$country+'&reviewer='+reviewer,function(d){
					
			if(d!=""){
				
			$('#sitelist').html(d);
				$('#sitemsg').html('Please select Site Profile to assign to Reviewer');
			}
			else
			{
			$('#sitelist').html('');
			$('#sitemsg').html('No Active Site found for mapping');
			}
		
		});
	}
	
	}
	
	
	function submitForm()
	{
		var numberChecked =$('input:checkbox:checked').length;
		
		if(numberChecked==0)
		{
		alert('You must select atleast one site for submission');
		}
		else
		{
			 $('#mapping').submit(); //.trigger('submit');
		}
	}
		
</script>
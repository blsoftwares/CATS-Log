<section role="main" class="content-body">
					<header class="page-header">
						<h2>Reviewer's Site Mapping Management</h2>
					 	
					</header>
<div class="row">

  <section class="panel">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">Select country to popup Site Reviewer list</h2>
									</header>
                                    <div class="panel-body">
                                    
                                    
                                    <?php
									
									$type_list=CHtml::listData(SiteCountry::model()->findAll(),'iso3', 'name');
									echo CHtml::DropDownList('Typelist[name]','', $type_list,array('empty'=>'--Select--','onChange'=>'getAuditor(this.value);')
                ); 
									
									?>
</div>

</section>
						
</div>

<form action="" method="post" id="mapping">
<div class="row">
							<div class="col-lg-6">
								                               
                                <section class="panel">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">CA|TS Log Approved/Active Reviewer's List</h2>
									</header>
                                    <div class="panel-body">
<div id="auditormsg"></div>
<div id="auditorlist"></div>

</div>

</section>
						
								
						
							</div>
                            
                            <div class="col-lg-6">
								                               
                                <section class="panel">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">Approved CATS Enganement Assesment Site List</h2>
									</header>
                                    <div class="panel-body">

<div id="sitemsg"></div>
<div id="sitelist"></div>
</div>


</section>
						
								
						
							</div>

</div><!-- form -->
<script type="text/javascript">
function getAuditor(country)
{
	$('#auditorlist').html('');
	$('#auditormsg').html('');
	$('#sitelist').html('');
	$('#sitemsg').html('');
	
	$.get('<?php echo Yii::app()->createUrl('catsadmin/getAuditor'); ?>?country='+country,function(d){
					
			if(d!=""){
				
				$('#auditorlist').html(d);
				$('#auditormsg').html('Please select Reviewer Profile to populate Site List');
			}
			else
			{
			$('#auditorlist').html('');
			$('#auditormsg').html('No data found');
			}
		
		});
	}
	
	function getSite(reviewer)
{
	
	$('#sitelist').html('');
	$('#sitemsg').html('');
	
	$country=$("#Typelist_name option:selected").val();
	
	if(reviewer!="")
	{
	
	$.get('<?php echo Yii::app()->createUrl('catsadmin/getSiteList'); ?>?country='+$country+'&reviewer='+reviewer,function(d){
					
			if(d!=""){
				
				$('#sitelist').html(d);
				$('#sitemsg').html('Please select Site Profile to assign to Reviewer');
			}
			else
			{
			$('#sitelist').html('');
			$('#sitemsg').html('No data found');
			}
		
		});
	}
	
	}
	
	
	function submitForm()
	{
		var numberNotChecked = $('input:checkbox:not(":checked")').length;
		if(numberNotChecked>0)
		alert('You must select atleast one site for submission');
		else
		{
			 $('#mapping').submit(); //.trigger('submit');
		}
	}
		
</script>
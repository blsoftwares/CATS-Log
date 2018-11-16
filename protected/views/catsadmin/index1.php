<script src="<?php echo Yii::app()->baseUrl;?>/js/highcharts.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/data.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/exporting.js"></script>
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
					
						
					</header>
                    
                    
                    
                    <div class="row">
                    
                    <?php 
			$sql1="Select * FROM site_register Where status=1 and profile=1";
			$sites=SiteRegister::model()->findAllBySql($sql1);
			$totalsites=count($sites);
			
			$sql2="Select * FROM site_register Where status=5";
			$approvedSites=count(SiteRegister::model()->findAllBySql($sql2));
			
?>
						<div class="col-lg-6 col-md-6">
							<section class="panel">
								
								<div class="panel-body">
                               
									<div class="table-responsive">
										<div id="containerpie1" style="height:300px; margin: 0 auto"></div>               
                                        <script>
Highcharts.chart('containerpie1', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie',
	 events: {
            load: function(event) {
              var total = 0;
                for(var i=0, len=this.series[0].yData.length; i<len; i++){
                    total += this.series[0].yData[i];
                }
              var text = this.renderer.text(
                'Total Sites: ' + total,
                this.plotLeft,
                this.plotTop +200
            ).attr({
                zIndex: 5
            }).add()
            }
              }
  },
  title: {
    text: 'CA|TS-Log Active Sites '
  },
  
   legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            y: 30,
            labelFormat: '{name} ({y})',
            navigation: {
                activeColor: '#3E576F',
                animation: true,
                arrowSize: 12,
                inactiveColor: '#CCC',
                style: {
                    fontWeight: 'bold',
                    color: '#333',
                    fontSize: '12px'    
                }
            }
        },
  
  credits: {
    enabled: false
  },
  series: [{
    name: 'CATS Engagement Sites',
    colorByPoint: true,
    data: [
	{
      name: 'Total Active Sites',
      y: <?php echo $totalsites;?>,
      selected: true
    }, 
	{
      name: 'CA|TS-log Approved Sites',
      y: <?php echo $approvedSites;?>
    }
	]
  }]
});



</script>
									</div>
								</div>
							</section>
						</div>
                        
                        <?php
						$sql1="Select * FROM site_register Where status=1  and profile=1 and cats_status=0";
			$sites=SiteRegister::model()->findAllBySql($sql1);
			$smsites=count($sites);
			
			$sql2="Select * FROM site_register Where status=1  and profile=1 and cats_status=1";
			$sites2=SiteRegister::model()->findAllBySql($sql2);
			$rewsites=count($sites2);
			
			
			$sql3="Select * FROM site_register Where status=1  and profile=1 and cats_status=2";
			$sites3=SiteRegister::model()->findAllBySql($sql3);
			$ncsites=count($sites3);
			
			$sql4="Select * FROM site_register Where status=1  and profile=1 and cats_status=3";
			$sites4=SiteRegister::model()->findAllBySql($sql4);
			$incsites=count($sites4);
			
						?>
                        
                        <div class="col-lg-6 col-md-6">
							<section class="panel">
								
								<div class="panel-body">
                               
									<div class="table-responsive">
										<div id="containerpie2" style="height:300px; margin: 0 auto"></div>               
                                                                            <script>
Highcharts.chart('containerpie2', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie',
	    events: {
            load: function(event) {
              var total = 0;
                for(var i=0, len=this.series[0].yData.length; i<len; i++){
                    total += this.series[0].yData[i];
                }
              var text = this.renderer.text(
                'Total Sites: ' + total,
                this.plotLeft,
                this.plotTop +200
            ).attr({
                zIndex: 5
            }).add()
            }
              }
  },
  title: {
    text: 'CA|TS-Log Active Sites Progress Level '
  },
  
    legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            y: 30,
            labelFormat: '{name} ({y})',
            navigation: {
                activeColor: '#3E576F',
                animation: true,
                arrowSize: 12,
                inactiveColor: '#CCC',
                style: {
                    fontWeight: 'bold',
                    color: '#333',
                    fontSize: '12px'    
                }
            }
        },
  
  credits: {
    enabled: false
  },
  series: [{
    name: 'CATS Engagement Sites',
    colorByPoint: true,
    data: [
	{
      name: 'Pending at SM',
      y: <?php echo $smsites;?>,
      selected: true
    }, 
	{
      name: 'Pending at Reviewer',
      y: <?php echo $rewsites;?>
    }, 
	{
      name: 'Pending at NC',
      y: <?php echo $ncsites;?>
    }, 
	{
      name: 'Pending at InC',
      y: <?php echo $incsites;?>
    }
	
	]
	
  }]
  
});



</script>
									</div>
								</div>
							</section>
						</div>
                        
                    
					</div>
                    
                    <div class="row">

  <section class="panel">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">Select country and respective site to get Site summary and Current Progress Level</h2>
									</header>
                                    <div class="panel-body  col-md-6">
                                    
                                    
                                    <?php
									
									$type_list=CHtml::listData(SiteCountry::model()->findAllByAttributes(array('status'=>1)),'iso3', 'name');
									echo CHtml::DropDownList('Typelist[name]','', $type_list,array('empty'=>'--Select--','onChange'=>'getSite(this.value);')
                ); 
									
									?>
</div>
<div class="panel-body col-md-6" id="sitelist">
                                    
                                 <div></div>   
                                   
</div>

</section>
						
</div>

<div id="sitedata" class="row">

</div>


<script type="text/javascript">

function getSite(country)
{
	
	if(country!="")
	{
	
	$.get('<?php echo Yii::app()->createUrl('catsadmin/getSiteList'); ?>?country='+country,function(d){
					
			if(d!=""){
				
				$('#sitelist').html(d);
				
			}
			else
			{
			$('#sitelist').html('');
			}
		
		});
	}
	
	}

function getSiteData(siteid)
{
	$('#sitedata').html('');
	if(siteid!="")
	{
	
	$.get('<?php echo Yii::app()->createUrl('catsadmin/getSiteData'); ?>?siteid='+siteid,function(d){
					
			if(d!=""){
				
				$('#sitedata').html(d);
				
			}
			else
			{
			$('#sitedata').html('');
			}
		
		});
	}
	
	}

		
</script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/highcharts.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/data.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/exporting.js"></script>

                    <?php
			$site=SiteRegister::model()->findAllByAttributes(array('site_id'=>$site['site_id']));
			if(!empty($site)){
			 foreach($site as $list){?>
             
             
             <div class="col-lg-12 col-md-12">
							<section class="panel">
								
                                <header class="panel-heading">
																
										<center><h2 class="panel-title"><?php echo $list['name_cpa'];?> :: <?php echo SiteRegister::model()->getSiteStatus($list['cats_status'],$list['site_id']); ?></h2></center>
                                        
									</header>
                                
								<div class="panel-body">
									<div class="table-responsive">
										<div id="containerPillar<?php echo $list['site_id']?>" style="height:300px; margin: 0 auto"></div>
                                              
      <?php 
$eleData=array();
$eleScore=array();
$eleSeries=array();
$st=CatsPillar::model()->findAll();
foreach($st as $elist)
{
	$elementData=SitePillarHistory::model()->findByAttributes(array('site_id'=>$list['site_id'],'criteria_id'=>$elist['pillar_id']));
	$erating=floor($elementData['rating']);
$eleData[]=$elist['pillar_name'];
$eleSeries[]=$erating;
$eleScore[]=CatsPillar::model()->getScoreByCriteria($elist['pillar_id'],$list['site_id']);
}


$xData=json_encode($eleData);
$xSeries=json_encode($eleSeries);
$xScores=json_encode($eleScore);
?>
                  
                                    
                                        <script>
Highcharts.chart('containerPillar<?php echo $list['site_id']?>', {

    chart: {
        type: 'column'
    },

    title: {
        text: 'Pillar Ratings/Scores'
    },
	
	yAxis: {
            min: 0,
            max: 5,
            tickInterval: 1,
            title: {
                text: 'Values'

            },
            
        },
	
	credits: {
    enabled: false
  },
  
  plotOptions: { column: { dataLabels: { enabled: true }}},
  
  xAxis: { categories: <?php echo $xData;?> },


    series:[
{"name":"Rating","data":<?php echo $xSeries;?>},
{"name":"Score","data":<?php echo $xScores;?>}
]
});
</script>
									</div>
								</div>
							
								
								<div class="panel-body">
									<div class="table-responsive">
										<div id="containerElement<?php echo $list['site_id']?>" style="height:300px; margin: 0 auto"></div>
                                              
      <?php 
$eleData=array();
$eleScore=array();
$eleSeries=array();
$st=CatsElement::model()->findAll();
foreach($st as $elist)
{
	$elementData=SiteElementHistory::model()->findByAttributes(array('site_id'=>$list['site_id'],'criteria_id'=>$elist['element_id']));
	$erating=floor($elementData['rating']);
$eleData[]=$elist['element_name'];
$eleSeries[]=$erating;
$eleScore[]=CatsElement::model()->getScoreByCriteria($elist['element_id'],$list['site_id']);
}


$xData=json_encode($eleData);
$xSeries=json_encode($eleSeries);
$xScores=json_encode($eleScore);
?>
                  
                                    
                                        <script>
Highcharts.chart('containerElement<?php echo $list['site_id']?>', {

    chart: {
        type: 'column'
    },

    title: {
        text: 'Element Ratings/Scores'
    },
	
	yAxis: {
            min: 0,
            max: 5,
            tickInterval: 1,
            title: {
                text: 'Values'

            },
            
        },
	
	credits: {
    enabled: false
  },
  
  plotOptions: { column: { dataLabels: { enabled: true }}},
  
  xAxis: { categories: <?php echo $xData;?> },


    series:[
{"name":"Rating","data":<?php echo $xSeries;?>},
{"name":"Score","data":<?php echo $xScores;?>}
]
});
</script>
									</div>
								</div>
							</section>
						</div>
                        
                        
                        
                        
                        
                     <?php }}else{?>
                     <p>No Active Site data found</p>
                     <?php }?>

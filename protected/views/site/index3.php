<script src="<?php echo Yii::app()->baseUrl;?>/js/highcharts.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/data.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/exporting.js"></script>
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
					
						
					</header>
                    
                    <div class="row">
                    <?php
			if(!empty($site)){
			 foreach($site as $list){?>
             
             
             <!-- Pillar Rtaing Chart -->
						<div class="col-lg-12 col-md-12">
							<section class="panel">
                            <header class="panel-heading">
																
										<center><h2 class="panel-title"><a href="<?php echo Yii::app()->createUrl('site/review',array('sitecode'=>$list['site_id']));?>"><?php echo $list['name_cpa'];?></a> :: <?php echo SiteRegister::model()->getSiteStatus($list['cats_status'],$list['site_id']); ?></h2></center>
									</header>
								
								<div class="panel-body">
									<div class="table-responsive">
										<div id="containerElement<?php echo $list['site_id']?>" style="height:300px; margin: 0 auto"></div>
                                              
    <?php 
$eleData=array();
$eleSeries=array();
$eleScore=array();
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
Highcharts.chart('containerElement<?php echo $list['site_id']?>', {

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
										<div id="containerPillar<?php echo $list['site_id']?>" style="height:300px; margin: 0 auto"></div>
                                              
    <?php 
$eleData=array();
$eleSeries=array();
$eleScore=array();
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
Highcharts.chart('containerPillar<?php echo $list['site_id']?>', {

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
                        
                        
                        <!-- Standrad Loop -->
                         <div class="col-lg-12 col-md-12">
							<section class="panel">
								
								<div class="panel-body">
									<div class="table-responsive">
                                    
                                    <h2>CA|TS Log Standard Wise Criteria's Assesment Progress Status</h2>
  
  <?php $standard=CatsStandard::model()->findAll();
  foreach($standard as $stlist){
	  $head=CatsPillar::model()->getNameByHeading($stlist['standard_name']);
  ?>
  <h4><?php  echo $head['head']; ?></h4> 
  <div class="progress">
    
     <?php $criteria=CatsCriteria::model()->findAllByAttributes(array('standard_id'=>$stlist['standard_id']));
	 $count=count($criteria);
  foreach($criteria as $clist){
  ?>
    <?php $per=100/$count;
	$color=CatsCriteria::model()->getCriteriaStatus($clist['criteria_id'],$list['site_id'],$list['cats_level']);
	 $head=CatsPillar::model()->getNameByHeading($clist['criteria_name']);
	?>
    <div class="progress-bar <?php echo $color;?>" role="progressbar" style="width:<?php echo $per;?>%">
      <div style="border:1px solid #000;"><?php  echo $head['head']; ?></div>
    </div>
    <?php } ?>
    
    
  </div>
  
  <?php } ?>
                                    
                                    
                                    
                                    </div>
                                  </div>
                             </section>
                      </div>
                        
                        
                        
                        
                        
                     <?php }}else{?>
                     <p>No Site Assigned by ADMIN for this level</p>
                     <?php }?>
					</div>   
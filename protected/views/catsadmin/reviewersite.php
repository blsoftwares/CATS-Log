<script src="<?php echo Yii::app()->baseUrl;?>/js/highcharts.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/data.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/exporting.js"></script>
<section role="main" class="content-body">
					<header class="page-header">
						<h2>CA|TS Log Site Assigment for Assesment</h2>
					
						
					</header>
                    
                    <div class="row">
                    <?php 
			$sql="Select * FROM site_register Where cats_status>=2";
			$site=SiteRegister::model()->findAllBySql($sql);
			if(!empty($site)){
			 foreach($site as $list){?>
						<div class="col-lg-12 col-md-12">
							<section class="panel">
								
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
        text: '<a href="<?php echo Yii::app()->createUrl('national/review',array('sitecode'=>$list['site_id']));?>"><?php echo $list['name_cpa'];?></a> :: Element Ratings/Scores'
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
                     <p>No data found for this level</p>
                     <?php }?>
					</div>   
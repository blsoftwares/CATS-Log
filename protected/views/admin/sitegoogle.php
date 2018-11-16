<script src="<?php echo Yii::app()->baseUrl;?>/js/highcharts.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/data.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/exporting.js"></script>


<section role="main" class="content-body" id="print">


					<header class="page-header">
						<h2><?php echo $model['name_cpa'];?></h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
                                <li><a href="<?php echo Yii::app()->createUrl('admin/siteassesment',array('sitecode'=>$model['site_id']));?>"><span>Get Assesment Report</span></a></li>
							</ol>
					
							<a class="sidebar-right-toggle" ></a>
						</div>
					</header>
                    
                    
                    <div class="row">
		
						<div class="col-lg-12 col-md-12">
							<section class="panel">
								
								<div class="panel-body">
									<div class="table-responsive">
										<div id="containerElement" style="height:300px; margin: 0 auto"></div>
                                              
   <?php 
   $chart='';
   $chart.='chart'.$model['site_id'].',';
$eleData=array();
$eleScore=array();
$eleSeries=array();
$st=CatsElement::model()->findAll();
foreach($st as $elist)
{
	$elementData=SiteElementHistory::model()->findByAttributes(array('site_id'=>$model['site_id'],'criteria_id'=>$elist['element_id']));
	$erating=floor($elementData['rating']);
$eleData[]=$elist['element_name'];
$eleSeries[]=$erating;
$eleScore[]=CatsElement::model()->getScoreByCriteria($elist['element_id'],$model['site_id']);
}


$xData=json_encode($eleData);
$xSeries=json_encode($eleSeries);
$xScores=json_encode($eleScore);
?>
                                    
                                        <script>
var chart<?php echo $model['site_id'];?>=Highcharts.chart('containerElement', {

    chart: {
        type: 'column'
    },

    title: {
        text: '<?php echo $model['name_cpa'];?> :: Element Ratings/Scores '
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
                     
					</div>
                    
                    
                    
<div class="row">
					<?php 
$st=CatsElement::model()->findAll();
foreach($st as $elist){ ?>

<?php 
	
	$ste=CatsStandard::model()->findAllByAttributes(array('element_id'=>$elist['element_id']));
	
	foreach($ste as $stlist){
	$stand=$stlist['standard_id'];
	$chart.='chart'.$stlist['standard_id'].',';
	$chart.='chartData'.$stlist['standard_id'].',';

	$standardRating=SiteStandardHistory::model()->findByAttributes(array('site_id'=>$model['site_id'],'criteria_id'=>$stlist['standard_id']));
	$standardPoint=CatsStandard::model()->getPoint($stlist['standard_id'],$model['site_id']);
	?>	
						<div class="col-lg-6 col-md-12">
							<section class="panel">
								<header class="panel-heading panel-heading-transparent">
									
									<h2 class="panel-title"><?php echo CatsPillar::model()->truncate($stlist['standard_name']);?> | Rating : <?php echo $standardRating['rating'];?> | Score : <?php echo $standardPoint;?></h2>
                                    <h2 class="panel-title">
                                     
									<?php
$this->widget('CStarRating',array(
			'name'=>'standard'.$stlist['standard_id'],
            'value'=>(int)$standardRating['rating'],
			'minRating'=>1,
            'maxRating'=>5,
            'starCount'=>5,
			'titles'=>array(
                '1'=>'Not Recognised: Absen',
                '2'=>'Recognised: No action Initiated',
                '3'=>'Recognised - Action in Planning Process',
                '4'=>'Recognised - Action Initiated',
                '5'=>'Recognised - Action Implemented'
            ),
			'readOnly'=>true,

            ));
?>
</h2>
									
									
								</header>
								<div class="panel-body">
									<div class="table-responsive">
										<div id="container<?php echo $stlist['standard_id']; ?>" style="height: 400px; margin: 0 auto"></div>
      
      <?php
	  
             $cats=CatsCriteria::model()->findAllByAttributes(array('standard_id'=>$stlist['standard_id']));
			 $colum=array();
			 $series=array();
foreach($cats as $clist){
	$colum[]=CatsPillar::model()->truncate($clist['criteria_name']);
	$cat=$clist['criteria_id'];
			$assesmentData=SiteCriteriaHistory::model()->findByAttributes(array('criteria_id'=> $clist['criteria_id'],'site_id'=>$model['site_id']));
			$assesment=($assesmentData['assesment']=="")?'panel-danger':'panel-success';
			$rating=(int)$assesmentData['rating'];
			$series[]=$rating;

}
$xData=json_encode($colum);
$xSeries=json_encode($series);

	?>
                                        
                                        
                                        <script>
var chart<?php echo $stlist['standard_id'];?>=Highcharts.chart('container<?php echo $stlist['standard_id'];?>', {

    chart: {
        type: 'bar',
		
    },
	
	yAxis: {
            min: 0,
            max: 5,
            tickInterval: 1,
            title: {
                text: 'Values'

            },
            
        },

    title: {
        text: '<?php echo $model['name_cpa'];?>',
		style: {

                            font: 'normal 15px Arial, sans-serif',

                            color : 'green'

                        }
    },
	subtitle: {
        text: '<?php echo $elist['element_name'];?> | <?php echo CatsPillar::model()->truncate($stlist['standard_name']);?>',
		style: {

                            font: 'normal 10px Arial, sans-serif',

                            color : 'green'

                        }
    },
	
	credits: {
    enabled: false
  },
  
  plotOptions: { column: { dataLabels: { enabled: true }}},
  
  xAxis: { categories: <?php echo $xData;?> },


    series:[
{"name":"Rating","data":<?php echo $xSeries;?>}
]



});
</script>
									</div>
								</div>
							</section>
						</div>
                        
                        <div class="col-lg-6 col-md-12">
							<section class="panel">
								<header class="panel-heading panel-heading-transparent">
									
									<h2 class="panel-title"><?php echo CatsPillar::model()->truncate($stlist['standard_name']);?> | Rating : <?php echo $standardRating['rating'];?> | Score : <?php echo $standardPoint;?></h2>
                                    <h2 class="panel-title">
                                     
									<?php
$this->widget('CStarRating',array(
			'name'=>'standard'.$stlist['standard_id'],
            'value'=>(int)$standardRating['rating'],
			'minRating'=>1,
            'maxRating'=>5,
            'starCount'=>5,
			'titles'=>array(
                '1'=>'Not Recognised: Absen',
                '2'=>'Recognised: No action Initiated',
                '3'=>'Recognised - Action in Planning Process',
                '4'=>'Recognised - Action Initiated',
                '5'=>'Recognised - Action Implemented'
            ),
			'readOnly'=>true,

            ));
?>
</h2>
									
									
								</header>
								<div class="panel-body">
									<div class="table-responsive">
										<div id="containerData<?php echo $stlist['standard_id']; ?>"></div>
      
      <?php
	  
             $cats=CatsCriteria::model()->findAllByAttributes(array('standard_id'=>$stlist['standard_id']));
			 $colum=array();
			 $series=array();
			 $data='<div style="height:400px; overflow-y:auto;">';
foreach($cats as $clist){
	
	$cat=$clist['criteria_id'];
			$assesmentData=SiteCriteriaHistory::model()->findByAttributes(array('criteria_id'=> $clist['criteria_id'],'site_id'=>$model['site_id']));
			$assesment=($assesmentData['assesment']=="")?'panel-danger':'panel-success';
			$rating=(int)$assesmentData['rating'];
			
$data.='<span style="color: black;font-weight:bold"><u>'.CatsPillar::model()->truncate($clist['criteria_name'])."</u></span><br>";
$data.='<br><span style="color: black">Site Assesment</span> : '.substr(preg_replace( "/\r|\n/", "", addslashes($assesmentData['assesment'])),0,60)."..<br>";
$data.='<span style="color: black">Source Base</span> : '.substr(preg_replace( "/\r|\n/", "", addslashes($assesmentData['source_base'])),0,60)."..<br>";
$data.='<span style="color: black;margin-bottom:10px;">Reviewer Comment</span> : '.substr($assesmentData['comment'],0,60)."..<br>";
}
$data.='</div>';


	?>
                                        
                                        
                                        <script>
var chartData<?php echo $stlist['standard_id'];?>=Highcharts.chart('containerData<?php echo $stlist['standard_id'];?>', {

    chart: {
        type: 'bar',
		
    },
	
	yAxis: {
            min: 0,
            max: 5,
            tickInterval: 1,
            title: {
                text: 'Values'

            },
            
        },

    title: {
        text: '<?php echo $model['name_cpa'];?> (Assesment Data)',
		style: {

                            font: 'normal 10px Arial, sans-serif',

                            color : 'green'

                        }
    },
	subtitle: {
        text: '<?php echo $elist['element_name'];?> | <?php echo CatsPillar::model()->truncate($stlist['standard_name']);?>',
		style: {

                            font: 'normal 10px Arial, sans-serif',

                            color : 'green'

                        }
    },
	
	credits: {
    enabled: false
  },
  
  plotOptions: { column: { dataLabels: { enabled: true }}},
  
  xAxis: { categories: <?php echo $xData;?> },


}, function(chart) { // on complete
 
    chart.renderer.text('<?php echo $data;?>', 10, 80)
        .css({
            color: '#4572A7',
            fontSize: '10px',
			overflowY:'auto',
        })
        .add();
    
});
</script>
									</div>
								</div>
							</section>
						</div>
                        
                        
                        <?php } ?>
                        <?php }?>
                        
					</div>
              <div class="row">
		
						<div class="col-lg-12 col-md-12">
                        
                        <div id="buttonrow">
                        <button id="export-png">Export to PNG</button>
	<button id="export-pdf">Export to PDF</button>
 <?php
 $chart = rtrim($chart, ',');
 
 ?>
    <script type="text/javascript">

/**
 * Create a global getSVG method that takes an array of charts as an
 * argument
 */
Highcharts.getSVG = function (charts) {
    var svgArr = [],
        top = 0,
        width = 0;

    Highcharts.each(charts, function (chart) {
        var svg = chart.getSVG(),
            // Get width/height of SVG for export
            svgWidth = +svg.match(
                /^<svg[^>]*width\s*=\s*\"?(\d+)\"?[^>]*>/
            )[1],
            svgHeight = +svg.match(
                /^<svg[^>]*height\s*=\s*\"?(\d+)\"?[^>]*>/
            )[1];

        svg = svg.replace(
            '<svg',
            '<g transform="translate(0,' + top + ')" '
        );
        svg = svg.replace('</svg>', '</g>');

        top += svgHeight;
        width = Math.max(width, svgWidth);

        svgArr.push(svg);
    });

    return '<svg height="' + top + '" width="' + width +
        '" version="1.1" xmlns="http://www.w3.org/2000/svg">' +
        svgArr.join('') + '</svg>';
};

/**
 * Create a global exportCharts method that takes an array of charts as an
 * argument, and exporting options as the second argument
 */
Highcharts.exportCharts = function (charts, options) {

    // Merge the options
    options = Highcharts.merge(Highcharts.getOptions().exporting, options);

    // Post to export server
    Highcharts.post(options.url, {
        filename: options.filename || 'chart',
        type: options.type,
        width: options.width,
        svg: Highcharts.getSVG(charts)
    });
};

$('#export-png').click(function () {
      Highcharts.exportCharts([<?php echo $chart;?>],{scale:20});
});
$('#export-pdf').click(function () {
    Highcharts.exportCharts([<?php echo $chart;?>], {
        type: 'application/pdf',
		scale: 2
    });
});
</script>
</div>
					
               <section class="panel">
									
                                    <?php 
									$sql1="select * FROM site_status_comment where type=2 order by id DESC";
									$comment=SiteStatusComment::model()->findBySql($sql1);
									if(!empty($comment['comment'])){
									?>
                                    <header class="panel-heading">
																
										<h2 class="panel-title">International Committee Comment</h2>
                                        <p><?php echo $comment['comment'];?></p>
									</header>
                                    <?php } ?>
                                    
                                     <?php 
									$sql1="select * FROM site_status_comment where type=1 order by id DESC";
									$comment=SiteStatusComment::model()->findBySql($sql1);
									if(!empty($comment['comment'])){
									?>
                                    <header class="panel-heading">
																
										<h2 class="panel-title">National Committee Comment</h2>
                                         <p><?php echo $comment['comment'];?></p>
									</header>
                                    <?php } ?>
                                    <header class="panel-heading">
																
										<h2 class="panel-title">Submit this site for CA|TS Log approval to national committee</h2>
                                        <p>Once you submit your site for approval; you are not able to do any further assesment </p>
									</header>
									<div class="panel-body">
                                    <?php 
									$checkSite=SiteElementHistory::model()->checkSite($model);
									
									if($checkSite){ ?>
                        <?php if($model->cats_status==1){?>            
                                    
 <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'site-register-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array(
        'enctype'=>'multipart/form-data'
    ),
)); ?>		

									<div class="form-group">
												<div class="col-md-9">
         <?php echo $form->dropDownList($model,'cats_status', array('2'=>'Approved','0'=>'Rejected'), array('class'=>'form-control','empty'=>'--Final Site Assesment Review Status--')); ?>



												</div>
											</div>
						
						<div class="form-group">
                        		<?php echo CHtml::submitButton($assdoc->isNewRecord ? 'Submit Profile' : 'Submit Profile',array('class'=>'mb-xs mt-xs mr-xs btn btn-primary')); ?>

						
                        </div>
											
<?php $this->endWidget(); ?>

<?php }else{?>

<center><p style="color:#060;">CA|TS Log Approval in under process with National Committee.</p></center>

<?php }?>

<?php }else{ ?>
<center><p style="color:#F00;">Please complete all criteria(s) assesment for this site for final submission for CA|TS Log approval to National Committee</p></center>
<?php } ?>
									</div>
								</section>
                            </div>
                            </div>
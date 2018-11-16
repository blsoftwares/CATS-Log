<script src="<?php echo Yii::app()->baseUrl;?>/js/highcharts.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/data.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/exporting.js"></script>
<section role="main" class="content-body" id="print">


					<header class="page-header">
						<h2><?php echo $model['name_cpa'];?></h2>
					
						
					</header>
                    
                    
                    <div class="row">
		
						<div class="col-lg-12 col-md-12">
							<section class="panel">
								<h2><?php echo $model['name_cpa'];?> 
                                
                                (<?php 
								
								echo "Rating ".floor($siteRating['rating']); ?>&nbsp;|&nbsp; Score : <?php echo $sitePoint;?>) </h2>
                                <h2>
                                <?php 
								
$this->widget('CStarRating',array(
			'name'=>'siteRating',
            'value'=>floor($siteRating['rating']),
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
								<div class="panel-body">
									<div class="table-responsive">
										<div id="containerPillar" style="height:300px; margin: 0 auto"></div>
                                              
   <?php 
$eleData=array();
$eleScore=array();
$eleSeries=array();
$pillar=CatsPillar::model()->findAll();
foreach($pillar as $plist)
{
	$pillarData=SitePillarHistory::model()->findByAttributes(array('site_id'=>$model['site_id'],'criteria_id'=>$plist['pillar_id']));
	$prating=floor($pillarData['rating']);
$eleData[]=$plist['pillar_name'];
$eleSeries[]=$prating;
$eleScore[]=CatsPillar::model()->getScoreByCriteria($plist['pillar_id'],$model['site_id']);
}


$xData=json_encode($eleData);
$xSeries=json_encode($eleSeries);
$xScores=json_encode($eleScore);
?>
             
                                    
                                        <script>
Highcharts.chart('containerPillar', {

    chart: {
        type: 'column'
    },

    title: {
        text: '<?php echo $model['name_cpa'];?> :: Pillar Ratings/Scores'
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
		
						<div class="col-lg-12 col-md-12">
							<section class="panel">
								
								<div class="panel-body">
									<div class="table-responsive">
										<div id="containerElement" style="height:300px; margin: 0 auto"></div>
                                              
   <?php 
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
Highcharts.chart('containerElement', {

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
Highcharts.chart('container<?php echo $stlist['standard_id'];?>', {

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
                        <?php } ?>
                        <?php }?>
                        
					</div>
               
               <div class="row">
		
						<div class="col-lg-12 col-md-12">
					
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
																
										<h2 class="panel-title">Submit this site for CA|TS Log approval to International Committee</h2>
									</header>
									<div class="panel-body">
                                    									
                        <?php $checkSite=SiteElementHistory::model()->checkSite($model,3);
									
									if(1){ ?>
                        <?php if($model->cats_status==2){?>            
                                    
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
                        		<?php echo CHtml::Button($assdoc->isNewRecord ? 'Submit Site' : 'Submit Site',array('class'=>'mb-xs mt-xs mr-xs btn btn-primary','data-toggle'=>"modal" ,'data-target'=>"#myModal")); ?>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Are you confirm to submit the site for review to International Committee?</h4>
      </div>
      <div class="modal-body">
        
        
        <div class="form-group">
			<label class="control-label" for="inputDefault">Reviewer Site Status Comment *</label>
												<div class="">
          
<?php echo $form->textArea($siteStatus,'comment',array("class"=>"form-control",'rows'=>3, 'cols'=>50,'required'=>true)); ?>

                                                
                                              
												</div>
											</div>
        
        
        <div class="form-group">
			<label class="control-label" for="inputDefault">National Committee Site Status Comment *</label>
												<div class="">
          
<?php echo $form->textArea($siteStatus,'nc_comment',array("class"=>"form-control",'rows'=>3, 'cols'=>50,'required'=>true)); ?>

                                                
                                              
												</div>
											</div>
                                            
                                             <div class="form-group">
			<label class="control-label" for="inputDefault">Site Assesment Approval Status *</label>
												<div class="">
          
 <?php echo $form->dropDownList($model,'cats_status', array('3'=>'Approved','0'=>'Send Back For Improvement'), array('class'=>'form-control','empty'=>'--Final Approval Status--','required'=>true)); ?>
                                                
                                              
												</div>
											</div>
                                            
                                            
        <p>Please enter estimated review date for National Committee by before data unchanged</p>
        <div class="form-group">
         <div class="col-md-4">
         <?php
		 $this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'model'=>$model,
	'name'=>'endadate',
	
    // additional javascript options for the date picker plugin
    'options'=>array(
	'minDate'=>+5,
        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
		'dateFormat'=>'d-mm-yy',
    ),
    'htmlOptions'=>array(
        'style'=>'background-color:green;color:white;',
		'class'=>'form-control',
		'required'=>true,
		'readonly'=>true,
    ),
));
		 ?>
       
        </div>
        </div>
      </div>
      <div class="modal-footer">
          <?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save',array('class'=>"mb-xs mt-xs mr-xs btn btn-primary",'onclick'=>"this.disabled=true;this.value='Saving data. Please wait....';this.form.submit();")); ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- End Modal-->


						
                        </div>
											
<?php $this->endWidget(); ?>



<?php }else{?>

 <?php
  
  if(date('d-m-Y',strtotime($pdates['actiondate']))>date('d-m-Y')){?>
							<center>											
						
                      
                       <div class="form-group col-md-6">
                              
                                  <form method="post" action="<?php echo Yii::app()->createUrl('national/ebook');?>">
                                  
                                   <input type="hidden" name="site_code" value="<?php echo $model->site_id;?>" />
                                  <input type="submit" value="Download E-Book" />
                                  </form>
                        </div>
                        
						<div class="form-group col-md-6">
                                <form method="post" action="<?php echo Yii::app()->createUrl('national/backup');?>">
                                  <input type="hidden" name="backup" value="download" />
                                   <input type="hidden" name="sitecode" value="<?php echo $model->site_id;?>" />
                                  <input type="submit" value="Download Backup" />
                                  </form>
                             </div>

                    </center>
                    
                    <div class="clearfix"></div>
                    
                    <?php } ?>


<?php } ?>

<?php }else{?>
<center><p style="color:#F00;">Please complete Review and Rating on each criteria's assesment in order to submit the site to National Committee</p></center>
<?php } ?>
<?php if($model->cats_status==3){?>            
<center><p style="color:#060;">CA|TS Log approval is in process  to International Committee .</p></center>
<?php }?>
 <?php if($model->cats_status==4){?>            
<center><p style="color:#060;">Site is CA|TS Log certified by International Committee .</p></center>

<?php }?>

									</div>
								</section>
                            </div>
                            </div>
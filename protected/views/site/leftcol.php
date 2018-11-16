
			<div class="column column-narrow">

				<div class="widget-gold widget wpzoom-custom-menu" id="wpzoom-menu-widget-2"><p class="title">Courses</p><div class="menu-start-container">
                <ul id="menu-start" class="menu">
                <?php $course=Courses::model()->findAll(); 
				foreach($course as $list){
				?>
                <li class="menu-item ">&raquo; <a href="#"><?php echo $list['course_name'];?></a></li>

<?php }?>
</ul>
</div>
<div class="cleaner">&nbsp;</div></div>
<div class="widget zoom-social-icons-widget well">
	
			
            <p><img src="<?php echo Yii::app()->baseUrl;?>/images/msme.jpg" class="img-rounded img-thumbnail  img-responsive" alt="Cinque Terre"></p>


		<div class="cleaner">&nbsp;</div>
        </div>				
        <div class="cleaner">&nbsp;</div>

			</div><!-- end .column .column-narrow -->
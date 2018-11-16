<?php if(isset(Yii::app()->user->type) && Yii::app()->user->type==2){ ?>
<li class="nav-active">
<a href="<?php echo Yii::app()->createUrl('site/results');?>">
<span>Results</span>
</a>
</li>
<li class="nav-active">
<a href="<?php echo Yii::app()->createUrl('site/profile');?>">
<span>Student Profile</span>
</a>
</li>
<?php }?>
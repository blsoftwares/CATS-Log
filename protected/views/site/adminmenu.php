<?php if(isset(Yii::app()->user->type) && Yii::app()->user->type==1){ ?>
<li class="nav-active">
<a href="<?php echo Yii::app()->createUrl('site/students');?>">
<span>Enrolment List</span>
</a>
</li>
<?php }?>


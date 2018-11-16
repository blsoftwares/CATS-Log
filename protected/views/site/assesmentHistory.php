<?php

$data='<table class="table table-responsive table-bordered table-striped table-condensed mb-none ">
<tr>
<th>Assessment By</th>
<th>Evidence Base</th>
<th>Evidence Details/References/URL(s)</th>
<th>Updated On</th>
</tr>';

$sql="SELECT site_level FROM site_criteria_version WHERE site_id='".$site_id."' and criteria_id='".$criteria_id."' group by site_level order by site_level DESC";
$level=SiteCriteriaVersion::model()->findAllBySql($sql);
foreach($level as $list)
{
$sql="SELECT * FROM site_criteria_version WHERE site_id='".$site_id."' and criteria_id='".$criteria_id."' and site_level='".$list['site_level']."' order by usertype DESC";
$version=SiteCriteriaVersion::model()->findAllBySql($sql);
foreach($version as $vlist)
{
	if($vlist['usertype']==5)
	$user=SiteRegister::model()->getNameTypeById($vlist['ratingby']);
	else
	$user=UserLogin::model()->getNameTypeById($vlist['ratingby']);
	
$data.='
<tr>
<td>'.$user.'</td>
<td>'.$vlist['assesment'].'</td>
<td>'.$vlist['source_base'].'</td>
<td>'.$vlist['updatedon'].'</td>
</tr>';
 }
}
 $data.='</table>';
echo $data;
?>
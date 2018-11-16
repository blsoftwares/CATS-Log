<?php

$rowLabels=array();
$data =array();
$score =array();

foreach($criteriaData as $clist){
	$name=SiteCriteriaHistory::model()->findByAttributes(array('criteria_id'=>$clist['criteria_id'],'site_id'=>$sitelist['site_id']));
$content=CatsPillar::model()->getNameByHeading($clist['criteria_name']);
array_push($rowLabels, $content['head']);
array_push($data, (int)$name['rating']);
array_push($score, $name['points']);

}

foreach ($rowLabels as $key => $level)
       foreach ($data as $k =>$attribute)
             $variables[$level][] = $attribute . '_' . $level; // changed $variables[] to $variables[$level][]
      
	
$data = array_combine ( $rowLabels , $data );

$scoredata = array_combine ( $rowLabels , $score );
//Bar diagram
$pdf->SetFont('Arial', 'BIU', 12);

$pdf->Ln(8);
$valX = $pdf->GetX();
$valY = $pdf->GetY();
$pdf->BarDiagram(100, 70, $data, '%l', array(149, 206, 255),5,5);

$pdf->BarDiagramScore(100, 70, $scoredata, '%l', array(149, 206, 255),1,1,$valY);
//$pdf->SetXY($valX, $valY + 80);

$pdf->Ln( 35 );
?>
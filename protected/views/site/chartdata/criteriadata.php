<?php
foreach($criteriaData as $clist){
	$name=SiteCriteriaHistory::model()->findByAttributes(array('criteria_id'=>$clist['criteria_id'],'site_id'=>$sitelist['site_id']));

$content=CatsPillar::model()->getNameByHeading($clist['criteria_name']);
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write(6, $content['head']);
$pdf->Ln( 10 );
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write(6, $content['text']);
$pdf->Ln( 10 );

/**
  Create Assesment Data
**/

// Assesment
  $pdf->SetFont( 'Arial', 'B', 12 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->Write(6, "Field Assesment: ");
   $pdf->SetFont( 'Arial', '', 10 );
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->Write(6, preg_replace("/\s|&nbsp;|&amp;/",' ',strip_tags($name['assesment'])));
  
  // Assesment Source
  $pdf->Ln( 10 );
  $pdf->SetFont( 'Arial', 'B', 12 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->Write(6, "Field Assesment Source / References / URL(s): ");
   $pdf->SetFont( 'Arial', '', 10 );
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->Write(6, preg_replace("/\s|&nbsp;|&amp;/",' ',strip_tags($name['source_base'])));
  
   
  // Assesment Documents
  $pdf->Ln( 10 );
  $pdf->SetFont( 'Arial', 'B', 12 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->Write(6, "Field Assesment Document(s): ");
   $pdf->SetFont( 'Arial', '', 10 );
   
   $documents=SiteAssesmentDocument::model()->findByAttributes(array('criteria_id'=>$clist['criteria_id'],'site_id'=>$sitelist['site_id']));
  $files='';
  if(empty($documents))
  {
	  
	  $files= 'No document(s) uploaded';
  $pdf->SetFont( 'Arial', 'I', 10 );
  
  }
  else
  {
  for($i=1;$i<=5;$i++){
  if($documents['file'.$i]!="")
  $files.=$documents['filename'.$i].", ";
  }
  $files=rtrim($files,', ');
  $pdf->SetFont( 'Arial', '', 10 );
  
  }
   
  
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->Write(6, $files);
  
  
  // Auditor Comment
  $pdf->Ln( 10 );
  $pdf->SetFont( 'Arial', 'B', 12 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->Write(6, "Reviewer Comment: ");
  
  $comment=SiteCriteriaHistory::model()->checkEmptyRemoveHtml($name['ad_comment']);
  if($comment['value']==1)
  {
  $pdf->SetFont( 'Arial', '', 10 );
  }
  else
  {
	  $pdf->SetFont( 'Arial', 'I', 10 );
  }
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->Write(6, $comment['text']);
  
  // National Committee Comment
  $pdf->Ln( 10 );
  $pdf->SetFont( 'Arial', 'B', 12 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->Write(6, "National Committee Comment: ");
  
  $comment=SiteCriteriaHistory::model()->checkEmptyRemoveHtml($name['nc_comment']);
  if($comment['value']==1)
  {
  $pdf->SetFont( 'Arial', '', 10 );
  }
  else
  {
	  $pdf->SetFont( 'Arial', 'I', 10 );
  }
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->Write(6, $comment['text']);
  
  // International Committee Comment
  $pdf->Ln( 10 );
  $pdf->SetFont( 'Arial', 'B', 12 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->Write(6, "International Committee Comment: ");
   $comment=SiteCriteriaHistory::model()->checkEmptyRemoveHtml($name['ic_comment']);
  if($comment['value']==1)
  {
  $pdf->SetFont( 'Arial', '', 10 );
  }
  else
  {
	  $pdf->SetFont( 'Arial', 'I', 10 );
  }
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->Write(6, $comment['text']);
	$pdf->Ln( 15 );
	
}




?>
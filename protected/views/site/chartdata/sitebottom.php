<?php
$pdf->AddPage();
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Cell( 0, 15, $sitelist['name_cpa'], 0, 0, 'C' );
$pdf->SetFont( 'Arial', '', 12 );
$pdf->Ln( 10 );
$pdf->Cell( 0, 15, "Consolidated Comments/Ratings", 0, 0, 'C' );

$pdf->Ln( 20 );


$comment=SiteStatusComment::model()->findByAttributes(array('site_id'=>$sitelist['site_id']),array('order'=>'id DESC'));
$rating=SiteRatingVersion::model()->findByAttributes(array('site_id'=>$sitelist['site_id'],'usertype'=>4));
/*1*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "Reviewer Comment: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, " ".$comment['comment']);
$pdf->Ln( 10 ); 

/*1*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "Reviewer Rating: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, " ".(int)$rating['rating']);
$pdf->Ln( 10 ); 
$pdf->Ln( 10 ); 

/*2*/
$rating=SiteRatingVersion::model()->findByAttributes(array('site_id'=>$sitelist['site_id'],'usertype'=>3));
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "National Committee Comment: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, " ".$comment['nc_comment']);
$pdf->Ln( 10 ); 

/*2*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12);
$pdf->Write( 6, "National Committee Rating: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, " ".(int)$rating['rating']);
$pdf->Ln( 10 ); 
$pdf->Ln( 10 ); 

/*3*/
$rating=SiteRatingVersion::model()->findByAttributes(array('site_id'=>$sitelist['site_id'],'usertype'=>2));
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12);
$pdf->Write( 6, "International Committee Comment: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, " ".$comment['ic_comment']);
$pdf->Ln( 10 ); 

/*3*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "International Committee Rating: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, " ".(int)$rating['rating']);
$pdf->Ln( 10 ); 

?>
<?php echo $this->renderPartial('/site/chartdata/siteprogressdate',array('pdf'=>$pdf,'sitelist'=>$sitelist,'headerColour'=>$headerColour,'textColour'=>$textColour));?>
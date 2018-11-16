<?php
/*Table Variables*/
$tableHeaderTopTextColour = array( 255, 255, 255 );
			$tableHeaderTopFillColour = array( 125, 152, 179 );
			$tableHeaderTopProductTextColour = array( 0, 0, 0 );
			$tableHeaderTopProductFillColour = array( 143, 173, 204 );
			$tableHeaderLeftTextColour = array( 99, 42, 57 );
			$tableHeaderLeftFillColour = array( 184, 207, 229 );
			$tableBorderColour = array( 50, 50, 50 );
			$tableRowFillColour = array( 213, 170, 170 );
$columnLabels = array( "Start Date", "Submission Date", "Next Action Date");

$pdf->AddPage();




$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Cell( 0, 15, $sitelist['name_cpa'], 0, 0, 'C' );
$pdf->SetFont( 'Arial', '', 12 );
$pdf->Ln( 10 );
$pdf->Cell( 0, 15, "Estimated Site Progress  Dates", 0, 0, 'C' );

$pdf->Ln( 20 );



/* Create the table header row */
$pdf->SetFont( 'Arial', 'B', 12 );

// "PRODUCT" cell
$pdf->SetTextColor( $tableHeaderTopTextColour[0], $tableHeaderTopTextColour[1], $tableHeaderTopTextColour[2] );
$pdf->SetFillColor( $tableHeaderTopFillColour[0], $tableHeaderTopFillColour[1], $tableHeaderTopFillColour[2] );
$pdf->Cell( 55, 12, "CATS User Profile", 1, 0, 'L', true );

// Remaining header cells
$pdf->SetTextColor( $tableHeaderTopTextColour[0], $tableHeaderTopTextColour[1], $tableHeaderTopTextColour[2] );
$pdf->SetFillColor( $tableHeaderTopFillColour[0], $tableHeaderTopFillColour[1], $tableHeaderTopFillColour[2] );

for ( $i=0; $i<count($columnLabels); $i++ ) {
  $pdf->Cell( 45, 12, $columnLabels[$i], 1, 0, 'C', true );
}

$pdf->Ln( 12 );
$dates=SiteProgressDates::model()->findByAttributes(array('site_id'=>$sitelist['site_id'],'usertype'=>5));
// SM Create the left header cell
  $pdf->SetFont( 'Arial', '', 12 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->SetFillColor( $tableHeaderLeftFillColour[0], $tableHeaderLeftFillColour[1], $tableHeaderLeftFillColour[2] );
  $pdf->Cell( 55, 12, " Site Manager", 1, 0, 'L', true );

  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
  $pdf->SetFont( 'Arial', '', 12 );
  
  $pdf->Cell( 45, 12, ( '' . UserLogin::model()->dateFormat($dates['startdate'])), 1, 0, 'C', true );
  
  // Create the data cells
  
  $pdf->Cell( 45, 12, ( '' . UserLogin::model()->dateFormat($dates['enddate']) ), 1, 0, 'C', true );
  
  
   $pdf->Cell( 45, 12, ( '' . UserLogin::model()->dateFormat($dates['actiondate']) ), 1, 0, 'C', true );
  $pdf->Ln( 12 );
  
// Reviewer Create the left header cell

$dates=SiteProgressDates::model()->findByAttributes(array('site_id'=>$sitelist['site_id'],'usertype'=>4));

  $pdf->SetFont( 'Arial', '', 12 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->SetFillColor( $tableHeaderLeftFillColour[0], $tableHeaderLeftFillColour[1], $tableHeaderLeftFillColour[2] );
  $pdf->Cell( 55, 12, " Site Reviewer", 1, 0, 'L', true );

  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
  $pdf->SetFont( 'Arial', '', 12 );
  
  $pdf->Cell( 45, 12, ( '' . UserLogin::model()->dateFormat($dates['startdate'])), 1, 0, 'C', true );
  
  // Create the data cells
  
  $pdf->Cell( 45, 12, ( '' . UserLogin::model()->dateFormat($dates['enddate']) ), 1, 0, 'C', true );
  
  
   $pdf->Cell( 45, 12, ( '' . UserLogin::model()->dateFormat($dates['actiondate']) ), 1, 0, 'C', true );
  
 $pdf->Ln( 12 );
  
// NC Create the left header cell
$dates=SiteProgressDates::model()->findByAttributes(array('site_id'=>$sitelist['site_id'],'usertype'=>3));

  $pdf->SetFont( 'Arial', '', 12 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->SetFillColor( $tableHeaderLeftFillColour[0], $tableHeaderLeftFillColour[1], $tableHeaderLeftFillColour[2] );
  $pdf->Cell( 55, 12, " National Committee", 1, 0, 'L', true );

  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
  $pdf->SetFont( 'Arial', '', 12 );
  
 $pdf->Cell( 45, 12, ( '' . UserLogin::model()->dateFormat($dates['startdate'])), 1, 0, 'C', true );
  
  // Create the data cells
  
  $pdf->Cell( 45, 12, ( '' . UserLogin::model()->dateFormat($dates['enddate']) ), 1, 0, 'C', true );
  
  
   $pdf->Cell( 45, 12, ( '' . UserLogin::model()->dateFormat($dates['actiondate']) ), 1, 0, 'C', true );
  $pdf->Ln( 12 );
  
  
// IC Create the left header cell

$dates=SiteProgressDates::model()->findByAttributes(array('site_id'=>$sitelist['site_id'],'usertype'=>2));

  $pdf->SetFont( 'Arial', '', 12 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->SetFillColor( $tableHeaderLeftFillColour[0], $tableHeaderLeftFillColour[1], $tableHeaderLeftFillColour[2] );
  $pdf->Cell( 55, 12, " International Committee", 1, 0, 'L', true );

  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
  $pdf->SetFont( 'Arial', '', 12 );
  
  $pdf->Cell( 45, 12, ( '' . UserLogin::model()->dateFormat($dates['startdate'])), 1, 0, 'C', true );
  
  // Create the data cells
  
  $pdf->Cell( 45, 12, ( '' . UserLogin::model()->dateFormat($dates['enddate']) ), 1, 0, 'C', true );
  
  
   $pdf->Cell( 45, 12, ( '' . UserLogin::model()->dateFormat($dates['actiondate']) ), 1, 0, 'C', true );
  
  $pdf->Ln( 12 );

/*End Table*/

?>
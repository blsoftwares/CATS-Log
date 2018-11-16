<?php
$pdf->AddPage();
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 14 );
$pdf->Cell( 0, 15, "Table of Contents", 0, 0, 'C' );
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 14 );

$pdf->Ln( 20 );

/*Table Variables*/
$tableHeaderTopTextColour = array( 255, 255, 255 );
			$tableHeaderTopFillColour = array( 125, 152, 179 );
			$tableHeaderTopProductTextColour = array( 0, 0, 0 );
			$tableHeaderTopProductFillColour = array( 143, 173, 204 );
			$tableHeaderLeftTextColour = array( 99, 42, 57 );
			$tableHeaderLeftFillColour = array( 184, 207, 229 );
			$tableBorderColour = array( 50, 50, 50 );
			$tableRowFillColour = array( 255, 255, 255 );
$columnLabels = array( "Contents","Page No.");

/* Create the table header row */
$pdf->SetFont( 'Arial', 'B', 14 );

// "PRODUCT" cell
$pdf->SetTextColor( $tableHeaderTopTextColour[0], $tableHeaderTopTextColour[1], $tableHeaderTopTextColour[2] );
$pdf->SetFillColor( $tableHeaderTopFillColour[0], $tableHeaderTopFillColour[1], $tableHeaderTopFillColour[2] );
$pdf->Cell( 20, 8, "S. No.", 1, 0, 'C', true );

// Remaining header cells
$pdf->SetTextColor( $tableHeaderTopTextColour[0], $tableHeaderTopTextColour[1], $tableHeaderTopTextColour[2] );
$pdf->SetFillColor( $tableHeaderTopFillColour[0], $tableHeaderTopFillColour[1], $tableHeaderTopFillColour[2] );

$pdf->Cell( 140, 8, "Content", 1, 0, 'C', true );
$pdf->Cell( 30, 8, "Page No.", 1, 0, 'C', true );
  $pdf->Ln( 8 );
  
  //Cats Info criteria indexing
  $pdf->SetFont( 'Arial', '', 11 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->SetFillColor( $tableHeaderLeftFillColour[0], $tableHeaderLeftFillColour[1], $tableHeaderLeftFillColour[2] );
  $pdf->Cell( 20, 8, " 1", 1, 0, 'C', true );

  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
  $pdf->SetFont( 'Arial', '', 11 );
  
  $pdf->Cell( 140, 8, ( ' CA|TS Log - Log  - Introduction  '), 1, 0, 'L', true );
  
  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
  $pdf->SetFont( 'Arial', '', 11 );
  
  $pdf->Cell( 30, 8, ' 10', 1, 0, 'C', true );
  $pdf->Ln( 8 );
  
  
  //SiteInfo indexing
  $pdf->SetFont( 'Arial', '', 11 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->SetFillColor( $tableHeaderLeftFillColour[0], $tableHeaderLeftFillColour[1], $tableHeaderLeftFillColour[2] );
  $pdf->Cell( 20, 8, " 2", 1, 0, 'C', true );

  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
   $pdf->SetFont( 'Arial', '', 11 );
  
  $pdf->Cell( 140, 8, ( ' Site - Information  '), 1, 0, 'L', true );
  
  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
  $pdf->SetFont( 'Arial', '', 11 );
  
  $pdf->Cell( 30, 8, ' 14', 1, 0, 'C', true );
  $pdf->Ln( 8 );
  
  //Pillar criteria indexing
 $pdf->SetFont( 'Arial', '', 11 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->SetFillColor( $tableHeaderLeftFillColour[0], $tableHeaderLeftFillColour[1], $tableHeaderLeftFillColour[2] );
  $pdf->Cell( 20, 8, " 3", 1, 0, 'C', true );

  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
  $pdf->SetFont( 'Arial', '', 11 );
  
  $pdf->Cell( 140, 8, ( ' Site Assesment Chart - Pillar '), 1, 0, 'L', true );
  
  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
   $pdf->SetFont( 'Arial', '', 11 );
  
  $pdf->Cell( 30, 8, ' 17', 1, 0, 'C', true );
  $pdf->Ln( 8 );
  
  
  //Element indexing
   $pdf->SetFont( 'Arial', '', 11 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->SetFillColor( $tableHeaderLeftFillColour[0], $tableHeaderLeftFillColour[1], $tableHeaderLeftFillColour[2] );
  $pdf->Cell( 20, 8, " 4", 1, 0, 'C', true );

  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
  $pdf->SetFont( 'Arial', '', 11 );
  
  $pdf->Cell( 140, 8, ( ' Site Assesment Chart - Element  '), 1, 0, 'L', true );
  
  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
   $pdf->SetFont( 'Arial', '', 11 );
  
  $pdf->Cell( 30, 8, ' 18', 1, 0, 'C', true );
  $pdf->Ln( 8 );
  
  
  
$i=5;
$page=19;
$standard=CatsStandard::model()->findAll();
foreach($standard as $slist)
{
	$stn=explode(":",$slist['standard_name']);
	$stname=$stn[0];
	//standard criteria indexing
  $pdf->SetFont( 'Arial', '', 11 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->SetFillColor( $tableHeaderLeftFillColour[0], $tableHeaderLeftFillColour[1], $tableHeaderLeftFillColour[2] );
  $pdf->Cell( 20, 8, " ".$i, 1, 0, 'C', true );

  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
  $pdf->SetFont( 'Arial', '', 11 );
  
  $pdf->Cell( 140, 8, ( ' Standard Chart -  ' .  $stname), 1, 0, 'L', true );
  
  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
   $pdf->SetFont( 'Arial', '', 11 );
  
  $pdf->Cell( 30, 8, ' ' . $page, 1, 0, 'C', true );
  $pdf->Ln( 8 );
	
	
	$criteria=CatsCriteria::model()->findAllByAttributes(array('standard_id'=>$slist['standard_id']));
	foreach($criteria as $clist)
{
	$cnm=explode(":",$clist['criteria_name']);
	$crname=$cnm[0];
	$page=$page+1;
	$i=$i+1;
		// SM Create the left header cell
  $pdf->SetFont( 'Arial', '', 11 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->SetFillColor( $tableHeaderLeftFillColour[0], $tableHeaderLeftFillColour[1], $tableHeaderLeftFillColour[2] );
  $pdf->Cell( 20, 8, " ".$i, 1, 0, 'C', true );

  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
   $pdf->SetFont( 'Arial', '', 11 );
  
  $pdf->Cell( 140, 8, ( ' Criteria Assesment Data -  ' .$crname  ), 1, 0, 'L', true );
  
  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
   $pdf->SetFont( 'Arial', '', 11 );
  
  $pdf->Cell( 30, 8, ' ' . $page, 1, 0, 'C', true );
  $pdf->Ln( 8 );
	



}
$page=$page+1;
	$i=$i+1;

}

//standard criteria indexing
  $pdf->SetFont( 'Arial', '', 11 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->SetFillColor( $tableHeaderLeftFillColour[0], $tableHeaderLeftFillColour[1], $tableHeaderLeftFillColour[2] );
  $pdf->Cell( 20, 8, " ".$i, 1, 0, 'C', true );

  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
  $pdf->SetFont( 'Arial', '', 11 );
  
  
  
  $pdf->Cell( 140, 8, ( 'Consolidated Comments/Ratings  '), 1, 0, 'L', true );
  
  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
   $pdf->SetFont( 'Arial', '', 11 );
  
  $pdf->Cell( 30, 8, ' '.$page, 1, 0, 'C', true );
  $pdf->Ln( 8 );
  
  $i=$i+1;
  //Progress Dates indexing
   $pdf->SetFont( 'Arial', '', 11 );
  $pdf->SetTextColor( $tableHeaderLeftTextColour[0], $tableHeaderLeftTextColour[1], $tableHeaderLeftTextColour[2] );
  $pdf->SetFillColor( $tableHeaderLeftFillColour[0], $tableHeaderLeftFillColour[1], $tableHeaderLeftFillColour[2] );
  $pdf->Cell( 20, 8, " ".$i, 1, 0, 'C', true );

  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
  $pdf->SetFont( 'Arial', '', 11 );
  
  $pdf->Cell( 140, 8, ( 'Site Progress dates '), 1, 0, 'L', true );
  
  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
   $pdf->SetFont( 'Arial', '', 11 );
  
  $pdf->Cell( 30, 8, ' {nb}', 1, 0, 'C', true );
  $pdf->Ln( 8 );

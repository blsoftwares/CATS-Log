<?php
$pdf->AddPage();
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Cell( 0, 15, $sitelist['name_cpa'], 0, 0, 'C' );
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 12 );
$pdf->Ln( 10 );
$pdf->Cell( 0, 15, "Introduction", 0, 0, 'C' );

$pdf->Ln( 20 );

/*1*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "1. Name of the conservation / protected area: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['name_cpa']);
$pdf->Ln( 10 ); 

/*2*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "2.	Country: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['site_country']);
$pdf->Ln( 10 ); 

/*3*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "3.	Date of establishment of the conservation / protected area: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['doe_cpa']);
$pdf->Ln( 10 ); 

/*4*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "4.	Location [GPS coordinates]: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['location1'].", ".$sitelist['location2']);
$pdf->Ln( 10 ); 

/*5*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "5.	IUCN protected area management category: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['iucn_cat']);
$pdf->Ln( 10 ); 

/*6*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "6.	WDPA ID number (see www.protectedplanet.org):");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['wdpa_id']);
$pdf->Ln( 10 ); 

/*7*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "7.	Name and affiliation of the person responsible for registering for CA|TS Log: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['affiliation']);
$pdf->Ln( 10 ); 

/*8*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "8.	Contact details (address, email, phone etc): ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['address']);
$pdf->Ln( 10 ); 

/*9*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "9.	Is there a project or partner working with the conservation / protected area on CA|TS Log? (please provide details): ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['partner_cats']);
$pdf->Ln( 10 ); 

/*10*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "10. CA|TS Log is aimed at conservation / protected areas which have tiger conservation as a target and value. Please provide brief answers (maximum 100 words) to the following questions: "); 
$pdf->Ln( 10 ); 

/*10 a*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "10.a. What are the objectives of the conservation / protected area? : ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['objective']);
$pdf->Ln( 10 ); 

/*10 b*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "10.b. What is the area (in km2)? : ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['cats_area']);
$pdf->Ln( 10 ); 

/*10 c*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "10.c. Give details (or provide maps) of management zones (e.g. core, buffer, tourism, community use), adjoining protected areas and/or zones which are also habitat for tigers: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['mgm_zone_details']);
$pdf->Ln( 10 ); 

/*11*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "11. The basic information source to determine the justification for a CA|TS Log assessment is an existing site-level management effectiveness evaluation (MEE) e.g. METT, Indian MME TR, Enhancing our Heritage: ");
$pdf->Ln( 10 ); 

/*11a*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "11.a. Which MEE system/s have been used in the conservation / protected area and when?: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['mee_system']);
$pdf->Ln( 10 ); 

/*11b*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12);
$pdf->Write( 6, "11.b. Please attached or provide link to download the MEE report(s): ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['mee_report_link']);
$pdf->Ln( 10 ); 

/*12*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "12. If tigers are present in the conservation areas. Please provide brief answers (maximum 100 words) to the following questions: ");
$pdf->Ln( 10 ); 

/*12a*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "12.a. What is the estimated current tiger population and/or tiger density (e.g. number of tigers per 100km2)?: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10);
$pdf->Write( 6, $sitelist['tiger_population']);
$pdf->Ln( 10 ); 


/*12b*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "12.b. Is there evidence of breeding in the last five years?: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['breeding']);
$pdf->Ln( 10 ); 


/*12c*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "12.c. Is the population trend stable, increasing or decreasing?: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['population_trend']);
$pdf->Ln( 10 ); 

/*13*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "13. For sites which currently do not have viable tiger populations. Please provide brief answers (maximum 100 words) to the following questions: ");
$pdf->Ln( 10 ); 

/*13a*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "13.a. Why is the area considered suitable to restore a viable tiger population?: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['area_suitable']);
$pdf->Ln( 10 ); 


/*13b*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "13.b. What actions are being taken to restore tiger populations (please provide plan)?: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['actions_taken']);
$pdf->Ln( 10 ); 


/*14*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "14. What is the total number of staff on the area?: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['staff_total']);
$pdf->Ln( 10 ); 


/*15*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "15. How many staff engaged in protection?: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, $sitelist['staff_protection']);
$pdf->Ln( 10 ); 


/*16*/
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "16. What is the annual budget of the area? (USD): ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10);
$pdf->Write( 6, $sitelist['annual_budget']);
$pdf->Ln( 10 ); 



?>
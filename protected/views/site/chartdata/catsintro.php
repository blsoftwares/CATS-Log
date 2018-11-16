<?php //echo $this->renderPartial('chartdata/indexpage',array('pdf'=>$pdf,'headerColour'=>$headerColour,'textColour'=>$textColour));?>
<?php
$pdf->AddPage();
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Cell( 0, 15, "Conservation Assured | Tiger Standards (CA|TS Log)", 0, 0, 'C' );
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 12 );
$pdf->Ln( 10 );
$pdf->Cell( 0, 15, "Introduction", 0, 0, 'C' );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Ln( 20 );
$pdf->Write( 6, "Conservation Assured (CA) is a new conservation tool to set minimum standards for effective management of target species. CA fulfils ls the requirement for protected area management effectiveness in international agreements such as the Convention on Biological Diversity’s (CBD) Programme of Work on Protected Areas and will help national governments, and their partners in conservation, to meet the CBD’s Strategic Plan for Biodiversity. CA is also linked to and partnered in the development of IUCN’s Green List of Protected Areas, an initiative to encourage, measure and share the success of protected areas in reaching good standards of management. ");
$pdf->Ln( 10 ); 

$pdf->Write( 6, "The first species-specific CA standards are for the tiger (Panthera tigris). At present few tiger conservation areas are truly effective refuges for tigers and this has contributed to a catastrophic decline in their numbers over the last decade, despite major investment in their conservation. Tigers have already disappeared from several protected areas where they were until recently regarded as secure. The globally accepted goal of doubling the number of wild tigers by 2022 will not be achieved without a significant increase in the effectiveness of the tiger conservation areas across the remaining tiger range countries. ");
$pdf->Ln( 10 );

$pdf->Write( 6, "The Conservation Assured | Tiger Standards (in short... CA|TS Log) scheme provides an incentive to those responsible for tiger conservation areas in the 13 tiger range countries to improve the effectiveness of management. ");
$pdf->Ln( 10 );

$pdf->Write( 6, "CA|TS Log is a set of 7 pillars and 17 minimum elements with associated standards and criteria for effective management of tiger conservation areas. It is not a new management effectiveness system or a ranking of tiger conservation areas; but rather provides the means to tell if a particular area attains the minimum standards needed to conserve tigers. Tiger conservation areas taking part in the system will be recorded as either Registered (but standard not yet attained) or as Approved (achieving the standards as verified through an assessment and independent review process); excellence would be expressed in terms of highlighting specific best practices. Whether tiger conservation areas meet the criteria is based on a process which starts with self-assessment, progresses through a system of national assessment and is finally approved by an international committee, which ensures equivalence across tiger range countries. ");
$pdf->Ln( 10 );

$pdf->Write( 6, "CA|TS Log provides an opportunity for individual tiger conservation areas or networks of areas to demonstrate their commitment to, and success in, protecting tigers. It is a voluntary, independent scheme for any area involved in tiger conservation. ");
$pdf->Ln( 10 );

$pdf->Write( 6, "CA|TS Log has been extensively field-tested and subjected to expert peer review. It is expected that the CA|TS Log will be reviewed every few years as best practice standards evolve and are refined.");
$pdf->Ln( 10 );


$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "Mission: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, "Securing safe havens for wild tigers ");
$pdf->Ln( 10 );

$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "Vision: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, "Wild tigers have spaces to live and breed safe from threat resulting in increased populations and recovery of range");
$pdf->Ln( 10 );

$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "Goals: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, "Adoption and implementation of CA|TS Log Standards ensures tiger habitats are effectively conserved, well-managed and ecologically connected to maintain, secure and recover viable populations");
$pdf->Ln(10 );

$pdf->Write( 6, "CA|TS Log demonstrates and promotes best practice in protected area management in Asia");
$pdf->Ln( 10 );
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12);
$pdf->Write( 6, "CA|TS Log Setup and Functioning");
$pdf->Ln( 10 );
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, "The CA|TS Log is a collective representation of tiger range governments, inter-governmental agencies, institutions, NGOs and conservation areas. This together forms the CA|TS Log Partnership. The governance structure of the Partnership includes; the CA|TS Log Council, the Executive Committee, the National Committee, the Support Group and the Management Team. ");
$pdf->Ln( 10 );

$pdf->Write( 6, "1.	The CA|TS Log Council: made up of the Chairs or appointed representatives of the NCs who run CA|TS Log at the national level");
$pdf->Ln( 10 );
$pdf->Write( 6, "2.	The Executive Committee: to ensure quality and equivalence of the CA|TS Log process; both of the CA|TS Log standard as a means of measuring the performance of a TCA as a secure haven for wild tigers and the quality of the submissions made by TCAs seeking to be CA|TS Log Approved,");
$pdf->Ln( 10 );
$pdf->Write( 6, "3.	The National / Provincial Committee: established in each TRC and are responsible for ensuring quality and effective execution of CA|TS Log. They are responsible for promoting CA|TS Log in their jurisdiction and overseeing TCA participation including reviewing TCA Registrations and Approval Dossier submissions before recommending them to the International Executive Committee for approval),");
$pdf->Ln( 10 );
$pdf->Write( 6, "4.	The Support Group: made up of international NGOs, institutions, intergovernmental organisations, non-Tiger Range Governments and donor organisations whose role is to support, promote and implement CA|TS Log and to working closely with government agencies responsible for tiger conservation and ");
$pdf->Ln( 10 );
$pdf->Write( 6, "5.	The Management Team: supports the work of the whole CA|TS Log Partnership and acts as the Secretariat for the International Executive Committee. It is responsible for the day-to-day management of CA|TS Log including communications and training to TRCs, NCs, the Support Group and TCAs and initiating and managing the portfolio of CA|TS Log activities (registration, self-assessments, action plans, execution programmes, approvals). ");
$pdf->Ln( 10 );

$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->SetLeftMargin(10);
$pdf->Write( 6, "Why implement CA|TS Log?");
$pdf->Ln( 10 );

$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );

$pdf->Write( 6, " * For a national protected areas system: to help set a baseline and facilitate adaptive management and continual improvement of performance.");
$pdf->Ln( 10 );

$pdf->Write( 6, " * For a protected area manager: to demonstrate the importance and role of protected areas in the global effort to double the number of tigers");
$pdf->Ln( 10 );

$pdf->Write( 6, " * For a tiger conservation area manager: to help mobilize the support needed to provide the necessary resources and capacity to be effective in tiger conservation");
$pdf->Ln( 10 );

$pdf->Write( 6, " * For protected area rangers: to provide a clear indication of high professional standards, improve career prospects and boost morale");
$pdf->Ln( 10 );

$pdf->Write( 6, " * For the government of a tiger range state: to demonstrate commitment to global tiger conservation efforts and to provide verified information for reporting obligations under the CBD and other similar regional and global agreements");
$pdf->Ln( 10 );

$pdf->Write( 6, " * For the global conservation community: to recognize the protected areas of importance for tiger conservation and identify and monitor the level of management and support for these protected areas");
$pdf->Ln( 10 );
$pdf->Write( 6, " * For the donor community: to assess the seriousness and professionalism of the management within a protected area or protected area system; to help improve dissemination of funds and target those conservation strategies most likely to succeed.");
$pdf->Ln( 10 );
$pdf->Write( 6, " * For supporters of tiger conservation: to understand the level of quality to which the network and the individual conservation / protected areas are being managed and contributing to tiger conservation.");
$pdf->Ln( 10 );

$pdf->Write( 6, " * For tiger conservation: to set a minimum standard for tiger conservation within conservation / protected areas and provide an objective measurement of effectiveness.") ;
$pdf->Ln( 10 );

$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12);
$pdf->Write( 6, "What is a CA|TS Log Site: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, "A site is normally a single management unit such as a Protected Area or a Tiger Reserve, in a few cases a site is a Conserved Area (forest division or production forest and not a gazette site for nature conservation).") ;
$pdf->Ln( 10 );

$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "CA|TS Log Assessment Process: ");
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Arial', '', 10 );
$pdf->Write( 6, "The full CA|TS Log process is outlined in the CA|TS Log manual (www.conservationassured.org), a summary is provided in the diagram below.") ;
$pdf->Ln( 20 );
$pdf->image(Yii::app()->basePath."/../img/site/catsflowchart.png",50);
$pdf->Ln( 10 );
$pdf->Write( 6, "For more information on CA|TS Log please visit: www.conservationassured.org.") ;
?>
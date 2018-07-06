<?php

include 'parts/emptydata.php';
ini_set("display_errors", true);

error_reporting(E_ALL);
require ("../lib/fpdf/fpdf.php");

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetTitle("Media College Intake Formulier");

    $pdf->SetFont("Helvetica", "B", 26);
    $pdf->SetLineWidth(0.4);
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->SetTextColor(0, 0, 0);              // Header
    $pdf->SetY(+10);
    $pdf->MultiCell(0, 10,"Intake formulier \nMedia College Amsterdam","", 0, "R", 36);
$pdf->SetY(+30);
    $pdf->MultiCell(0, 10,$_POST['naam'],"", 0, "R", 36);
    $pdf->Ln();


    $pdf->SetFont("Helvetica","B", 26);
    $pdf->SetLineWidth(0.4);
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetY(+40);

    $pdf->Cell(0, 10,$_POST['geboortedatum'],"B", 0, "R", 11);

    /* Einstellung für Überschrift */
    $pdf->SetFont("Helvetica", "B", 11);
    $pdf->SetLineWidth(0.4);
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetFillColor(192, 192, 192);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetY(+70);

    /* Überschrift */
$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(300,300,300);
$pdf->cell(190,10, 'Opleiding van leerling', "LTRB", 0, "L",1);
$pdf->ln();

if ($_POST['opleiding'] == 0){
    $_POST['opleiding'] = "vmbo";

    $pdf->SetFillColor(255,255,255);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(190, 10, $_POST['opleiding'], "LTRB", 0, "C", 1);
    $pdf->Ln();
    $pdf->Cell(40, 10, 'Niveau', "LTRB", 0, "L", 1);
    $pdf->Cell(150, 10, $_POST['niveau'], "LTRB", 0, "L", 1);
    $pdf->Ln();
    $pdf->Cell(40, 10, 'Sector', "LTRB", 0, "L", 1);
    $pdf->Cell(150, 10, $_POST['sector'], "LTRB", 0, "L", 1);
    $pdf->Ln();
    if ($_POST['mvi'] == "ja"){
        $pdf->MultiCell(190, 10, "Heeft de leerling een keuzevak MVI gedaan ? \n" . $_POST['mvi'] . "\n Zo ja, welke: ". $_POST['mviVak'], "LTRB", 0, "L", 1);
    } else {
        $pdf->MultiCell(190, 10, "Heeft de leerling een keuzevak MVI gedaan? " . $_POST['mvi'], "LTRB", 0, "L", 1);
    }
    $pdf->Cell(70, 10, 'Diploma behaald/te behalen op: ', "LTB", 0, "L", 1);
    $pdf->Cell(120, 10, $_POST['diploma-vmbo'] , "TRB", 0, "L", 1);
    $pdf->Ln();

} elseif ($_POST['opleiding'] == 1){
    $_POST['opleiding'] = "havo";

    $pdf->SetFillColor(255,255,255);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(190, 10, $_POST['opleiding'], "LTRB", 0, "C", 1);
    $pdf->Ln();
    $pdf->Cell(190, 10, 'Diploma behaald/te behalen op: ' . $_POST['diploma-havo'] , "LTRB", 0, "L", 1);
    $pdf->Ln();
    $pdf->Cell(190, 10, 'overgangsbewijs van leerjaar: ' . $_POST['overgangHavoVan'] . " naar " . $_POST['overgangHavoNaar'] , "LTRB", 0, "L", 1);
    $pdf->Ln();

}elseif ($_POST['opleiding'] == 2){
    $_POST['opleiding'] = "vwo";

    $pdf->SetFillColor(255,255,255);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(190, 10, $_POST['opleiding'], "LTRB", 0, "C", 1);
    $pdf->Ln();
    $pdf->Cell(190, 10, 'Diploma behaald/te behalen op: ' . $_POST['diploma-vwo'] , "LTRB", 0, "L", 1);
    $pdf->Ln();
    $pdf->Cell(190, 10, 'overgangsbewijs van leerjaar: ' . $_POST['overgangVwoVan'] . " naar " . $_POST['overgangVwoNaar'] , "LTRB", 0, "L", 1);
    $pdf->Ln();
}
elseif ($_POST['opleiding'] == 3){
    $_POST['opleiding'] = "mbo";
    $pdf->SetFillColor(255,255,255);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(190, 10, $_POST['opleiding'], "LTRB", 0, "C", 1);
    $pdf->Ln();
    $pdf->Cell(50, 10, 'Opleidingsniveau: ' , "LTRB", 0, "L", 1);
    $pdf->Cell(140, 10, $_POST['opleidingsniveau'] , "LTRB", 0, "L", 1);
    $pdf->Ln();
    $pdf->Cell(50, 10, 'Leerweg: ', "LTRB", 0, "L", 1);
    $pdf->Cell(140, 10, $_POST['leerweg'], "LTRB", 0, "L", 1);
    $pdf->Ln();

}elseif ($_POST['opleiding'] == 4){
    $_POST['opleiding'] = "anders";
    $pdf->SetFillColor(0, 0, 0);
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(190, 10, $_POST['opleiding'], "LTRB", 0, "C", 1);
    $pdf->Ln();
}

$pdf->Ln();
$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(300,300,300);
$pdf->Cell(190, 10, 'Indruk over de leerling', "LTRB", 0, "C", 1);

$pdf->Ln();$pdf->Ln();
$pdf->SetFont("Helvetica", "B", 16);
$pdf->SetLineWidth(0.4);
$pdf->SetDrawColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0, 0, 0);

$pdf->Cell(0, 5,'Werkhouding',"", 0, "L", 36);

$pdf->Ln();$pdf->Ln();
$pdf->SetFont("Helvetica", "", 11);
$pdf->SetLineWidth(0.4);
$pdf->SetDrawColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0, 0, 0);

$pdf->Cell(0, 5,'concentratie: ' . $_POST['concentratie'],"", 0, "L", 36);
$pdf->ln();
$pdf->Cell(0, 5,'werktempo: ' . $_POST['werktempo'],"", 0, "L", 36);
$pdf->ln();
$pdf->Cell(0, 5,'zelfstandig werken in de klas: ' . $_POST['werktempo'],"", 0, "L", 36);

$pdf->Ln();$pdf->Ln();

$pdf->SetFont("Helvetica", "B", 16);
$pdf->SetLineWidth(0.4);
$pdf->SetDrawColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0, 0, 0);

$pdf->Cell(0, 5,'Instelling',"", 0, "L", 36);

$pdf->Ln();$pdf->Ln();
$pdf->SetFont("Helvetica", "", 11);
$pdf->SetLineWidth(0.4);
$pdf->SetDrawColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0, 0, 0);

$pdf->Cell(0, 5,'motivatie: ' . $_POST['motivatie'],"", 0, "L", 36);
$pdf->ln();
$pdf->Cell(0, 5,'doorzettingsvermogen: ' . $_POST['doorzettingsvermogen'],"", 0, "L", 36);

$pdf->Ln();$pdf->Ln();
$pdf->SetFont("Helvetica", "B", 16);
$pdf->SetLineWidth(0.4);
$pdf->SetDrawColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0, 0, 0);

$pdf->Cell(0, 5,'Vaardigheden',"", 0, "L", 36);

$pdf->Ln();$pdf->Ln();
$pdf->SetFont("Helvetica", "", 11);
$pdf->SetLineWidth(0.4);
$pdf->SetDrawColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0, 0, 0);

$pdf->Cell(0, 5,'communicatieve vaardigheden: ' . $_POST['communicatieve'],"", 0, "L", 36);
$pdf->ln();
$pdf->Cell(0, 5,'sociale vaardigheden: ' . $_POST['sociale'],"", 0, "L", 36);

$pdf->SetY(+310);
$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(300,300,300);
$pdf->Cell(190, 10, 'Bijzonderheden', "LTRB", 0, "C", 1);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0, 0, 0);
$pdf->Ln();

$pdf->MultiCell(190, 10, "Heeft de leerling een aandoening en/of beperking die van invloed op de studie is of kan zijn? \n" . $_POST['aandoening'], "LTRB", 0, "L", 1  );
$pdf->Cell(150, 10, "Volgt de leerling speciaal onderwijs?", "LTRB", 0, "L", 1 );
$pdf->Cell(40, 10, $_POST['speciaal'], "LTRB", 0, "L", 1);
$pdf->Ln();
$pdf->Cell(150, 10, "Heeft de leerling dyslexie? (*)", "LTRB", 0, "L", 1 );
$pdf->Cell(40, 10, $_POST['dyslexie'], "LTRB", 0, "L", 1 );
$pdf->Ln();
$pdf->Cell(150, 10, "Heeft de leerling dyscalculie? (**)", "LTRB", 0, "L", 1 );
$pdf->Cell(40, 10, $_POST['dyscalculie'], "LTRB", 0, "L", 1 );
$pdf->Ln();
$pdf->Cell(150, 10, "Is de leerling recent besproken in \n het extern zorg- en adviesteam (ZAT)?", "LTRB", 0, "L", 1 );
$pdf->Cell(40, 10, $_POST['zat'], "LTRB", 0, "L", 1 );
$pdf->Ln();
$pdf->Cell(150, 10, "Ontvangt de leerling nog andere zorg?", "LTRB", 0, "L", 1 );
$pdf->Cell(40, 10, $_POST['anders'], "LTRB", 0, "L", 1 );
$pdf->Ln();
if ($_POST['anders'] == 'ja'){
    $pdf->MultiCell(190, 10, "Zoja, welke zorg? \n " . $_POST['andersValue'], "LTRB", 0, "L", 1 );
} else {
    $pdf->MultiCell(190, 10, "Zoja, welke zorg? \n ", "LTRB", 0, "L", 1 );

}
$pdf->MultiCell(190, 10, "Zijn er andere bijzondere persoonlijk omstandigheden waarvan de school op de hoogte moet zijn? (***) \n" . $_POST['andersPersoonlijk'], "LTRB", 0, "L", 1 );
$pdf->Ln();
$pdf->MultiCell(190, 5, "(*) = bij plaatsing inleveren dyslexieverklaring verplicht", "", 0, "L", 1 );
$pdf->Ln();
$pdf->MultiCell(190, 5, "(**) = bij plaatsing inleveren dyscalculieverklaring  verplicht", "", 0, "L", 1 );
$pdf->Ln();
$pdf->MultiCell(190, 5, "(***) = Hieronder verstaat het Mediacollege Amsterdam \n bijzonderheden/beperkingen die van invloed kunnen zijn \n op het succesvol volgen van de opleiding zoals o.a. \nepilepsie, slechthorendheid, ADHD, suikerziekte etc.", "", 0, "L", 1 );
$pdf->Ln();
$pdf->Ln();

$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(300,300,300);
$pdf->Cell(190, 10, 'Gegevens', "LTRB", 0, "C", 1);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0, 0, 0);
$pdf->Ln();
$pdf->Cell(50, 10, 'Naam: ', "LTB", 0, "L", 1);
$pdf->Cell(80, 10, $_POST['naam'], "TRB", 0, "L", 1);
$pdf->Cell(60, 10, $_POST['geslacht'], "LTRB", 0, "L", 1);
$pdf->Ln();
$pdf->Cell(50, 10, 'Functie', "LTB", 0, "L", 1);
$pdf->Cell(140, 10, $_POST['functie'], "TRB", 0, "L", 1);
$pdf->Ln();
$pdf->Cell(50, 10, 'email', "LTB", 0, "L", 1);
$pdf->Cell(140, 10, $_POST['email'], "TRB", 0, "L", 1);
$pdf->Ln();
$pdf->Cell(50, 10, 'Naam School', "LTB", 0, "L", 1);
$pdf->Cell(45, 10, $_POST['school'], "TRB", 0, "L", 1);
$pdf->Cell(45, 10, "Plaats", "LTB", 0, "L", 1);
$pdf->Cell(50, 10, $_POST['plaats'], "TRB", 0, "L", 1);
$pdf->Ln();
$pdf->Cell(50, 10, 'Telefoon', "LTB", 0, "L", 1);
$pdf->Cell(45, 10, $_POST['telefoon'], "TRB", 0, "L", 1);
$pdf->Cell(60, 10, "Telefonisch Contact Gewenst", "LTRB", 0, "L", 1);
$pdf->Cell(35, 10, $_POST['contact'], "LTRB", 0, "L", 1);

//
//$pdf->Ln();
//    $pdf->SetFillColor(255,255,255);
//    $pdf->SetTextColor(0, 0, 0);
//    $pdf->SetFont("Helvetica", "B", 11);
//    $pdf->SetLineWidth(0.4);
//    $pdf->Cell(30, 10, "input 4", "LTRB", 0, "C", 1);
//    $pdf->Cell(130, 10,"input 5", "LTRB", 0, "C", 1);
//    $pdf->Cell(30, 10, chr(128)."input 6", "LTRB", 0, "C", 1);
//
//
//    $pdf->Ln();
//    $pdf->SetFont("Helvetica", "", 11);
//    $pdf->SetLineWidth(0.4);
//    $pdf->SetDrawColor(0, 0, 0);
//    $pdf->SetFillColor(255, 255, 255);                      // Adresse
//    $pdf->SetTextColor(0, 0, 0);
//    $pdf->SetY(+190);
//
//    $pdf->Cell(0, 10, "Preise inkl. 20% MWSt","", 0, "C", 11);
//
//    $pdf->Ln();
//    $pdf->SetFont("Helvetica", "", 11);
//    $pdf->SetLineWidth(0.4);
//    $pdf->SetDrawColor(0, 0, 0);
//    $pdf->SetFillColor(255, 255, 255);                      // Adresse
//    $pdf->SetTextColor(0, 0, 0);
//    $pdf->SetY(+200);
//
//    $pdf->Cell(0, 10, "Das Lieferdatum entspricht dem Rechnungsdatum","", 0, "C", 11);
//
//    $pdf->Ln();
//    $pdf->SetFont("Helvetica", "", 11);
//    $pdf->SetLineWidth(0.4);
//    $pdf->SetDrawColor(0, 0, 0);
//    $pdf->SetFillColor(255, 255, 255);                      // Adresse
//    $pdf->SetTextColor(0, 0, 0);
//    $pdf->SetY(+250);
//
//    $pdf->Cell(0, 10, "www.hakki-uzel.at","", 0, "C", 11);

$pdf->Output("PHP.pdf", "I");
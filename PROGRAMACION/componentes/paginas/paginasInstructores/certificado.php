<?php
require('assets/fpdf/fpdf.php');



class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('assets/img/Screenshot_1.png',90,10,33);
    // Arial bold 15
    $this->Ln(30);

    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(22);
    // Título
    $this->Cell(150,10,utf8_decode('LA SUSCRITA SUBDIRECTORA  CENTRO ELECTRICIDAD ELECTRONICA Y TELECOMUNICACIONES'),0,0,'C' );
    // Salto de línea

    $this->Ln(6);

    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(22);
    // Título
    $this->Cell(150,10,utf8_decode('DEL SERVICIO NACIONAL DE APRENDIZAJE SENA'),0,0,'C');
    // Salto de línea
    $this->Ln(20);


    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(22);
    // Título
    $this->Cell(150,10,'HACE CONSTAR',0,0,'C');
    // Salto de línea
    $this->Ln(25);

    $this->SetFont('Arial','',9);
    // Movernos a la derecha
    $this->Cell(1);
    // Título
    
    $this->Cell(145,10,utf8_decode('Que el(la) señor(a) "NOMBRE", identificados(a) con cedula de ciudadania No.' ),0,0,'C');
    // Salto de línea
    $this->Ln(5);
    $this->Cell(194,10,'#Cedula de Bogota D.C, celebro con EL SERVICIO NACIONALE DE APRENDISAJE SENA, el(los) siguiente(s)',0,0,'C');
    // Salto de línea
    $this->Ln(5);
    $this->Cell(182,10,'contrato(s) de prestacion de servicios personales regulados por la ley 80 de 1993(Estatuto General de',0,0,'C');
    // Salto de línea
    $this->Ln(5);
    $this->Cell(183,10,utf8_decode('Contratacion de la Administración pública), modificada por la ley 1150 de 2007,Decreto 1082 de2015 y '),0,0,'C');
    // Salto de línea
    $this->Ln(5);
    $this->Cell(152,10,'sus demas Decretos o normas reglamentarias, como se describe a continuacion:',0,0,'C');
    // Salto de línea
    $this->Ln(30);

    $this->Cell(179,10,utf8_decode('Objeto:Prestar servicios personales de carácter temporal, para la ejecucion de acciones de formacion'),0,0,'C');
    // Salto de línea
    $this->Ln(5);
    $this->Cell(178,10,'titulada y/o complementaria de forma presencial y/o virtual:junto con otras actividades que se deriven',0,0,'C');
    // Salto de línea
    $this->Ln(5);
    $this->Cell(172,10,utf8_decode('de la formacion, en los diferentes programas de las áreas de electricidad, electrónica, biométrica,'),0,0,'C');
    // Salto de línea
    $this->Ln(5);

    $this->Cell(183,10,'refrigeracion, telecomunicaciones, teleinformatica y gestion de proyectos para los sectores industrial y de',0,0,'C');
    // Salto de línea
    $this->Ln(5);

    $this->Cell(182,10,'servicios atendidos por el centro de Electricidad y Electronica y Telecomunicaciones del SENA.Regional',0,0,'C');
    // Salto de línea
    $this->Ln(5);

    $this->Cell(131,10,'Distrito capital.PARAGRAFO PRIMERO: Especialidad programa de ',0,0,'C');
    // Salto de línea
    $this->Ln(5);

    $this->Cell(118,10,'formacion: NOMBRE DEL PROGRAMA DE FORMACION.',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(105,10,'fecha de inicio de ejecucion: fecha de inicio',0,0,'C');
    // Salto de línea
    $this->Ln(5);

    $this->Cell(84,10,'Fecha de fin: FECHA FINAL',0,0,'C');
    // Salto de línea
    $this->Ln(70);


    
    $this->Cell(280,10,'FIRMA1',0,0,'C');
    // Salto de línea
    $this->Ln(0);

    
    $this->Cell(85,10,'FIRMA2',0,0,'C');
    // Salto de línea
    $this->Ln(5);











   
    
}



// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Page ').$this->PageNo().'/{nb}',0,0,'C');
}
}



$pdf = new PDF();
$pdf -> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);



$pdf->Output();
?>
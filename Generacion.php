<?php
require('fpdf/fpdf.php');
require('conexion.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$descripcion=false;
if (isset($_GET['descripcion'])) {
	$descripcion = $_GET['descripcion'];
	$stmt = $conexion->prepare("SELECT c.TIPO,c.DESCRIPCION, v.VALOR FROM comparendo c join valor v ON v.ID = c.ID_VALOR  WHERE `TIPO` LIKE '".$descripcion."'");
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    if ($resultado) {
    	foreach ($resultado as $value) {
    		$pdf->Cell(40,10, 'SU CODIGO ES:  '.$value['TIPO']);
            $pdf->ln();
    		$pdf->Cell(40,10,'DESCRIPCION:  ' .$value['DESCRIPCION']);
            $pdf->ln();
    		$pdf->Cell(40,10,'EL VALOR DE LA MULTA ES:  '.$value['VALOR']);//LO PUEDO MOLESTAR CON LO ULTIMO
            //EL LOGIN ESTA FALLANDO  NO GUARDA             
    		$pdf->ln();
    	}
    }else{
		$descripcion=false;						
    }
} 
$pdf->Output();
?>
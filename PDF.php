<?php

include_once('fpdf.php');
class PDF extends FPDF
 {
      function ImprimirTexto($file){
      //Se lee el archivo
      $txt = file_get_contents($file);
      $this->SetFont('Arial','',12);
      //Se imprime
      $this->MultiCell(0,5,$txt);
     }

 }

?>

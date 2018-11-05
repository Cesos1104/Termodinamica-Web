<?php

   include ("Classes/PHPExcel.php");
    
   if(isset($_POST['nombre']))
    {
        
        $nombre = $_POST['nombre'];
        echo $nombre;
        
    ;

// indicar que se envia un archivo de Excel.
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment;filename="prueba.xlsx"');
      header('Cache-Control: max-age=0');
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      $objWriter->save('php://output');
    }

   

    ?>
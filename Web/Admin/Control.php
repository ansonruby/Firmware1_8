<?php
  $dato ="";
  $dato = $_POST["fecha"];
  //$dato ="nose";
  $fh = fopen('Control_Web.txt', 'w');
    //fwrite($fh, '0.Borrar.Borrar_Basedfssdfsdf');
    fwrite($fh, '0.Borrar.'.$dato);
  fclose($fh);
?>

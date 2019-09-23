<?php
function guardar($datos) {
    $my_file = 'usuarios.txt';
    $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
    
    foreach ($datos as $dato) {
        $txt = dato;
        fwrite($handle, $data);
        fclose($myfile);
    }
    

}
?>



<?php
function guardar($datos) {
$file = 'usuarios.txt';
    
    foreach ($datos as $dato) {
        $person = $dato . ";";
        file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
        
    }
    $newline = "\n";
    file_put_contents($file, $newline, FILE_APPEND | LOCK_EX);
        
    

}

?>



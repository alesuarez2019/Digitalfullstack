<?php
function guardardatos ($dato1, $dato2) {
    $archivo = "usuarios.json";
    $traigoJson = file_get_contents($archivo);
    if ($traigoJson) {
        $exito = true;
        $jsonArray = json_decode($traigoJson, true);
        foreach($jasonArray as $posicion => $email){
            if ($dato1 == $email){
                $exito = false;
                return $exito;
            }
        }
        $jsonArray[] = $traigoJson;
        $json = json_encode($jsonArray);
        file_put_contents($archivo, $json);
    }
    return $exito;
 }
 guardardatos($usuarios, $archivo);

 ?>
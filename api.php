<?php
    echo <<<HTML
        Hola Pana <br><a href="index.php" target="_self">Volver</a><br>
    HTML;
    echo "<pre>";
    var_dump($_POST);
    echo "<hr>";
    $numero1 =(int)($_POST["numero1"]);
    $numero2 =(int)($_POST["numero2"]);
    $operacion = ($_POST["operacion"]);
    $resultado = 0;
    switch($operacion){
        case "suma":
            $resultado=$numero1 + $numero2; 
            break;      
        case "resta":
            echo "Se hace una resta";
            $resultado = $numero1-$numero2;
            break;
        case "multiplicacion":
            $resultado = $numero1 * $numero2;
            break;
        case "division":
            $resultado = $numero1/$numero2;
            break;
    }
    echo $resultado;
?>
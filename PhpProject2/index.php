<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>proyect</title>
    </head>
    <body>
        
        <p>
            <?php
            $g=5;
            $f=2;
            $lenguaje="java";
            if($g>1)
            {
                echo 'soy menor';
            }
            else{
                echo 'soy mayor';
            }
            switch ($lenguaje)
            {
                case "php":
                    echo 'php';
                    break;
                case "java":
                    echo 'java';
                    break;
                case "html":
                    echo 'html';
                    break;
            }
                echo "otra seccion";  
            ?>
        </p>
    </body>
</html>

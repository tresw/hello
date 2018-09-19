<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     <pre>
        <?php
        function saluad()
        {
            echo 'ello';
        }
        saluad();
       /* $lenguajes=['html','css','javascript'];
        $lenguajes[] ='5';
        print_r($lenguajes);
        echo '<br>'.'<br>'.'<br>'.'<br>';
        var_dump($lenguajes);
        $hoal= array_pop($lenguajes);
        */
        //funcion con parametros 
        echo '<br>'.'<br>'.'<br>';
        function h($nombres,$tele)
        {
            foreach($nombres as $nom)
            {
                echo $nom.'<br>';
            }
            echo '<br>'.'<br>'.'<br>';
            echo 'telefono: '.$tele;
        }
        $nombre = ['dffdf','fddffd','dfdfdf','dfdfd'];
        h($nombre,561);
        echo '<br>'.'<br>'.'<br>';
        function sumar($num1,$num2)
        {
            $total = $num1 + $num2;
            return $total;
        }
        $a = sumar(2,5);
        echo 'suma: '. $a;
        //acceder a variable globales desde funcion
        echo '<br>'.'<br>'.'<br>';
        $agnda=array();
        function agendar($nombre,$te)
        {
            global $agnda;
            $agnda[]=$nombre;
            $agnda[]=$te;
        }
        agendar("felipe",545);
        print_r($agnda);
        ?>
     </pre>
    </body>
</html>

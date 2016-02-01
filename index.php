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
        <?php
            echo "<h3>Lluis Traveset</h3>";
            $a=0;
            $s=1;
            echo $a." - ";
            for ($i=0; $i < 18; $i++) { 
                    $suma=$a+$s;
                    $a=$s;
                    $s=$suma;
                    echo $suma." - ";
            }
?>
    </body>
</html>

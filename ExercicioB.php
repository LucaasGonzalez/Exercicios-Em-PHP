<html> 
    <head>
        <meta charset = "UTF-8">
    </head>
    <body>
        <?php

        $ladoA = 4;
        $ladoB = 4;
        $ladoC = 4;

        if($ladoA + $ladoB > $ladoC && $ladoA + $ladoC > $ladoB && $ladoC + $ladoB > $ladoA){
            
            if($ladoA == $ladoB && $ladoA == $ladoC){
                echo "</br>Esses valores formam um triângulo equilátero";
            }
            else if($ladoA == $ladoB || $ladoA == $ladoC || $ladoB == $ladoC){
                echo "</br>Esses valores formam um triângulo isósceles";
            }else{
                echo "</br>Esses valores formam um triângulo Escaleno";
            }
        }else{
            echo "</br>Esses valores não formam um triângulo";
        }

        ?>
  </body>
</html>
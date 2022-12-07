<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO 1</title>
</head>
    <body>
<?php
     echo'<font color="red">EXERCICE 1</font>';
     $nombre = rand(0,100);     
     if ($nombre%2 == 1){
            echo'<div style="background-color:blue">Le nombre '.$nombre.'  est impaire </div>';
        }
        else {
            echo'<div style="background-color:red">Le nombre '.$nombre.' est paire </div>';
        }
      
?>
<?php
         $tableau = array(1,2,3,4,5);
          for ($i = 0; $i < sizeof($tableau); $i++)
          {
              echo"A l'indice $i le chiffre est $tableau[$i] <br>";
          }  
?>

    </body>
</html>



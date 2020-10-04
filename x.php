<?php

$operacion = $_POST['lista'];
echo "el resultado es igual a : ";
switch($operacion)
{
     case "sumar":
      echo  $_POST['c1'] + $_POST['c2'];
        break;
        
        case "restar":
                echo $_POST['c1'] - $_POST['c2'];
            break;

                case "multiplicar":
                    echo $_POST['c1'] * $_POST['c2'];





                }


?>
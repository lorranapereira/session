    
<?php
session_start();

$nome = $_SESSION['login'];

// Lê o cookie "masterdaweb"
$meu_array = serialize($_FILES['arquivo']['name']);
$tamanho = $_FILES['arquivo']['size'];
$string_final = implode(" - ", $_FILES['arquivo']['name']);
print_r($tamanho);
setcookie($nome,$string_final ,time()+12000); 


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <style type="text/css">
        table, th, td {
            border: 1px solid black;
        }
        </style>
        </head>
        <body>
            <table style="width:100%">
                <tr>
                    <th>Arquivos Uploads</th>
                    <th>Tamanho</th> 
                </tr>
                   <?php
                   $meu_array = explode(" - ",$string_final);  
                   $aux = 0;             
                   foreach ($meu_array as $value) {
                        echo "<tr>";
                        echo "<td>".$value."</td>";       
                        echo "<td>".$tamanho[$aux]."</td>"; 
                        $aux+=1;    
                        echo "<\tr>";
                        
                   }
                   ?> 
            </table>
    </body>
</html>

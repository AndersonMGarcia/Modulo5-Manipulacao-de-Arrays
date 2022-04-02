<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Range</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $arrayAlfabeto = range('A','Z', 2);
            $arrayNumeros = range(1,20,2);

            echo '<h1>Alfabeto</h1>';
            
            foreach($arrayAlfabeto as $item){
                echo $item."<br>";
            }

            echo "<hr>";
            echo '<h1>Numérico</h1>';
            foreach($arrayNumeros as $numeros){
                echo $numeros.'<br>';
            }

            

        ?>
    </div>    
</body>
</html>
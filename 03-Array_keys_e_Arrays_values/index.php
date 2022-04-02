<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Key_exists</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <pre>
        <?php
            $array = [
                'nome'=> 'Fulano',
                'idade' => 90,
                'empresa' => 'Azul',
                'profissao' => 'desenvolvedor'
            ];
            echo "<h3>Exibindo o array ".'$array</h3><br>';
            
            print_r($array);

            echo "<hr>";

            $chaves = array_keys($array);

            echo "<h3>Pegando as chaves do array e armazenando na variável ".'$chaves</h3><br>';
            echo '$chaves = array_keys($array);<br><br>';

            print_r($chaves);

            echo "<hr>";

            $valores = array_values($array);

            echo "<h3>Pegando os valores do array e armazenando na variável ".'$valores</h3><br>';
            echo '$valores = array_values($array);<br><br>';

            print_r($valores);



            
        ?>
        </pre>
        
    </div>    
</body>
</html>
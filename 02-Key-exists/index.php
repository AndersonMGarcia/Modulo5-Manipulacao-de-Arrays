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
        <?php
            $array = [
                'nome'=> 'Fulano',
                'idade' => 90,
                'empresa' => 'Azul',
                'profissao' => 'desenvolvedor'
            ];

            if (key_exists('idade', $array)){

                echo $array['idade'];
            }else{
                echo "O array não possui a chave solicitada!";
                exit;
            }
        ?>
    </div>    
</body>
</html>
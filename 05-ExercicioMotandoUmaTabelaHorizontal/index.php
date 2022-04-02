<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montando uma tabela horizontal</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $array = [
                'nome' => 'Fulano',
                'idade' => 90,
                'empresa' => 'Azul',
                'profissao' => 'Desenvolvedor'
            ];

            $chaves = array_keys($array);
            $valores = array_values($array);

        ?>

        <table border="1">

            <tr>
                <?php foreach($chaves as $chv): ?>
                    
                    <th><?php echo $chv; ?></th>
                
                <?php endforeach ?>
                
            </tr>

            <tr>
                <?php foreach($valores as $val): ?>
                    
                    <td><?php echo $val; ?></td>
                <?php endforeach; ?>
            </tr>

        </table>
        

        
    </div>    
</body>
</html>
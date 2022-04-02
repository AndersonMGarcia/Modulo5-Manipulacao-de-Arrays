<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montando uma tabela vertical</title>
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
        ?>



        <table border="1">
            <?php foreach($array as $chave => $valor): ?>

            <tr>
                <th><?php echo $chave ?></th>    
                <td><?php echo $valor ?></td>
            </tr>

            <?php endforeach; ?>
        </table>
    </div>    
</body>
</html>
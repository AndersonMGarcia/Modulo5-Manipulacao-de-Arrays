<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconstruindo usando list</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        
        <?php
            $array = ['Fulano', 90, 'café', 'azul'];

           /* $nome = $array[0];
            $idade = $array[1];
            $bebida = $array[2];
            $cor = $array[3]; */


            # Desconstruindo o array
            
            list($nome, $idade, $bebida, $cor) = $array;// faz a mesma coisa que as variáveis acima

            echo $nome. ' tem '.$idade. ' anos e gosta de tomar '. $bebida. '. Sua cor preferida é a cor '. $cor.'!';

           
        


        ?>
       
        
        

        
    </div>    
</body>
</html>
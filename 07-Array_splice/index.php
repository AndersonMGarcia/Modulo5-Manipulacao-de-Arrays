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
        <pre>
        <?php
            $array = ['a', 'b', 'c', 'd','e','f'];

            echo "<h3>Exibindo o array</h3>";

            echo '$array = "["a","b", "c", "d", "e", "f"];"<br><br>';

            print_r($array);

            echo '<hr>';




            
            array_splice($array, 1, 1);//Remove o array de indice 1 e total de itens

            echo '<h3>Usando a função array_splice()</h3>';
            echo '$array = "["a","b", "c", "d", "e", "f"];"<br><br>';

            echo 'array_splice($array, 1, 1);//Remove o array de indice 1 e total de itens';

            echo "<br><br>";

            print_r($array);
            



            echo '<hr>';
            


           




            $array = ['a', 'b', 'c', 'd','e','f']; 
            array_splice($array, 2);

            echo '<h3>Removendo os itens do array a partir do índice 2 <br>Função array_splice()</h3>';
            echo '$array = "["a","b", "c", "d", "e", "f"];"<br><br>';
            echo 'array_splice($array, 2);//Remove todos os itens a pertir do índice 2';

            echo "<br><br>";
            foreach ($array as $ret){
                echo $ret. "<br>";
            }

            echo '<hr>';


            $array = ['a', 'b', 'c', 'd','e','f']; 

            array_splice($array, 2,3);

            echo '<h3>Removendo os itens do array a partir do índice 2 mais 3 <br>Função array_splice()</h3>';
            echo '$array = "["a","b", "c", "d", "e", "f"];"<br><br>';
            echo 'array_splice($array, 2,3);';

            echo "<br><br>";
            foreach ($array as $ret){
                echo $ret. "<br>";
            }

            echo '<hr>';


            $array = ['a', 'b', 'c', 'd','e','f']; 

            array_splice($array, 2,2, 'K');

            echo '<h3>Removendo os itens do array a partir do índice 2 mais 2 <br>e adicionando a letra K <br>Função array_splice()</h3>';
            echo '$array = "["a","b", "c", "d", "e", "f"];"<br><br>';
            echo 'array_splice($array, 2,2, "K");';

            echo "<br><br>";
            foreach ($array as $ret){
                echo $ret. "<br>";
            }

            echo '<hr>';


            
            

        ?>
        </pre>
        
        

        
    </div>    
</body>
</html>
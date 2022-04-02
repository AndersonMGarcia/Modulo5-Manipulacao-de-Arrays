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
            $array = ['a', 'b', 'c', 'd','f'];

            echo "<h3>Exibindo o array</h3>";

            echo '$array = "["a","b", "c", "d", "e", "f"];"<br><br>';

            print_r($array);

            echo '<hr>';




            
            $retorno = array_slice($array, 1, 4);

            echo '<h3>Usando a função array_slice()</h3>';

            echo '$retorno = array_slice($array, 1, 4);';

            echo "<br><br>";
            foreach ($retorno as $ret){
                echo $ret. "<br>";
            }



            echo '<hr>';
            


           




            
            $retorno = array_slice($array, -2);

            echo '<h3>Exibindo os dois últimos valores do array - função array_slice()</h3>';

            echo '$retorno = array_slice($array, -2);';

            echo "<br><br>";
            foreach ($retorno as $ret){
                echo $ret. "<br>";
            }

            echo '<hr>';


            
            $retorno = array_slice($array, -2,1);

            echo '<h3>Exibindo o penúltimo valor do array - função array_slice()</h3>';

            echo '$retorno = array_slice($array, -2,3);';

            echo "<br><br>";
            foreach ($retorno as $ret){
                echo $ret. "<br>";
            }

        ?>
        </pre>
        
        

        
    </div>    
</body>
</html>
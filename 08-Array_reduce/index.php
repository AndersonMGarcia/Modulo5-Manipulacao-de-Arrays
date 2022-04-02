<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Reduce</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <pre>
        <?php
           /* $numeros = [1,2,3,4,5];

            function somar($subtotal, $item){
                
                $subtotal = $subtotal + $item;
                return $subtotal;
            }


            $total = array_reduce($numeros, 'somar');

            echo $total;*/

            //--------------------------------------------------------

            $pessoas = [
                ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
                ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],
                ['nome' => 'Beltrano', 'sexo' => 'M', 'nota' => 10],
                ['nome' => 'Tonho', 'sexo' => 'M', 'nota' => 8],
                ['nome' => 'Totonho', 'sexo' => 'M', 'nota' => 9],
                ['nome' => 'Medonha', 'sexo' => 'F', 'nota' => 9]
            ];

            # Soma do total de homens
            function contar_m($subtotal, $item){
                
                if ($item['sexo'] === 'M'){

                    $subtotal ++;
                }
                
                return $subtotal;
            };
            $total_m = array_reduce($pessoas, 'contar_m');

            //Soma das notas dos homens
            
            function soma_m($subtotal, $item){
                
                if ($item['sexo'] === 'M'){

                    $subtotal = $subtotal + $item['nota'] ;
                }

                return $subtotal;
            }
            $soma_m = array_reduce($pessoas, 'soma_m');

            // Média dos homens

            $media_m = $soma_m / $total_m;
             

            echo "Total de homens: " .$total_m."<br>";
             echo "Soma das notas dos homens: " .$soma_m."<br>";
             echo "Média das notas dos homens: " .$media_m."<br>";



        ?>
        </pre>
        
        

        
    </div>    
</body>
</html>
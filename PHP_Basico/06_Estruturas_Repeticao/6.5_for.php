 <?php

 //Laço de repetição FOR

 //Estrutura: for(inicio; condição; incremento){código a ser executado}

 for($i = 1; $i <= 10; $i++){
    echo "Numero atual = $i <br>";
 }

 for($p = 1; $p <= 5; $p++){
    echo "| <br> $p |";
    for($m = 1; $m <= 5; $m++){
        echo "| $m |";
    }
 }
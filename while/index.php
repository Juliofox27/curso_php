<?php

//VARIAVEL QUANTIDADE DE CARROS
$carros = 10;

echo 'QUANTIDADE DE CARROS' . $carros;

//VENDAS
$vendas = 1;

echo '<br/>VENDAS SE INICIA DO ' . $vendas;

//LAÇO ( WHILE )
//ENQUANTO VENDAS FOR MENOR OU IGUAL
//A QUANTIDADE DE VENDAS REPETE.
while($vendas <= $carros){

//REALIZOU UMA VENDA 
echo'<br/>QUANTIDADE DE VENDAS: ' . $vendas;



//SE (IF) A SOBRA DA DIVISÃO POR 2 FOR IGUAL 0
if($vendas % 2 == 0){
    echo '(PAR)';
}

else {
    echo '(IMPAR)';
}

$vendas = $vendas + 1;

}
// CONTROL H TROCAR NOMES 
// CONTROL F PROCURAR PALAVRAS
?>

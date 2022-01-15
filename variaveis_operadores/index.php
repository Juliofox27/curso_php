<?php

//CRIANDO VARIAVEL 

$nome = "Julio";
$sobrenome = "Cesar Soares";

//UTILIZANDO O PONTO . PARA CONCATENAR VALORES EM UMA NOVA VARIAVEL
$nome_completo = $nome .' '. $sobrenome;

//EXIBINDO O VALOR DA VARIAVEL
echo $nome_completo;

//VARIAVEL IDADE
$idade = 12;

//VERIFICANDO SE É MAIOR DE IDADE

//SE (IF) A VARIAVEL IDADE FOR MAIOR QUE 18 MAIOR DE IDADE
//SENÃO (ELSE) MENOR DE IDADE

if ($idade >= 18){
    $resultadoidade = "Maior de idade";
}else{
    $resultadoidade = "Menor de idade";
}

echo '</br>';
echo $resultadoidade;



//EXERCICIOS

/*CRIE DUAS VARIAVEIS

1º QUANTIDADE DE CAIXAS ($qtd_caixas)
2º UNIDADES POR CAIXA ($uni_caixas)

CRIAR uma nova variavel para calcular quantas unidades contém no total

3º Quantidade total ($qtd_total)

EXIBIR OS RESULTADOS DO PHP
DENTRO DE UMA TABLE HTML

QUANTIADE DE CAIXAS | UNIDADES POR CAIXA | QUANTIDADE TOTAL

       10                      5                   50  
*/       

// PRATICA EXRCICIOS
$qtd_caixas = 10;
$und_caixas = 5;
$qtd_total = $qtd_caixas * $und_caixas;


?>

<!--TR - LINHA 
    TH - COLUNA DE TEXTO
    TD - COLUNA DE RESULTADO
-->    

<table>
<tr>
    <th>
        Nome
    </th>
        <td>
            idade   
        </td>
</tr>    

<tr>
    <th>
        <?php echo $nome_completo;?>
    </th>
        <td>
            <?php echo $idade;?>
        </td>
</tr>  

</table>  


<table>

    <!--PRIMEIRA LINHA-->
    <tr>
        <th> QTD CAIXAS </th>
        <th> UNIDADES POR CAIXA </th>
        <th> QTD TOTAL </th>

    </tr>

    <!--SEGUNDA LINHA-->
    <tr>
        <td> <?php echo $qtd_caixas;?> </td>
        <td> <?php echo $und_caixas;?></td>
        <td> <?php echo $qtd_total;?>
    </tr>

</table>
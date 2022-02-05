<?php
//CHAMADO DE CONEXÃO
include 'conexao.php';

//COLETANDO INFORMAÇÕES DO POST
//@ PARA IGNORAR ERRO CASO O POST NAO SEJA ENVIADO
@$cd_convenio = $_POST['frm_cd_convenio'];

?>

<form method="POST"  action="index.php">

    codigo do convenio: <br>
    <input type="text" name="frm_cd_convenio">

    <button type="submit"> Enviar</button>

</form>

<?php

echo 'Convenio Selecionado:' . $cd_convenio . '<br><br>';

//BUSCANDO DADOS DO CONVENIO
$consulta_convenio = "SELECT * FROM 
banco_iep.convenio
WHERE cd_convenio = $cd_convenio";

//EXECUTANDO COMANDO NO BANCO
$resultado = mysqli_query($conexao, $consulta_convenio);

//APENAS PARA O COMANDO SELECT
//CRIANDO ARRAY(TABELA) COM AS INFORMACOES DA CONSULTA
$linha = mysqli_fetch_array($resultado);

//EXIBINDO INFORMACOES
//echo $linha['cd_convenio']; 
//echo ' | ' . $linha['nm_convenio'];
//echo ' | ' . $linha['cooparticipacao'];

?>

<table>

    <tr>
    <th>Codigo Convenio</th>
    <th>Nome do Convenio</th>
    <th>Cooparticipação</th>
    </tr>

    <tr>
    <td><?php echo $linha['cd_convenio']?></td>
    <td><?php echo $linha['nm_convenio']?></td>
    <td><?php echo $linha['cooparticipacao']?></td>
    </tr>

</table>

    
<style>

    

    th{
        border: solid black 2px;
        text-align: center;
        background-color:lightblue;
    }
    
    td{
        border: solid black 2px;
        text-align: center;
        padding:0 auto;
        
    }
    
    </style>

    
        





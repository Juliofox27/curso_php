<!--AQUI E HTML-->

<?php

//AQUI E O PHP

//PARA COLETAR UMA INFORMAÇÃO ENVIADA VIA FORM
//UTILIZAMOS O $POST 

$var_nome = $_POST['frm_name'];
//echo '</br>' . $var_nome;


$var_idade = $_POST['frm_idade'];
//echo '</br>' . $var_idade;

$var_sexo = $_POST['frm_sexo'];
//echo '</br>' . $var_sexo;

if($var_sexo=='M'){

    echo '<style>
        .caixa_exibicao{
        width: 400px;
        height: 200px;
        border: solid 3px blue;       
    </style>';
    }

            else{
             echo '<style>
             .caixa_exibicao{
             width: 400px;
             height: 200px;
             border: solid 3px pink;       
             </style>';
    }

?>


    <!--AQUI É HTML-->
    <div class= "caixa_exibicao">

    <?php
    
    echo '</br>' . $var_nome;
    echo '</br>' . $var_idade;
    

    ?>
    </div>








<table>

<tr>
<th>Nome</th>
<th>| Cpf</th>
<th> | Login</th>
<th> | Senha</th>
</tr>
</table>

<?php

   

         $nm_formulario = $_POST['frm_nm'];
            echo $nm_formulario;

             $cpf_formulario = $_POST['frm_cpf'];
            echo ' | ' . $cpf_formulario;

      

                 $login_formulario = $_POST['frm_lg'];
                echo ' | ' . $login_formulario;

                     $senha_formulario = $_POST['frm_sn'];
                    echo ' | ' . $senha_formulario;


?>
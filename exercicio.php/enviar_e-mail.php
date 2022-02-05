
<table>

<tr>
<th>Nome</th>
<th>| E-mail</th>
<th> | Mensagem</th>
</tr>
</table>

<?php

   

        $nm_formulario = $_POST['frm_nm'];
            echo $nm_formulario;

       

        $email_formulario = $_POST['frm_email'];
        echo ' | ' . $email_formulario;

      

        $mensagem = $_POST['frm_msg'];
        echo ' | ' . $mensagem;


       ?>


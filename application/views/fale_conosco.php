<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Meu Blog</title>
    </head>
    <body>
        <?php
        echo anchor(base_url(),"Home").
        anchor(base_url("fale-conosco","Fale Conosco")).
        heading("Meu Blog",2).
        heading("Fale Conosco",3);
        $atributos = array('name' => 'formulario_contato','id' => 'formulario_contato');
        echo form_open(base_url('welcome/enviar_mensagem'),$atributos).
        form_label("Nome:","txt_nome") . br().
        form_input('txt_nome') . br().
                form_label("Email:","txt_email") . br().
        form_input('txt_email') . br().
                form_label("Mensagem:","txt_mensagem") . br().
                form_textarea('txt_mensagem') . br().
                form_submit("btn_enviar","Enviar Mensagem").
                form_close();
        ?>
    </body>
</html>

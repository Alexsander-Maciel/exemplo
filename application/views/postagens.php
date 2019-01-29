<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Meu Blog</title>
    </head>
    <body>
        <?php 
        echo anchor(base_url(),"Home") .
        anchor(base_url("fale-conosco"), "Fale Conosco");
        ?>
        <h3>Meu Blog</h3>
        <h3>Postagens Recentes</h3>
        <?php
        foreach ($postagens as $post)
        {
            $lista_urls[] = anchor(base_url("/welcome/detalhes/".$post->id),$post->titulo);
        }
        echo ul($lista_urls);
        ?>
    </body>
</html>

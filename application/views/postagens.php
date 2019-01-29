<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Meu Blog</title>
    </head>
    <body>
        <h3>Meu Blog</h3>
        <?php
        foreach ($postagens as $post)
        {
            $lista_urls[] = anchor(base_url("detalhes/".$post->id),$post->titulo);
        }
        echo ul($lista_urls);
        ?>
    </body>
</html>

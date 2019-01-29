<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Meu Blog</title>
    </head>
    <body>
        <h3>Meu Blog</h3>
        <h3><?php echo $postagem[0]->titulo ?></h3>
        <p><?php echo $postagem[0]->texto ?></p>
        <p><?php echo $postagem[0]->data ?></p>
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

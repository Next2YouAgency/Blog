<article class="col-10 offset-1 bg-dark text-light">


<?php
$Post = $_GET['ID'];

$QueryBuscarPost = "SELECT * FROM posts WHERE id_post = $Post";

$ExeQrBuscarPost = mysqli_query($conn, $QueryBuscarPost);

while($rPost = mysqli_fetch_assoc($ExeQrBuscarPost)){
    $titulo = $rPost[titulo_post];
    $tema = $rPost[tema_post];
    $imgCapa = $rPost[img_capa];
    $img1 = $rPost[img1];
    $img2 = $rPost[img2];
    $img3 = $rPost[img3];
    
    
    //Buscar Tema do Post
    if(mysqli_num_rows($ExeQrBuscarPost) > 0){
        $QueryTema = "SELECT * FROM temas WHERE id_temas = $tema";

        $ExeQrTema = mysqli_query($conn, $QueryTema);
        while($rTema = mysqli_fetch_assoc($ExeQrTema)){
            echo "<p>Tema: <em>$rTema[titulo_tema]</em></p>";
        }
    }

    ?>
    <div class="col">
        <h2><?php echo $titulo?></h2>
        <h3><?php echo $autor?></h3>
    </div>
    <div class="col">
        <a href="index.php#PostsRecentes">Voltar</a>
    </div>
    <img src="<?php echo $imgCapa?>.jpg" class="img-fluid" alt="<?php echo $titulo?>" title="<?php echo $titulo?>">
    
    <?php
        
        //Buscar Conteudo do Post
    $QueryBuscarConteudo = "
        SELECT
        p.*, c.conteudo_post
        FROM posts p
        INNER JOIN conteudo_posts c
        ON p.conteudo_post = c.id_conteudo
    ";
    $ExeQrBuscarConteudo = mysqli_query($conn, $QueryBuscarConteudo);
        if(mysqli_num_rows($ExeQrBuscarConteudo) > 0){
           while($rConteudo = mysqli_fetch_assoc($ExeQrBuscarConteudo)){
               $conteudo = $rConteudo[conteudo_post];
               echo $conteudo;
           }
        }
    

}

?>

</article>
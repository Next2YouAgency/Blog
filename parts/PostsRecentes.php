<div class="col-12">
           <h1 class="text-center">Posts Recentes</h1>
        </div>
        
        <?php
            $QueryBuscarPost = "
            SELECT 
            p.*, t.titulo_tema
            FROM posts p 
            INNER JOIN temas t
            ON p.tema_post = t.id_temas
        ";
		
		$res = mysqli_query($conn, $QueryBuscarPost);
		
		if(mysqli_num_rows($res) > 0){
			while($Resultado = mysqli_fetch_assoc($res)){
                ?>
                <article class="col-12 col-md-4 col-lg-4 col-xl-3 bg-dark text-light">
                    <h2><?php echo $Resultado['titulo_tema'] ?></h2>
                    <p><?php echo $Resultado['titulo_post'] ?></p>
                    <div style="min-height:100px; max-height:180px; margin-bottom:10px" class="text-center">
                        <img src="<?php echo $Resultado['img_capa'] ?>.jpg" alt="<?php echo $Resultado['titulo_post'] ?>" class="img-fluid" style="max-height:150px">
                    </div>
                    <p class="">
                        <?php
                        $QueryConteudoPost = "SELECT * FROM conteudo_posts WHERE id_conteudo = $Resultado[conteudo_post]";
                
                        $ExeQrConteudoPost = mysqli_query($conn, $QueryConteudoPost);
                
                        while($ConteudoPost = mysqli_fetch_assoc($ExeQrConteudoPost)){
                            echo "<p>".Resumo($ConteudoPost['conteudo_post']) . " ...</p>";
                        }
                        ?>
                    </p>
                    <?php
                    $autor = $Resultado['autor_post'];
                    $QueryBuscarAutor = "SELECT * FROM autores WHERE id_autores = $autor";
                    $ExeQrBuscarAutor = mysqli_query($conn, $QueryBuscarAutor);
                        while($ResAutor = mysqli_fetch_assoc($ExeQrBuscarAutor)){
                            echo "<p>Autor: ".$ResAutor['nome_autor']."</p>";
                        }
                    ?>
                    <a href="index.php?Link=Post&ID=<?php echo $Resultado['id_post'] ?>" class="btn btn-light">Ver Matéria</a>
                </article>
                <?php
			}
		}
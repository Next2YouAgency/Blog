<?php
ob_start();
session_start();
require_once 'cnf/config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Blog N2Y</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/navega.js"></script>
    
    <link rel="icon" href="img/logo.png" type="image/png" sizes="16x16">
</head>
<body id="Topo">
   <div class="container-fluid" style="padding: 0">
    <header>
        <?php 
        
        include_once 'parts/conteudo-header.php';
       
        ?>
    </header>
    <div class="row">
        <?php
        if(!isset($_GET['Link'])){
        include_once 'parts/conteudo-banner.php';
        }
        ?>
    </div>
    <?php if(!isset($_GET['Link'])){ ?>
    <section id="QuemSomos" class="row">
        <?php include_once 'parts/conteudo-Quem-Somos.php'?>
    </section>
    <?php }?>
    <section id="PostsRecentes" class="row">
       <?php
        if(!isset($_GET['Link']) && $_GET['Link'] !== 'Post'){
            include 'parts/PostsRecentes.php';
        }else{
            include 'parts/LerPost.php';
        }
        ?>
        
    </section>
    <div class="row">
        <footer class="text-light bg-dark col-12">
            Rodappé do site
        </footer>
    </div>
    <div id="seta"><img src="img/seta.png" alt="Seta"></div>
   </div>
</body>
</html>
<?php ob_end_flush();?>
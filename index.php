<?php
    include_once('config/variables.php');
    session_start();
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= NAME?></title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH?>style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d234afb51c.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="menu-top">
        <div class="logo">
            <i class="far fa-moon fa-2x"></i>
            <h1><a href="home">Astrale</a></h1>
        </div>
        <div class="menu-toggle"></div>
        <?php 
            if($url == 'home'){ 
                
                ?>
                <nav class="nav">
                    <ul>
                        <li class="link"><a href="blog">Blog</a></li>
                        <li class="link"><a href="mapa">Mapa Astral</a></li>
                        <li class="login"><a href="#">Login</a></li>
                    </ul>
                </nav>
                <?php
            }else {
                ?>
                <nav class="nav">
            <ul>
                <li class="link"><a href="blog">Blog</a></li>
                <li class="link"><a href="mapa">Mapa Astral</a></li>
                <li class="login"><a href="#">José Ramos</a></li>
            </ul>
        </nav>
                <?php
            }
        ?>
        
    </header>
    <?php 
        //pegando a url
        if(file_exists("pages/".$url.".php")){
            //include nela
            // include("pages/".$url.".php");
        }else{
            //tratamento de rotas
            include("pages/404.php");
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="script/script.js"></script>
    <script >
            </script>
</body>
</html>
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
    <?php if($url != "blog" || $url != "home"){?>
    <link rel="stylesheet" href="style/style.css">
    <?php }else {?>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH?>style/blog.css">

    <?php }?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d234afb51c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    

</head>
<body>
    <header class="menu-top">
        <div class="logo">
            <i class="far fa-moon fa-2x"></i>
            <?php if($url == "blog"){?>
                <h1><a href="home">Astrale Blog</a></h1>
            <?php }else{ ?>
            <h1><a href="home">Astrale</a></h1>
            <?php } ?>
        </div>
        <div class="menu-toggle"></div>
        <?php 
            if($url == 'home' || $url == "login" || $url == "blog"){ ?>
                <nav class="nav">
                    <ul>
                        <li class="link"><a href="blog">Blog</a></li>
                        <li class="link"><a href="mapa">Mapa Astral</a></li>
                        <li class="login"><a href="login">Login</a></li>
                    </ul>
                </nav>
                <?php
            }else {
                ?>
        <nav class="nav">
            <ul>
                <li class="link"><a href="blog">Blog</a></li>
                <li class="link"><a href="mapa">Mapa Astral</a></li>
                <li class="link"><a href="conexoes">Conexões</a></li>
                <li class="link"><a href="mensagens">Mensagens</a></li>
                <li class="login"><a href="meuPerfil">Julia Soares</a></li>
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
            include("pages/".$url.".php");
        }else{
            //tratamento de rotas
            include("pages/404.php");
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="script/script.js"></script>
</body>
</html>
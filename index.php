<?php 
    require_once('functions/load_page.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <title id="title">Doces de Minas</title >
    <script src="js/change_title.js"></script>
</head>
<body>
    <header>
        <a href="index.php">
            <img src="images/logo.png" alt="" class="logo">
        </a>
    </header>
    <nav>
        <div class="container container-nav">
            <a href="index.php" class="nav-link">Home</a>
            <a href="index.php?page=quem_somos" class="nav-link">Quem somos</a>
            <a href="index.php?page=contato" class="nav-link">Contato</a>
            <a href="index.php?page=localizacao" class="nav-link">Localização</a>
        </div>
    </nav>
    <div class="topbar"></div>
    <div class="content">
        <div class="container">
            <?php load_page();?>
        </div>
    </div>
    <div class="bottombar"></div>
    <footer>
        <div class="container container-footer">
            <strong>João André Simiquelli</strong><br/>
            RA: 20121416-5
            <p>
                Disciplina: Back End I 53/2021 <br/>
                Sistemas para Internet
            </p>
        </div>
    </footer>
</body>
</html>
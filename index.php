<?php 
    require_once('functions/load_page.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Doces de Minas</title>

    <style>
        body{
            margin: 0;
            font-family: 'Nunito', sans-serif;
            letter-spacing: .1rem;
            background-color: #f9f9f9;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        header{
            height: 110px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('images/background_1.jpg');
            background-size: 200px;
        }

        .logo{
            width: 100px;
            height: 100px;
        }

        nav {
            border-bottom: 1px solid #CCC;
            background-color: #d40000;
            color: #FFF;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .topbar{
            height: 70px;
            background-image: url('images/background_2_600.png');
            background-size: 150px;
        }

        .bottombar{
            height: 70px;
            background-image: url('images/background_2_600.png');
            background-position:bottom;
            background-size: 150px;
        }

        .container{
            max-width: 900px;
            width: 100%;
        }

        .container-nav{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .content{
            width: 100%;
            min-height: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .nav-link{
            padding: 10px;
            font-weight: 600;
        }

        footer{
            display: flex;
            justify-content: center;
            background-color: #d40000;
            color: #FFF;
        }

        .container-footer{
            padding: 20px 0 20px 0;
            text-align: center;
            font-size: 0.9rem;
        }

        .card {
            text-align: center;
            width: 30%;
            margin-top: 30px;
        }

        @media(max-width: 899px){
            .card {
                width: 49%;
            }
        }

        .card img{
            width: 200px;
            height: 200px;
            border-radius: 150px;
        }

        .card a:hover{
            color:  #d40000;
        }

        .list-prod{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
    </style>
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
            <a href="index.php" class="nav-link">Quem somos</a>
            <a href="index.php" class="nav-link">Contato</a>
            <a href="index.php" class="nav-link">Localização</a>
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
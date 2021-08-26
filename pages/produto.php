<?php
    require_once('dados/produtos.php');
    require_once('functions/exibe_produto.php');

    if(isset($_GET['id'])){
        if(isset($produtos[$_GET['id']])){
            exibe_produto($produtos[$_GET['id']]);
        }
    }
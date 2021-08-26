<?php
    require_once('dados/produtos.php');
    require_once('functions/exibe_produto.php');

    if(isset($_GET['id'])){
        if(isset($produtos[$_GET['id']])){
            exibe_produto($produtos[$_GET['id']]);
            ?>
                <script>
                    change_title("Doces de Minas - <?php echo $produtos[$_GET['id']]['nome']?>");
                </script>
            <?php
        }
    }
?>
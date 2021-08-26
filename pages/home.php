<?php
    require_once('dados/produtos.php');
    require_once('functions/lista_produtos.php');
?>
<div class="list-prod">
    <?php lista_produtos($produtos);?>
</div>
<script>
    change_title("Doces de Minas");
</script>
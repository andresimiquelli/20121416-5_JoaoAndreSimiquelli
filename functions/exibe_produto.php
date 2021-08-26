<?php 
    function exibe_produto($produto){
?>
    <div class="prod">
        <div class="row flex">
            <img src="<?php echo "images/".$produto['imagem']?>" alt="<?php echo $produto['nome']?>" class="prod-img">
            <div class="prod-info">
                <h1><?php echo $produto['nome']?></h1>
                <h2>R$ <?php echo number_format($produto['preco'], 2, ',', '.')?> <span>/<?php echo $produto['peso']?></span></h2>
            </div>
        </div>
        <div class="row prod-desc">
            <?php echo $produto['descricao']?>
        </div>
        <div class="row" style="margin-bottom: 60px">
            <a href="?page=contato" class="button">Pedir agora</a>
        </div>
    </div>
<?php
    }
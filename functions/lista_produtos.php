<?php


function lista_produtos($produtos){
    foreach($produtos as $id => $prod){
?>
    <div class="card">
        <a href="?page=produto&id=<?php echo $id?>">
            <img src="images/<?php echo $prod['imagem']?>" alt="<?php echo $prod['nome']?>">
            <h2><?php echo $prod['nome']?></h2>
        </a>
    </div>
<?php
    }
}
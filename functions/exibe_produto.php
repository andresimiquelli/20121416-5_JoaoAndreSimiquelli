<style>

    .prod{
        margin-top: 30px;
    }

    .flex{
        display: flex;
        align-items: center;
    }

    @media(max-width: 700px){
        .flex{
            flex-direction: column;
        }

        .prod-img{
            margin-left: 0;
        }

        .prod-info{
            flex: 1;
            padding-left: 0;
        }
    }

    .prod-img{
        width: 300px;
        height: 300px;
        border-radius: 150px;
        margin-left: 30px;
    }

    .prod-info{
        flex: 1;
        padding: 20px;
    }

    .prod-info h1{
        color: #d40000;
    }

    .prod-info h2 span{
        color: #616161;
        font-size: 1rem;
    }

    .prod-desc{
        font-size: 1.3rem;
        padding: 30px;
    }

    .button{
        background-color: #d40000;
        padding: 10px 20px 10px 20px;
        font-size: 1.1rem;
        border-radius: 7px;
        color: #FFF;
        font-weight: 700;
        margin-left: 30px;
    }
</style>
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
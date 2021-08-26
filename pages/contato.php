<style>
    .form-contact{
        margin-bottom: 30px;
    }
    .form-contact div{
        padding: 15px;
        text-align: center;
    }
    .form-contact input{
        padding: 10px;
        border: 1px solid #616161;
        border-radius: 5px;
        font-size: 1rem;
        width: 100%;
        font-family: 'Nunito', sans-serif;
    }

    .form-contact textarea{
        padding: 10px;
        border: 1px solid #616161;
        border-radius: 5px;
        font-size: 1rem;
        width: 100%;
        font-family: 'Nunito', sans-serif;
    }

    .form-contact button{
        padding: 10px 20px 10px 20px;
        background-color: #d40000;
        color: #FFF;
        font-size: 1.1rem;
        font-weight: bold;
        border: 0;
        border-radius: 5px;
        cursor: pointer;
    }

    .message{
        margin: 40px;
        border: 1px solid #616161;
        border-radius: 14px;
        padding: 40px;
        text-align: center;
        font-size: 1.2rem;
    }
</style>

<?php
    if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "form";

    if($action == "form"):
?>
    <form action="?page=contato&action=enviar" method="POST" class="form-contact">
        <div><h1>Contato e Pedidos</h1></div>
        <div>
            <input type="text" placeholder="Nome" name="nome" required>
        </div>
        <div>
            <input type="email" placeholder="E-mail" name="email" required>
        </div>
        <div>
            <input type="text" placeholder="Telefone" name="telefone" required>
        </div>
        <div>
            <textarea name="mensagem" placeholder="Descreva aqui seu pedido ou mensagem" rows="9" required></textarea>
        </div>
        <div>
            <textarea name="endereco" placeholder="Endereço para entrega" rows="4"></textarea>
        </div>
        <div>
            <button>Enviar</button>
        </div>
    </form>
<?php endif ?>

<?php 
    if($action == "enviar"):
?>
    <div class="message">
        <strong>Sua mensagem foi envaida com sucesso!</strong>
        <p>Breve entraremos em contato.</p>
    </div>
<?php
    endif
?>
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

<script>
    change_title("Doces de Minas - Contato");
</script>
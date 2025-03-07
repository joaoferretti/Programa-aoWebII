<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="form-container">
        <h1>Formulário de Contato</h1>
        <form action="" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required><br><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" required></textarea><br><br>

            <button type="submit">Enviar</button>
        </form>

        <h2>Exemplo de URL GET para envio:</h2>
        <?php
            echo "<p><a href='controller.php?nome={$_POST['nome']}&telefone={$_POST['telefone']}&email={$_POST['email']}&mensagem={$_POST['mensagem']}' target='_blank'>Clique aqui para enviar por GET</a></p>";
        ?>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"] ?? "";
    $circuito = $_POST["circuito"] ?? "";
    
    echo "<div class='alert alert-success text-center'>Inscrição enviada com sucesso!<br>Nome: $nome<br>Circuito: $circuito</div>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAV - Formação para Primeiros Socorros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <header class="bg-dark text-white py-4 text-center">
        <div class="container">
            <h1 class="fw-bold">SAV</h1>
            <p class="fs-5">Formação para os primeiros socorros</p>
        </div>
    </header>

    <main class="container py-5 text-center">
        <h2 class="fw-bold">Bem-vindo(a) à <strong>Formação para Primeiros Socorros</strong></h2>
        <p class="text-muted">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p class="text-muted">
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </main>

    <section class="bg-light py-5 text-center">
        <div class="container">
            <img src="/public/logo512.png" alt="deserunt mollit anim id est laborum" class="img-fluid rounded shadow">
            <p class="text-muted mt-3">deserunt mollit anim id est laborum.</p>
        </div>
    </section>

    <section class="container py-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Inscreva-se Agora</h2>
            <p class="text-muted">Preencha o formulário abaixo para criar o seu perfil para os exercícios</p>
        </div>

        <form class="mx-auto" style="max-width: 400px;" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome completo" required>
            </div>

            <div class="mb-3">
                <label for="circuito" class="form-label">Número do Circuito</label>
                <input type="number" id="circuito" name="circuito" class="form-control" placeholder="Digite o número do circuito" min="1" required>
                <div class="form-text">Apenas números são aceitos</div>
            </div>

            <button type="submit" class="btn btn-dark w-100">Enviar Inscrição</button>
        </form>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p>© <?php echo date("Y"); ?> SAV.<br>Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

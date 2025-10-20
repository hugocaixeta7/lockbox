<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LockBox - Gerenciador de Notas Seguro</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <div class="container">
        <?php require base_path('views/partials/_navbar.view.php') ?>

        <?php require base_path('views/partials/_pesquisar.view.php') ?>

        <?php require base_path('views/partials/_mensagem.view.php'); ?>

        <div style="min-height: calc(100vh - 200px); padding: 2rem 0;">
            <?php require base_path("views/{$view}.view.php"); ?>
        </div>
    </div>

    <script src="assets/js/main.js"></script>
</body>

</html>
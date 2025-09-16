<!DOCTYPE html>
<html lang="pt-br" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lock Box</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="mx-auto max-w-screen-lg h-screen flex flex-col">
        <?php require base_path('views/partials/_navbar.view.php'); ?>
        <?php require base_path('views/partials/_pesquisar.view.php'); ?>

        <!-- Lista de notas -->
        <div class="flex flex-grow mt-8">
            <?php require base_path("views/{$view}.view.php");?>
        </div>
    </div>
</body>

</html>
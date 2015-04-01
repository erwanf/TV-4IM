<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Programme TV</title>
    <link rel="stylesheet" href="./public/css/bootstrap.css">
</head>
<body>
<?php include('./View/header/header.php'); ?>
<div>
    <?php include('./View/menus/menu.php'); ?>
    <!-- Balise d'affichage du contenu -->
    <?= $content; ?>
</div>
<?php include('./View/footer/footer.php'); ?>

</body>
</html>
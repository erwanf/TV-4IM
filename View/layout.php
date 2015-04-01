<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Programme TV</title>
    <link rel="stylesheet" href="./public/css/bootstrap.css">
</head>
<body>
<header>
    <h1>
        <a href="index.php">Super TV</a>
    </h1>
</header>

<nav>
    <a href="index.php?controller=chaine&action=showAll">Chaines</a>
    <a href="#">Test1</a>
    <a href="#">Test2</a>
    <a href="#">Plop</a>
    <a href="#">Plop2</a>
</nav>
<!-- Balise d'affichage du contenu -->
<?= $content;?>

<footer>
    <h6>IMIE - Ecole de la filière numérique</h6>
</footer>
</body>
</html>
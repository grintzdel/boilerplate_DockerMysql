<!DOCTYPE html>
<html>
<head>
    <title>Page test</title>
</head>
<body>
<h1>Page de test avec un nombre aléatoire</h1>
<p>
    <?php
    $randomNumber = rand(1, 100);
    echo "Votre nombre aléatoire est : " . $randomNumber;
    ?>
</p>
</body>
</html>
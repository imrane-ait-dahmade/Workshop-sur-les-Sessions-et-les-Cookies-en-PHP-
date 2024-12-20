<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
</head>
<body>
    <?php
     session_start();
    ?>
    <h2>Bonjour <?php echo $_SESSION['nom_SC']; ?>!</h2>
    
    <p><a href="logout.php">Se déconnecter</a></p>
</body>
</html>

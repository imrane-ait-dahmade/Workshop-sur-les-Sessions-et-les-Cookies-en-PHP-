<?php
// Démarre la session si nécessaire (cela peut être utile pour d'autres fonctionnalités)
session_start();

// Si le formulaire est soumis, on crée un cookie pour la préférence de langue
if (isset($_POST['language'])) {
    $language = $_POST['language'];
    setcookie('language', $language, time() + (86400 * 30), "/"); // Cookie valable 30 jours
    // Redirige pour éviter la resoumission du formulaire (post-refresh)
    header("Location: preferences.php");
    exit();
}

// Si le cookie existe, on récupère la préférence de langue
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'fr'; // Langue par défaut : français
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préférences de langue</title>
</head>
<body>

    <h1>Choisissez votre langue</h1>

    <!-- Formulaire pour changer la langue -->
    <form method="POST">
        <label for="language">Langue :</label>
        <select name="language" id="language">
            <option value="fr" <?php echo ($language == 'fr') ? 'selected' : ''; ?>>Français</option>
            <option value="en" <?php echo ($language == 'en') ? 'selected' : ''; ?>>Anglais</option>
            <option value="es" <?php echo ($language == 'es') ? 'selected' : ''; ?>>Espagnol</option>
        </select>
        <input type="submit" value="Enregistrer la préférence">
    </form>

    <hr>

    <!-- Message personnalisé basé sur le cookie de langue -->
    <h2>Message personnalisé</h2>
    <?php
    if ($language == 'fr') {
        echo "<p>Bienvenue sur notre site en français !</p>";
    } elseif ($language == 'en') {
        echo "<p>Welcome to our site in English!</p>";
    } elseif ($language == 'es') {
        echo "<p>¡Bienvenido a nuestro sitio en español!</p>";
    } else {
        echo "<p>Bienvenue sur notre site !</p>";
    }
    ?>

</body>
</html>

<?php
// Démarre la session
session_start();

// Détruit la session
session_destroy();

// Redirige vers la page de connexion

header("Location: log.php");
echo $_SESSION['nom_SC'];
exit();
?>
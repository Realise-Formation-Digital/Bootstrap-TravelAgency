<?php

// Désactive l'authentification des utilisateurs
    
    unset($_SESSION['auth']);
    // Détruit toutes les sessions en cours
    session_destroy();
    // Rediriger vers la page d'accueil

    header('Location: index.php');

php
<?php
// Récupère la clé API depuis Render
$apiKey = getenv('API_KEY');

// Vérifie si la clé est bien récupérée
if (!$apiKey) {
    echo "Clé API non trouvée.";
    exit;
}

// Affiche la clé pour test (à retirer en production)
echo "<h2>Clé API récupérée:</h2>";
echo "<p>". htmlspecialchars($apiKey). "</p>";
?>

php
<?php
$apiKey = getenv('API_KEY');

echo "<!DOCTYPE html><html lang='fr'><head><meta charset='UTF-8'><title>Guillaume Panel</title>";
echo "<style>body{font-family:sans-serif;padding:40px;}h1{color:#333;}.box{background:white;padding:20px;border-radius:8px;box-shadow:0 0 10px rgba(0,0,0,0.1);}</style>";
echo "</head><body><div class='box'><h1>Bienvenue sur Guillaume Panel</h1>";

if (!$apiKey) {
    echo "<p style='color:red;'>❌ Clé API non trouvée.</p>";
} else {
    echo "<p>✅ Clé API récupérée:</p><code>". htmlspecialchars($apiKey). "</code>";
}

echo "<hr><p>Panel prêt à se connecter à l'API Yoyo Media.</p></div></body></html>";

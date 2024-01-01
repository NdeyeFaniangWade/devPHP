<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 18 - Affichage de Motif</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        header {
            text-align: center;
            padding: 20px;
            background-color: #f2f2f2;
        }

        h1 {
            color: #333;
        }

        pre {
            font-family: monospace;
            white-space: pre-wrap;
        }
    </style>
    
</head>
<body>

    <header>
        <h1>Exercice 18 - Affichage de Motif</h1>
    </header>

    <pre>
<?php
// Afficher le motif
for ($i = 1; $i <= 10; $i++) {
    echo str_repeat($i, $i) . "\n";
}
?>
    </pre>

</body>
</html>

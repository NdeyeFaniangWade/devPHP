<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 15 - Transformation de Chaînes de Caractères</title>
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
        <h1>Exercice 15 - Transformation de Chaînes de Caractères</h1>
    </header>

    <?php
    // Fonction pour transformer chaque élément du tableau de chaînes
    function transformerChaines(&$tableau) {
        foreach ($tableau as &$chaine) {
            // Transformer la chaîne pour que le premier caractère soit en majuscule et les autres en minuscules
            $chaine = ucfirst(strtolower($chaine));
        }
    }

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si le champ de saisie existe
        if (isset($_POST['chaines'])) {
            // Récupérer les chaînes du formulaire
            $chaines = explode(',', $_POST['chaines']);

            // Appeler la fonction pour transformer les chaînes
            transformerChaines($chaines);

            // Afficher le résultat
            echo '<pre>';
            print_r($chaines);
            echo '</pre>';
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="chaines">Entrez les chaînes de caractères séparées par des virgules :</label>
        <input type="text" id="chaines" name="chaines" required>
        <input type="submit" value="Transformer">
    </form>

</body>
</html>

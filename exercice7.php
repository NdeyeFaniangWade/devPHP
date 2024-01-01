<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice - Nombre Parfait</title>
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

        form {
            margin-top: 20px;
            max-width: 400px;
            text-align: center;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
    
</head>
<body>

    <header>
        <h1>Exercice7 - Nombre Parfait</h1>
    </header>

    <?php
    // Fonction pour vérifier si un nombre est parfait
    function estNombreParfait($nombre) {
        $sommeDiviseurs = 0;

        // Trouver les diviseurs propres et les additionner
        for ($i = 1; $i <= $nombre / 2; $i++) {
            if ($nombre % $i == 0) {
                $sommeDiviseurs += $i;
            }
        }

        // Vérifier si la somme des diviseurs propres est égale au nombre
        return $sommeDiviseurs == $nombre;
    }

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si le champ de saisie existe
        if (isset($_POST['nombre'])) {
            // Récupérer le nombre du formulaire
            $nombre = $_POST['nombre'];

            // Appeler la fonction pour vérifier si le nombre est parfait
            $estParfait = estNombreParfait($nombre);

            // Afficher le résultat
            echo "<p>Le nombre $nombre " . ($estParfait ? "est" : "n'est pas") . " parfait.</p>";
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" id="nombre" name="nombre" required>
        <input type="submit" value="Vérifier">
    </form>

</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 - Nombre de tirages</title>
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

        p {
            color: #666;
        }

        section {
            margin-top: 20px;
        }

        h2 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
        
</head>
<body>

    <header>
        <h1>Exercice 3 - Nombre de tirages</h1>
    </header>

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si le champ de saisie existe
        if (isset($_POST['nombre'])) {
            // Récupérer le nombre du formulaire
            $nombre = $_POST['nombre'];

            // Vérifier si le nombre est un entier à trois chiffres
            if (ctype_digit($nombre) && strlen($nombre) === 3) {
                // Convertir le nombre en entier
                $nombre = (int)$nombre;

                // Initialiser le compteur de tirages
                $nombreTire = 0;

                // Réaliser des tirages aléatoires jusqu'à ce que le nombre soit obtenu
                while (rand(100, 999) !== $nombre) {
                    $nombreTire++;
                }

                // Afficher le nombre de tirages
                echo "<p>Le nombre $nombre a été obtenu en $nombreTire tirages aléatoires.</p>";
            } else {
                // Afficher un message d'erreur si le nombre n'est pas valide
                echo "<p>Veuillez saisir un nombre entier à trois chiffres.</p>";
            }
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nombre">Choisissez un nombre à trois chiffres :</label>
        <input type="text" id="nombre" name="nombre" required>
        <input type="submit" value="Valider">
    </form>

</body>
</html>

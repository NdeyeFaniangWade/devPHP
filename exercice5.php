<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 - Calculs pour un cercle en PHP</title>
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
        <h1>Exercice 5 - Calculs pour un cercle en PHP</h1>
        <p>Écrivez un programme en PHP qui calcule le diamètre, le périmètre et la surface d'un cercle dont le rayon est saisi au clavier.</p>
    </header>

    <section>
        <?php
        // Vérifier si le formulaire a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer le rayon saisi par l'utilisateur depuis le formulaire
            $rayon = $_POST["rayon"];

            // Fonction pour calculer le diamètre d'un cercle
            function calculerDiametre($rayon)
            {
                return $rayon * 2;
            }

            // Fonction pour calculer le périmètre d'un cercle
            function calculerPerimetre($rayon)
            {
                return 2 * M_PI * $rayon;
            }

            // Fonction pour calculer la surface d'un cercle
            function calculerSurface($rayon)
            {
                return M_PI * pow($rayon, 2);
            }

            // Calculer le diamètre, le périmètre et la surface du cercle
            $diametre = calculerDiametre($rayon);
            $perimetre = calculerPerimetre($rayon);
            $surface = calculerSurface($rayon);

            echo "<h2>Résultats :</h2>";
            echo "<p>Rayon saisi : $rayon</p>";
            echo "<p>Diamètre : $diametre</p>";
            echo "<p>Périmètre : $perimetre</p>";
            echo "<p>Surface : $surface</p>";
        } else {
            // Si le formulaire n'a pas été soumis, afficher le formulaire
            ?>
            <h2>Entrez le rayon du cercle :</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="rayon">Rayon : </label>
                <input type="number" name="rayon" id="rayon" min="0" required>
                <br>
                <button type="submit">Calculer</button>
            </form>
            <?php
        }
        ?>
    </section>

</body>
</html>

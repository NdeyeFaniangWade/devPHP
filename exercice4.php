<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 - Calcul du PPCM en PHP</title>
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
        <h1>Exercice 4 - Calcul du PPCM en PHP</h1>
        <p>Écrivez un programme en PHP qui permet de calculer le PPCM (Plus Petit Commun Multiple) de deux entiers saisis au clavier.</p>
    </header>

    <section>
        <?php
        // Vérifier si le formulaire a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer les entiers saisis par l'utilisateur depuis le formulaire
            $entier1 = $_POST["entier1"];
            $entier2 = $_POST["entier2"];

            // Fonction pour calculer le PPCM de deux nombres
            function calculerPPCM($a, $b)
            {
                $multiple = max($a, $b);

                while (true) {
                    if ($multiple % $a == 0 && $multiple % $b == 0) {
                        return $multiple;
                    }
                    $multiple++;
                }
            }

            // Calculer le PPCM des entiers saisis
            $ppcm = calculerPPCM($entier1, $entier2);

            echo "<h2>Résultat :</h2>";
            echo "<p>Le PPCM de $entier1 et $entier2 est : $ppcm</p>";
        } else {
            // Si le formulaire n'a pas été soumis, afficher le formulaire
            ?>
            <h2>Entrez deux entiers :</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="entier1">Entier 1 : </label>
                <input type="number" name="entier1" id="entier1" required>
                <br>
                <label for="entier2">Entier 2 : </label>
                <input type="number" name="entier2" id="entier2" required>
                <br>
                <button type="submit">Calculer le PPCM</button>
            </form>
            <?php
        }
        ?>
    </section>

</body>
</html>

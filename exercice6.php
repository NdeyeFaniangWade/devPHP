<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 - Affichage des diviseurs en PHP</title>
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
        <h1>Exercice 6 - Affichage des diviseurs en PHP</h1>
        <p>Écrivez un programme en PHP qui affiche l'ensemble des diviseurs d'un nombre saisi au clavier.</p>
    </header>

    <section>
        <?php
        // Vérifier si le formulaire a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer le nombre saisi par l'utilisateur depuis le formulaire
            $nombre = $_POST["nombre"];

            echo "<h2>Diviseurs de $nombre :</h2>";
            echo "<ul>";

            // Boucle pour trouver les diviseurs du nombre
            for ($i = 1; $i <= $nombre; $i++) {
                if ($nombre % $i === 0) {
                    echo "<li>$i</li>";
                }
            }

            echo "</ul>";
        } else {
            // Si le formulaire n'a pas été soumis, afficher le formulaire
            ?>
            <h2>Entrez un nombre :</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="nombre">Nombre : </label>
                <input type="number" name="nombre" id="nombre" min="1" required>
                <br>
                <button type="submit">Afficher les diviseurs</button>
            </form>
            <?php
        }
        ?>
    </section>

</body>
</html>

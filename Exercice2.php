<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 - Expression conditionnelle en PHP</title>
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
        <h1>Exercice 2 - Expression conditionnelle en PHP</h1>
        <p>Rédigez une expression conditionnelle pour tester si un nombre est à la fois un multiple de 3 et de 5.</p>
    </header>

    <section>
        <h2>Solution :</h2>
        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer le nombre saisi par l'utilisateur depuis le formulaire
            $nombre = $_POST["nombre"];

            // Expression conditionnelle pour tester si le nombre est à la fois un multiple de 3 et de 5
            if ($nombre % 3 === 0 && $nombre % 5 === 0) {
                echo "<p>Le nombre $nombre est à la fois un multiple de 3 et de 5.</p>";
            } else {
                echo "<p>Le nombre $nombre n'est pas un multiple de 3 et de 5 simultanément.</p>";
            }
        } else {
            
            ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="nombre">Entrez un nombre : </label>
                <input type="number" name="nombre" id="nombre" required>
                <button type="submit">Vérifier</button>
            </form>
            <?php
        }
        ?>
    </section>

</body>
</html>

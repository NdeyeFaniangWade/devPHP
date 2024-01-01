<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice - Calcul du Sinus</title>
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
        <h1>Exercice - Calcul du Sinus</h1>
    </header>

    <?php
    // Fonction pour calculer le sinus de l'angle en fonction de l'unité de mesure
    function calculerSinus($angle, $unite = 'radian') {
        // Convertir l'angle en radians si l'unité n'est pas déjà en radians
        if ($unite == 'degre') {
            $angle = deg2rad($angle);
        } elseif ($unite == 'grade') {
            $angle = deg2rad($angle * 9 / 10);
        }

        // Calculer et renvoyer le sinus
        return sin($angle);
    }

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si les champs existent
        if (isset($_POST['angle'], $_POST['unite'])) {
            // Récupérer les données du formulaire
            $angle = $_POST['angle'];
            $unite = $_POST['unite'];

            // Appeler la fonction pour calculer le sinus
            $sinus = calculerSinus($angle, $unite);

            // Afficher le résultat
            echo "<p>Le sinus de l'angle $angle $unite est : $sinus</p>";
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="angle">Entrez l'angle :</label>
        <input type="text" id="angle" name="angle" required>

        <label for="unite">Choisissez l'unité de mesure :</label>
        <select id="unite" name="unite">
            <option value="radian">Radian</option>
            <option value="degre">Degré</option>
            <option value="grade">Grade</option>
        </select>

        <input type="submit" value="Calculer">
    </form>

</body>
</html>

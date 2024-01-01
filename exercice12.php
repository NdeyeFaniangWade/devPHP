

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adresse Client</title>
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
        }

        legend {
            color: #007bff;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <header>
        <h1>Adresse Client</h1>
    </header>

    <?php
    // Traitement du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs du formulaire
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $adresse = $_POST["adresse"];
        $ville = $_POST["ville"];
        $codePostal = $_POST["codePostal"];

        // Afficher les données
        echo "<h2>Informations Client :</h2>";
        echo "<p>Nom : $nom</p>";
        echo "<p>Prénom : $prenom</p>";
        echo "<p>Adresse : $adresse</p>";
        echo "<p>Ville : $ville</p>";
        echo "<p>Code Postal : $codePostal</p>";
    }
    ?>

    <!-- Formulaire -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required>

        <label for="adresse">Adresse :</label>
        <input type="text" name="adresse" required>

        <label for="ville">Ville :</label>
        <input type="text" name="ville" required>

        <label for="codePostal">Code Postal :</label>
        <input type="text" name="codePostal" required>

        <input type="submit" value="Envoyer">
    </form>

</body>
</html>

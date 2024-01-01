<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 14 - Formulaire d'Agence Immobilière</title>
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
        <h1>Exercice 14 - Formulaire d'Agence Immobilière</h1>
    </header>
    
    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier quelle action a été sélectionnée
        if (isset($_POST['action'])) {
            $action = $_POST['action'];

            // Rediriger vers la page spécialisée en fonction de l'action choisie
            switch ($action) {
                case 'Vendre':
                    // Traiter ici l'action Vendre
                    echo "<p>Action Vendre traitée.</p>";
                    break;

                case 'Acheter':
                    // Traiter ici l'action Acheter
                    echo "<p>Merci d'avoir acheter.</p>";
                    break;

                case 'Louer':
                    // Traiter ici l'action Louer
                    echo "<p>Merci pour la location.</p>";
                    
                    break;

                default:
                    
                    break;
            }
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="submit" name="action" value="Vendre">
        <input type="submit" name="action" value="Acheter">
        <input type="submit" name="action" value="Louer">
    </form>

</body>
</html>

 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 15 - Calcul TVA</title>
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
        <h1>Exercice 15 - Calcul TVA</h1>
    </header>

    <?php
    // Fonction pour calculer le montant de la TVA et le prix TTC
    function calculerTVA($prixHT, $tauxTVA, &$montantTVA, &$prixTTC) {
        $montantTVA = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $montantTVA;
    }

    // Initialiser les variables
    $prixHT = isset($_POST['prixHT']) ? $_POST['prixHT'] : '';
    $tauxTVA = isset($_POST['tauxTVA']) ? $_POST['tauxTVA'] : '';
    $montantTVA = '';
    $prixTTC = '';

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si les champs existent
        if (isset($_POST['prixHT'], $_POST['tauxTVA'])) {
            // Récupérer les données du formulaire
            $prixHT = $_POST['prixHT'];
            $tauxTVA = $_POST['tauxTVA'];

            // Appeler la fonction pour calculer la TVA
            calculerTVA($prixHT, $tauxTVA, $montantTVA, $prixTTC);
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="prixHT">Prix HT :</label>
        <input type="text" id="prixHT" name="prixHT" value="<?php echo $prixHT; ?>" required>

        <label for="tauxTVA">Taux de TVA :</label>
        <input type="text" id="tauxTVA" name="tauxTVA" value="<?php echo $tauxTVA; ?>" required>

        <input type="submit" value="Calculer">
    </form>

    <?php if (isset($montantTVA, $prixTTC)) : ?>
        <h2>Résultats :</h2>
        <p>Montant de la TVA : <?php echo $montantTVA; ?></p>
        <p>Prix TTC : <?php echo $prixTTC; ?></p>
    <?php endif; ?>

</body>
</html>

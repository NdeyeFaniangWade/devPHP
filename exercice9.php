<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9 - Tableau multidimensionnel associatif en PHP</title>
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
        <h1>Exercice 9 - Tableau multidimensionnel associatif en PHP</h1>
        <p>Écrivez un tableau multidimensionnel associatif dont les clés sont des noms de personnes et les valeurs des tableaux associatifs dont les clés sont le prénom, la ville de résidence et l’âge de la personne avec une série de valeurs associées.</p>
    </header>

    <section>
        <?php
        // Tableau multidimensionnel associatif
        $personnes = array(
            'Mouhamadou' => array('prénom' => 'Mouhamadou', 'ville' => 'Dakar', 'âge' => 22),
            'Saliou' => array('prénom' => 'Saliou', 'ville' => 'Québec', 'âge' => 23),
            'Clara' => array('prénom' => 'Adja', 'ville' => 'London', 'âge' => 20),
            
        );

        // Afficher le tableau
        echo "<h2>Tableau multidimensionnel associatif :</h2>";
        echo "<pre>";
        print_r($personnes);
        echo "</pre>";
        ?>
    </section>

</body>
</html>

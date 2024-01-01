<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 11 - Boucle While en PHP</title>
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
        <h1>Exercice 11 - Boucle While en PHP</h1>
        <p>Utilisez une boucle while pour lire les tableaux des exercices 8 et 9.</p>
    </header>

    <section>
        <?php
        // Tableau associatif pour l'exercice 8
        $personnesExercice8 = array(
            'Khadim' => array('prénom' => 'Khadim', 'ville' => 'Dakar', 'âge' => 22),
            'Bintou' => array('prénom' => 'Bintou', 'ville' => 'Québec', 'âge' => 23),
            'Adja' => array('prénom' => 'Adja', 'ville' => 'London', 'âge' => 20),
            
        );

        // Tableau associatif pour l'exercice 9
        $personnesExercice9 = array(
            'Mouhamadou' => array('prénom' => 'Mouhamadou', 'ville' => 'Dakar', 'âge' => 22),
            'Saliou' => array('prénom' => 'Saliou', 'ville' => 'Québec', 'âge' => 23),
            'Clara' => array('prénom' => 'Adja', 'ville' => 'London', 'âge' => 20),
        );

        // Utiliser une boucle while pour afficher les informations des personnes de l'exercice 8
        echo "<h2>Informations des personnes - Exercice 8 :</h2>";
        echo "<ul>";
        reset($personnesExercice8);
        while ($nom = key($personnesExercice8)) {
            $infos = current($personnesExercice8);
            next($personnesExercice8);
            echo "<li><strong>$nom</strong>: ";
            echo "Prénom: {$infos['prénom']}, Ville: {$infos['ville']}, Âge: {$infos['âge']}</li>";
        }
        echo "</ul>";

        // Utiliser une boucle while pour afficher les informations des personnes de l'exercice 9
        echo "<h2>Informations des personnes - Exercice 9 :</h2>";
        echo "<ul>";
        reset($personnesExercice9);
        while ($nom = key($personnesExercice9)) {
            $infos = current($personnesExercice9);
            next($personnesExercice9);
            echo "<li><strong>$nom</strong>: ";
            echo "Prénom: {$infos['prénom']}, Ville: {$infos['ville']}, Âge: {$infos['âge']}</li>";
        }
        echo "</ul>";
        ?>
       

    </section>

</body>
</html>

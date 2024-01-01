<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 17 - Lecture de Tableaux Multidimensionnels</title>
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
        <h1>Exercice 17 - Lecture de Tableaux Multidimensionnels</h1>
    </header>

    <?php
    

    
    $tableauMultidimensionnel = array(
        'Personne1' => array('Nom' => 'Cissé', 'Prénom' => 'Mariama', 'Âge' => 30),
        'Personne2' => array('Nom' => 'Diouf', 'Prénom' => 'Ali', 'Âge' => 25),
        'Personne3' => array('Nom' => 'Wade', 'Prénom' => 'Karim', 'Âge' => 35)
    );

    // Appeler la fonction pour afficher le tableau
    afficherTableauMultidimensionnel($tableauMultidimensionnel);
    ?>
<?php
// Fonction pour afficher un tableau multidimensionnel sous forme de tableau XHTML
function afficherTableauMultidimensionnel($tableau) {
    echo '<table>';
    echo '<tr>';
    
    // Afficher les titres (clés)
    foreach (array_keys(current($tableau)) as $titre) {
        echo '<th>' . $titre . '</th>';
    }
    
    echo '</tr>';

    // Afficher les données
    foreach ($tableau as $ligne) {
        echo '<tr>';
        foreach ($ligne as $valeur) {
            echo '<td>' . $valeur . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
}
?>

</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 - Variables en PHP</title>
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
</head>
<body>

    <header>
        <h1>Exercice 1 - Variables en PHP</h1>
        <p>Vérifiez quels noms de variables sont valides en PHP.</p>
    </header>

    <section>
        <h2>Question :</h2>
        <p>Parmi les variables suivantes, lesquelles ont un nom valide : <code>mavar</code>, <code>$mavar</code>,
            <code>$var5</code>, <code>$_mavar</code>, <code>$_5var</code>, <code>$__élément1</code>, <code>$hotel4*</code> ?</p>

        <h2>Solution :</h2>
        <ul>
            <li><code>mavar</code> - Non valide (Manque '$') </li>
            <li><code>$mavar</code> - Valide</li>
            <li><code>$var5</code> - Valide</li>
            <li><code>$_mavar</code> - Valide</li>
            <li><code>$_5var</code> -  Valide </li>
            <li><code>$__élément1</code> - Valide</li>
            <li><code>$hotel4*</code> - Non valide (caractère non autorisé '*')</li>
        </ul>
    </section>

</body>
</html>

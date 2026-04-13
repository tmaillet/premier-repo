<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat PHP</title>
</head>
<body>
    <h1>Nom saisi :</h1>
    <div id="resultat" style="font-size: 24px; font-weight: bold;">
       <?php 

    if (isset($_POST['nom'])) {
        // On affiche le contenu de $_POST['nom'] en majuscules
        echo strtoupper(htmlspecialchars($_POST['nom'])); 
    } else {
        echo "Aucun nom n'a été saisi.";
    }  
        ?>
    </div>
    <br>
    <a href="index.php">Retour au formulaire</a>
</body>
</html>

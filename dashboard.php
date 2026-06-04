<?php
try {
    $bdd = new PDO("mysql:host=localhost;dbname=valorisation_pme", "root", "");
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $req = $bdd->prepare("INSERT INTO produits (nom_entreprise, nom_produit, description) VALUES (?, ?, ?)");
    $req->execute([$_POST['nom_entreprise'], $_POST['nom_produit'], $_POST['description']]);
    $message = "Produit enregistré avec succès !";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #ffffff; padding: 20px; }
        .container { max-width: 500px; margin: 0 auto; border: 1px solid #000; padding: 30px; }
        .champ-saisie, .zone-description { width: 100%; background-color: #ddd; border: none; border-radius: 15px; padding: 12px; margin-bottom: 25px; box-sizing: border-box; }
        .zone-description { height: 100px; resize: none; }
        .bouton-soumettre { width: 100%; background-color: #ddd; border: none; border-radius: 15px; padding: 12px; font-weight: bold; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ajouter un produit</h2>
        <?php if(isset($message)) echo "<p style='color:green;'>$message</p>"; ?>
        <form method="POST">
            <label>Nom entreprise :</label>
            <input type="text" name="nom_entreprise" class="champ-saisie" required>

            <label>Nom du produit :</label>
            <input type="text" name="nom_produit" class="champ-saisie" required>

            <label>Description :</label>
            <textarea name="description" class="zone-description" required></textarea>

            <button type="submit" class="bouton-soumettre">Enregistrer le produit</button>
        </form>
    </div>
</body>
</html>

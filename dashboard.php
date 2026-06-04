<?php
try {
    $bdd = new PDO("mysql:host=localhost;dbname=valorisation_pme", "root", "");
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $req = $bdd->prepare("INSERT INTO produits (nom_entreprise, nom_produit, description) VALUES (?, ?, ?)");
    $req->execute([$_POST['entreprise'], $_POST['nom_produit'], $_POST['description']]);
    $message = "Produit enregistré !";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Ajouter un produit</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #ffffff; }
        .container { padding: 20px; max-width: 500px; margin: 60px auto; }
        .form-box { border: 1px solid #000; padding: 40px 30px; position: relative; }
        .form-title { font-weight: bold; position: absolute; top: -15px; left: 30px; background: #fff; padding: 0 10px; }
        .champ-label { display: block; font-weight: bold; margin-bottom: 8px; }
        .champ-saisie, .zone-description { width: 100%; background-color: #ddd; border: none; border-radius: 15px; padding: 12px; margin-bottom: 25px; box-sizing: border-box; }
        .bouton-soumettre { width: 100%; background-color: #ddd; border: none; border-radius: 15px; padding: 12px; font-weight: bold; cursor: pointer; }
    </style>
</head>
<body>
    <main class="container">
        <div class="form-box">
            <span class="form-title">Ajouter un produit</span>
            <?php if(isset($message)) echo "<p>$message</p>"; ?>
            <form method="POST">
                <label class="champ-label">Nom entreprise :</label>
                <input type="text" name="entreprise" class="champ-saisie" value="Couture Excellence" required>

                <label class="champ-label">Nom du produit :</label>
                <input type="text" name="nom_produit" class="champ-saisie" required>

                <label class="champ-label">Description :</label>
                <textarea name="description" class="zone-description" required></textarea>

                <button type="submit" class="bouton-soumettre">Enregistrer le produit</button>
            </form>
        </div>
    </main>
</body>
</html>

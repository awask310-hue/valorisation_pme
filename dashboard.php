<?php
try {
    $bdd = new PDO("mysql:host=localhost;dbname=valorisation_pme", "root", "");
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Les 'name' ici doivent correspondre mot pour mot à ceux du formulaire en dessous
    if(isset($_POST['nom_entreprise'], $_POST['nom_produit'], $_POST['description'])) {
        $req = $bdd->prepare("INSERT INTO produits (nom_entreprise, nom_produit, description) VALUES (?, ?, ?)");
        $req->execute([
            $_POST['nom_entreprise'], 
            $_POST['nom_produit'], 
            $_POST['description']
        ]);
        $message = "Produit enregistré avec succès !";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord</title>
    <style>
        .container { max-width: 500px; margin: 50px auto; padding: 20px; border: 1px solid #ccc; font-family: sans-serif; }
        .champ { width: 100%; margin-bottom: 15px; padding: 10px; box-sizing: border-box; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ajouter un produit</h2>
        <?php if($message) echo "<p style='color:green;'>$message</p>"; ?>
        
        <form method="POST" action="">
            <label>Nom d'entreprise :</label><br>
            <input type="text" name="nom_entreprise" class="champ" required><br>

            <label>Nom du produit :</label><br>
            <input type="text" name="nom_produit" class="champ" required><br>

            <label>Description :</label><br>
            <textarea name="description" class="champ" required></textarea><br>

            <button type="submit">Enregistrer le produit</button>
        </form>
    </div>
</body>
</html>

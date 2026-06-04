<?php
try {
    $bdd = new PDO("mysql:host=localhost;dbname=valorisation_pme;charset=utf8", "root", "");
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}

$images = [
    "Boubou Traditionnel" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgFsdEKSyNW8Dx1uRA_ANGY24lm1gXlyT29A&s",
    "Robe Stylisée Wax" => "https://boutique-africaine.net/wp-content/uploads/2023/08/hyy-820307.jpg",
    "Sélection de Tissus Rares" => "https://www.newstoriesafrica.com/wp-content/uploads/2023/04/couse.decale_286246452_966360800713196_8046402954436370961_n.jpg"
];

$requete = $bdd->query("SELECT nom_produit FROM produits");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Présentation - Couture Excellence</title>
    <style>
        body { font-family: 'Arial', sans-serif; margin: 0; padding: 0; background-color: #ffffff; color: #000000; }
        .fiche-container { max-width: 900px; margin: 50px auto; padding: 20px; }
        .bloc-identite { border: 1px solid #000000; padding: 0 0 20px 0; margin-bottom: 30px; background-color: #c47f2c; border-radius: 8px; overflow: hidden; }
        .bloc-presentation, .bloc-produits { border: 1px solid #000000; padding: 30px; margin-bottom: 30px; background-color: #ffffff; }
        .grille-produits { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 20px; }
        .carte-produit { border: 1px solid #000000; border-radius: 10px; overflow: hidden; text-align: center; padding-bottom: 12px; }
        .image-produit { width: 100%; height: 220px; object-fit: cover; margin-bottom: 10px; border-bottom: 1px solid #000000; }
        .nom-produit { font-weight: bold; font-size: 14px; padding: 0 5px; }
    </style>
</head>
<body>
    <main class="fiche-container">
        <div class="bloc-identite">
            <img src="couverture.jpeg" alt="Couverture" style="width: 100%; height: 300px; object-fit: cover; border-bottom: 1px solid #000000;">
            <h1 style="color: #ffffff; margin-left: 30px;">Couture Excellence</h1>
        </div>

        <div class="bloc-presentation">
            <h2>Présentation de l'entreprise</h2>
            <p>Spécialisé dans la haute couture et le stylisme traditionnel à Dakar, Couture Excellence revisite les classiques du textile africain. Nous créons des pièces uniques sur-mesure à partir de Wax, de Bazin et de tissus tissés locaux, alliant modernité et respect des traditions sénégalaises.</p>
        </div>

        <div class="bloc-produits">
            <h2>Quelques produits de l'entreprise</h2>
            <div class="grille-produits">
                <?php while ($produit = $requete->fetch()) { 
                    $nom = $produit['nom_produit'];
                    $img = isset($images[$nom]) ? $images[$nom] : "https://via.placeholder.com/200";
                ?>
                    <div class="carte-produit">
                        <img src="<?php echo $img; ?>" alt="<?php echo htmlspecialchars($nom); ?>" class="image-produit">
                        <div class="nom-produit" style="margin-top: 10px;"><?php echo htmlspecialchars($nom); ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>

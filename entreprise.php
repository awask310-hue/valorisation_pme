<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation - Couture Excellence</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #000000;
        }
        .fiche-container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
        }
        .bloc-identite {
            border: 1px solid #000000;
            padding: 30px;
            margin-bottom: 30px;
            background-color: #ffffff;
        }
        .nom-entreprise {
            margin-top: 0;
            font-size: 28px;
            font-weight: bold;
        }
        .details-entreprise {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }
        .info-badge {
            background-color: #dddddd;
            padding: 8px 15px;
            border-radius: 15px;
            font-size: 14px;
            font-weight: bold;
        }
        .bloc-presentation, .bloc-produits {
            border: 1px solid #000000;
            padding: 30px;
            margin-bottom: 30px;
            background-color: #ffffff;
        }
        h2 {
            margin-top: 0;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .texte-description {
            font-size: 15px;
            line-height: 1.6;
        }
        .grille-produits {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .carte-produit {
            border: 1px solid #000000;
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            background-color: #ffffff;
            padding-bottom: 12px;
        }
        .image-produit {
            width: 100%;
            height: 220px;
            object-fit: cover;
            margin-bottom: 10px;
            border-bottom: 1px solid #000000;
        }
        .nom-produit {
            font-weight: bold;
            font-size: 14px;
            padding: 0 5px;
        }
    </style>
</head>
<body>
    <main class="fiche-container">
        <div class="bloc-identite" style="background-color: #c47f2c; border: 1px solid #000000; padding: 0 0 20px 0; margin-bottom: 30px; border-radius: 8px; overflow: hidden;">
            <img src="couverture.jpeg" alt="Artisans Couture Excellence" style="width: 100%; height: 300px; object-fit: cover; border-bottom: 1px solid #000000; margin-bottom: 20px;">
            
            <h1 class="nom-entreprise" style="color: #ffffff; margin-left: 30px; margin-top: 0; font-size: 28px; font-weight: bold;">Couture Excellence</h1>
            <div class="details-entreprise" style="display: flex; gap: 15px; margin-top: 15px; margin-left: 30px;">
                <span class="info-badge" style="background-color: rgba(255, 255, 255, 0.2); color: #ffffff; padding: 8px 15px; border-radius: 15px; font-size: 14px; font-weight: bold;">📍 Région : Dakar</span>
                <span class="info-badge" style="background-color: rgba(255, 255, 255, 0.2); color: #ffffff; padding: 8px 15px; border-radius: 15px; font-size: 14px; font-weight: bold;">💼 Secteur : Textile</span>
            </div>
        </div>

        <div class="bloc-presentation">
            <h2>Présentation de l'entreprise</h2>
            <p class="texte-description">
                Spécialisé dans la haute couture et le stylisme traditionnel à Dakar, Couture Excellence revisite les classiques du textile africain. Nous créons des pièces uniques sur-mesure à partir de Wax, de Bazin et de tissus tissés locaux, alliant modernité et respect des traditions sénégalaises.
            </p>
        </div>

        <div class="bloc-produits">
            <h2>Quelques produits de l'entreprise</h2>
            <div class="grille-produits">
                <div class="carte-produit">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgFsdEKSyNW8Dx1uRA_ANGY24lm1gXlyT29A&s" alt="Boubou Traditionnel" class="image-produit">
                    <div class="nom-produit" style="margin-top: 10px;">Boubou Traditionnel</div>
                </div>
                <div class="carte-produit">
                    <img src="https://boutique-africaine.net/wp-content/uploads/2023/08/hyy-820307.jpg" alt="Robe Stylisée Wax" class="image-produit">
                    <div class="nom-produit" style="margin-top: 10px;">Robe Stylisée Wax</div>
                </div>
                <div class="carte-produit">
                    <img src="https://www.newstoriesafrica.com/wp-content/uploads/2023/04/couse.decale_286246452_966360800713196_8046402954436370961_n.jpg" alt="Sélection de Tissus Rares" class="image-produit">
                    <div class="nom-produit" style="margin-top: 10px;">Sélection de Tissus Rares</div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
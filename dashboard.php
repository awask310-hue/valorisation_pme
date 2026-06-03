<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Ajouter un produit</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }
        .container {
            padding: 20px;
            max-width: 1100px;
            margin: 0 auto;
        }
        .form-box {
            border: 1px solid #000000;
            padding: 40px 30px;
            max-width: 500px;
            margin: 60px auto; 
            background-color: #ffffff;
            position: relative; 
        }
        .form-title {
            font-size: 22px;
            font-weight: bold;
            position: absolute;
            top: -15px; 
            left: 30px;
            background: #ffffff; 
            padding: 0 10px; 
        }
        .champ-label {
            display: block;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 8px;
            text-align: left;
        }
        .champ-saisie {
            width: 100%;
            background-color: #dddddd; 
            border: none;
            border-radius: 15px; 
            padding: 12px;
            box-sizing: border-box; 
            margin-bottom: 25px; 
            font-size: 14px;
        }
        .zone-description {
            width: 100%;
            background-color: #dddddd;
            border: none;
            border-radius: 15px;
            padding: 12px;
            box-sizing: border-box;
            margin-bottom: 25px;
            font-size: 14px;
            height: 120px; 
            resize: none; 
        }
        .bouton-soumettre {
            width: 100%;
            background-color: #dddddd;
            color: #000000;
            border: none;
            border-radius: 15px;
            padding: 12px;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <main class="container">
        <div class="form-box">
            <span class="form-title">Ajouter un produit</span>
            <form>
                <label class="champ-label">Nom entreprise ou artisan :</label>
                <input type="text" class="champ-saisie" value="Couture Excellence">

                <label class="champ-label">Nom du produit textile :</label>
                <input type="text" class="champ-saisie" placeholder="Ex: Boubou traditionnel, Tissu Wax...">

                <label class="champ-label">Description du produit :</label>
                <textarea class="zone-description" placeholder="Décrivez les matériaux, la taille, le style..."></textarea>

                <button type="submit" class="bouton-soumettre">Enregistrer le produit</button>
            </form>
        </div>
    </main>
</body>
</html>
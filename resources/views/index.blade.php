<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <link href={{ asset('css/style.css') }} rel="stylesheet">
    <title>Cartel de pétrole</title>
</head>
<body>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a href="#" class="nav-link">Accueil</a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="CompanieDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Companie
            </a>
            <ul class="dropdown-menu" aria-labelledby="CompanieDropDown">
                <li><a href="#" class="dropdown-item">Consulter</a></li>
                <li><a href="#" class="dropdown-item">Ajouter</a></li>
                <li><a href="#" class="dropdown-item">Modifier</a></li>
                <li><a href="#" class="dropdown-item">Supprimer</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="GisementDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Gisement
            </a>
            <ul class="dropdown-menu" aria-labelledby="GisementDropDown">
                <li><a href="#" class="dropdown-item">Consulter</a></li>
                <li><a href="#" class="dropdown-item">Ajouter</a></li>
                <li><a href="#" class="dropdown-item">Modifier</a></li>
                <li><a href="#" class="dropdown-item">Supprimer</a></li>
            </ul>
        </li>
    </ul>
    <h1>LE CARTEL DE PÉTROLE</h1>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
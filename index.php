<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidéothèque</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="javascript.js">

    <!--Bootstrap pour le carousel-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <div class="topnav">
        <img class="cam" src="https://zupimages.net/up/21/01/8ubl.png" />
        <a href="file:///home/johan/Bureau/Vid%C3%A9oth%C3%A8que/index.html">Vidéothèque</a>
    </div>
</head>

<body>
    
    <form  method="post">


   <p> Titre : </p> <input type="text" name="titre" >
   <p> Synopsis : </p> <input type="text" name="synopsis" >
   <p> Genre : </p> <input type="text" name="genre" >
   <p> Realisateur : </p> <input type="text" name="realisateur" >
   <p> Acteur : </p> <input type="text" name="acteur" >

   <input type="submit">


</form>

</body>
</html>

<?php
if (isset($_POST['titre']) && isset($_POST['synopsis']) &&  isset($_POST['genre']) && isset($_POST['realisateur']) &&isset($_POST['acteur']) ) {

$bdd = new PDO('mysql:host=localhost;dbname=film;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $reponse = $bdd->query('SELECT * FROM info');

    $requete = 'INSERT INTO info VALUES(NULL,"'. $_POST['titre'] . '","'. $_POST['synopsis'] . '" ,"'. $_POST['genre'] . '" ,"'. $_POST['realisateur'] . '" ,"'. $_POST['acteur'] . '")';
$resultat = $bdd->query($requete);
}
?>

    <!--Section "ajouter et modifier un film".-->
    <div class="grid-container">
        <h1 class="h1">&#x2b;Ajouter un film</h1>
        <h1 class="h2">&#x2b;Modifier un film</h1>
    </div>

    <div class="grid-container2">
        <h3 class="h3">Filtrer</h3>
        <h3 class="h4">Genre</h3>
        <h3 class="h5">Réalisateur</h3>
    </div>

<h1 class="filmdumoment">Film du moment !</h1>
    <div class="container">
        <div class="row">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://zupimages.net/up/21/01/i8f7.jpeg" class="d-block w-500" alt="...">
                        <h1>L'exorciste</h1>
                    </div>
                    <div class="carousel-item">
                        <img src="https://zupimages.net/up/21/01/f0uj.jpeg" class="d-block w-500" alt="...">
                        <h1>La none</h1>
                    </div>
                    <div class="carousel-item">
                        <img src="https://zupimages.net/up/21/01/ouwq.jpeg" class="d-block w-500" alt="...">
                        <h1>Donnie Darko</h1>
                    </div>
                    <div class="carousel-item">
                        <img src="https://zupimages.net/up/21/01/bf02.jpeg" class="d-block w-500" alt="...">
                        <h1>Dark Touch</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
<h1 class="toutlesfilms">Tous les films</h1>
    <div class="grid-container3">
        <img src="https://zupimages.net/up/21/01/i8f7.jpeg" class="f1">
        <img src="https://zupimages.net/up/21/01/f0uj.jpeg" class="f2">
        <img src="https://zupimages.net/up/21/01/ouwq.jpeg" class="f3">
        <img src="https://zupimages.net/up/21/01/bf02.jpeg" class="f4">
        <img src="https://zupimages.net/up/21/01/1mdh.jpeg" class="f5">
        <img src="https://zupimages.net/up/21/01/4fzg.jpeg" class="f6">
        <img src="https://zupimages.net/up/21/01/7xa0.jpeg" class="f7">
    
    </div>

</body>

</html>

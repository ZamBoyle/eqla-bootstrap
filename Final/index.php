<?php include "./Includes/mybootstrap.php"; ?>
<?php include "./Includes/myMenu.php"; ?>
<?php
AddTop("Page d'accueil");
DisplayMenu();
?>
<!-- Votre code HTML à mettre en-dessous -->
<div class="container">
    <div class="mt-2 jumbotron bg-dark text-white">
        <h1>Hello</h1>
        <p>Fiers de notre savoir faire, venez découvrir nos cupcakes faits avec Amour et Passion depuis déjà 20 ans.
            C'est une histoire familiale où
        </p>
        <div id="monCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid w-50" src="./Images/cupcake1.jpg" alt="Los Angeles, arrivée d'un groupe sur scène."> Le Pinky <a href="">plus de photos</a>.
                </div>
                <div class="carousel-item">
                    <img class="img-fluid w-25" src="./Images/cupcake2.jpg" alt="chicago, image d'un chanteur sur scène avec une guitare.">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid w-50" src="./Images/cupcake3.jpg" alt="New-York, image dans la foule en direction de la scène.">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid w-50" src="./Images/cupcake3.jpg" alt="New-York, image dans la foule en direction de la scène.">
                </div>
            </div>
            <!-- Contrôles Précédent et Suivant -->
            <a class="carousel-control-prev" href="#monCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
            </a>
            <a class="carousel-control-next" href="#monCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>
</div>
<?php AddBottom(); ?>
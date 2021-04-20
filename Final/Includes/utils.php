<?php

//TO DO: Pour la recherche pour montrer un exemple avec les Table Bootstrap.
function DisplayProductsInTable($products):void{
    
}

function DisplayProducts($products):void{
    foreach ($products as $product) {
        $product->DisplayProduct();
    }
}

function DisplayCarouselItems(){
    $productsDB = new ProductsDB();
    $cpt=0;
    foreach ($productsDB->Products as $product) {
        $active = $cpt++ == 0 ? " active" : "";
        echo "
        <div class='carousel-item $active'>
        <img class='img-fluid img-thumbnail product'  src='./Images/$product->ImageName' aria-label='$product->Name'>
        </div>
        ";
    }
}

function DisplayCarousel(){
    ?>
    <div id="monCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner text-center">
            <?php DisplayCarouselItems(); ?>
        </div>
        <!-- Contrôles Précédent et Suivant -->
        <a class="carousel-control-prev" href="#monCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#monCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span  class="sr-only">Suivant</span>
        </a>
    </div>
    <?php
}
?>
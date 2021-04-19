<?php
include "./Includes/page.php";
include "./Includes/productsData.php";
include "./Includes/utils.php";

$db = new ProductsDB();
$db->Products = array();

//On ajoute le titre "Page des produits" de la page et on envoie du code html, ici un code js qui fait coucou à la console
AddTop("Page d'accueil", "<script>console.log('Message envoyé dans la console JS depuis le <HEAD>');</script>");
?>
<!-- Votre code HTML à mettre en-dessous -->
<div class="container">
    <div class="jumbotron bg-dark text-white text-justify mt-2">
        <h2>Crazy Cupcakes</h2>
        <p>Fiers de notre savoir faire, venez découvrir nos <span class="font-italic">Crazy Cupcakes</span> faits avec Amour et Passion depuis déjà 20 ans.
            C'est une histoire familiale que vous pourrez <a href="about.php">découvrir</a>.
        </p>
        <?php DisplayCarousel((new ProductsDB())->Products); ?>
    </div>
</div>

<!-- On ajoute le bas de la page avec éventuellement du html supplémentaire à passer en paramètre -->
<?php AddBottom(
    "<div class='position-absolute mr-1'  style='bottom:0; right:0;'>
        <hr class='mb-0'/>
        (c) 2021 <img class='d-inline-block mb-1' height='15' src='./Images/logo.png' aria-label='Logo compagnie' /> <span class='font-italic'>Crazy Cupcakes</span>
    </div>"
);
?>
<?php
include "./Includes/page.php";
include "./Includes/productsData.php";
include "./Includes/utils.php";

AddTop("Page des produits");
?>
<!-- Votre code HTML à mettre en-dessous -->
<div class="container my-1 rounded text-justify    ">
    <h1 class="text-center">Produits - Cupcakes</h1>
    <p>Voici une liste de nos produits dont la composition a été étudiée durant de 20 ans. Avec Amour et savoir faire, voici nos Crazy Cupcakes qui, nous l'espérons, vous régalerons et vous rendrons complétement Crazy d'eux.🤪🤤😊</p>
    <?php DisplayProducts((new ProductsDB())->Products); ?>
</div>

<?php AddBottom("<script>console.log('Message envoyé dans la console JS depuis le <BODY>');</script>"); ?>
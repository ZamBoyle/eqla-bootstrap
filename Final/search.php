<?php include "./Includes/mybootstrap.php"; ?>
<?php include "./Includes/myMenu.php"; ?>
<?php
AddTop("Recherche");
DisplayMenu();
?>
<div class="container bg-light">
    <h1>Recherche</h1>

    <?php
    if (!empty($_POST["what"])) {
    ?>
        <p>Vous avez cherché ce produit:<?php echo $_POST["what"]; ?></p>
        <p>Désolé celui-ci n'a pas été trouvé dans notre base de données de produits...</p>
    <?php

    }
    ?>
</div>
<?php AddBottom(); ?>
<?php include "./Includes/page.php"; ?>
<?php include "./Includes/productsData.php"; ?>
<?php include "./Includes/utils.php"; ?>
<?php
AddTop("Contacts");

$db = new ProductsDB();
$product = $db->GetProductById(5);
DisplayProducts($db->GetProductsByStock(100));
?>

<div class="container bg-light mt-2 border rounded">
    <h1 class="text-center">Contacts</h1>
 <p>Nous sommes joignable via les plateformes suivantes:</p>
 <p><i class="bi bi-facebook" aria-label="facebook"></i> <i class="bi bi-twitter" aria-label="twitter"></i> <i class="bi bi-instagram" aria-label="instagram"></i> <i class="bi bi-linkedin" aria-label="linkedin"></i> <i class="bi bi-twitch" aria-label="twitch"></i> <i class="bi bi-discord" aria-label="discord"></i></p>

 <p>N'hésitez pas à nous poser vos questions.</p>
</div>

<?php AddBottom("<script src='../js/site.js'></script>"); ?>
<?php
include "./Includes/menu.php";

/**
 * Ajoute le top de la page: depuis <!DOCTYPE html> jusqu'à <body>
 * 
 * $title titre de la page
 * $myHead code HTML à éventuellement ajouter dans le HEAD
 */
function AddTop($title, $myHead = "")
{
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php AddCSS(); ?>
        <link rel="stylesheet" href="./css/site.css">                
        <?php echo $myHead; ?>
        <title><?php echo $title ?></title>
    </head>

    <body>
    <?php
        DisplayMenu();
}

/**
 * Ajoute le bas de la page: depuis </body> jusqu'à </html>
 * 
 * $myBottom code HTML à éventuellement ajouter juste avant </body>
 */
function AddBottom($myBottom = "")
{
    AddJS();
    echo $myBottom;
    ?>
    </body>

    </html>
<?php
}

/**
 * Ajoute le code HTML pour le chargement des fichiers CSS de Bootstrap
 */
function AddCSS()
{
?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<?php
}

/**
 * Ajoute le code HTML pour le chargement des fichiers JS nécessaires pour Bootstrap
 */
function AddJS()
{
?>
    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<?php
}
?>
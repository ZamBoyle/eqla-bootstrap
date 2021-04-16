<?php
function DisplayMenu($isFluid = true)
{
    //<img class="d-inline-block align-top" width="30" height="30" src="https://static.thenounproject.com/png/88781-200.png" aria-label="Logo compagnie" /> My 
    //<div class="' . ($isFluid  ? "container-fluid" : "container") . '">
    $menu = '
    <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img class="d-inline-block align-top" width="30" height="30" src="./Images/logo.png" aria-label="Logo compagnie" /> Crazy Cupcakes</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContenu" aria-controls="navbarContenu" aria-expanded="false" aria-label="Toggle navigation">                <span class="navbar-toggler-icon"></span>            </button>
                <div id="navbarContenu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">'
        . GetItems() .
        '</ul>
                    <i class="bi bi-cart mr-2 p-1 border text-white" title="Panier"></i>
                    <form class="form-inline my-2 my-lg-0" action="#" method="post">
                        <input name="what" class="form-control mr-sm-2" type="search" placeholder="Rechercher produits" aria-label="Rechercher produits">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" aria-label="Rechercher">Rechercher</button>
                    </form>
                </div>
            </nav>
    </div>';
    echo $menu;
}

function GetPages()
{
    $pages = array(
        "Accueil" => "index.php",
        "Produits" => "produits.php",
        "A propos" => "about.php",
        "Contacts" => "contacts.php"
    );
    return $pages;
}

function GetItems()
{
    $lis = "";
    foreach (GetPages() as $page => $url) {
        $lis .= "<li class='nav-item " . IsActive($url) . "'><a class='nav-link' href='$url'>$page </a></li>";
    }
    return $lis;
}

function IsActive($url)
{
    $pageName = strtolower($_SERVER['SCRIPT_NAME']);
    $myUrl = strtolower($url);
    return stripos($pageName, $myUrl) !== false ? " active":""; 
}
<?php
function DisplayMenu($activeItem)
{
echo '
    <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img class="d-inline-block align-top" width="30" height="30" src="https://static.thenounproject.com/png/88781-200.png" /> My company</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContenu" aria-controls="navbarContenu" aria-expanded="false" aria-label="Toggle navigation">                <span class="navbar-toggler-icon"></span>            </button>
                <div id="navbarContenu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.html">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="produits.html">Produits</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">A propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacts">Contacts</a></li>                    
                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
                        <input class="form-control mr-sm-2" type="search" placeholder="Rechercher produits" aria-label="Rechercher produits">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" aria-label="Rechercher">Rechercher</button>
                    </form>
                </div>
            </nav>
        </div>';
}

function GetItems($activeItem){

    $li = '<li class="nav-item active"><a class="nav-link" href="index.html">$title</a></li>';
/*                         <li class="nav-item active"><a class="nav-link" href="index.html">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="produits.html">Produits</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">A propos</a></li>
                        <li class="nav-item"><a class="nav-link" href="contacts">Contacts</a></li> */    
    return ":)";
}

<?php
include "./Includes/page.php";
include "./Includes/productsData.php";
include "./Includes/utils.php";

AddTop("Recherche");
?>
<div class="container bg-light">
    <h1>Recherche de produits</h1>
    <?php
    DisplaySearchForm();
    if (!empty($_POST["what"])) {
        $searchBy = "";
        if (!empty($_POST["searchBy"])) {
            $searchBy = $_POST["searchBy"];
        }
        $what = strtolower($_POST["what"]);
        $db = new ProductsDB();
        $produits = array();
        switch ($searchBy) {
            case 'something':
                $produits = $db->GetProductsBySomething($what);
                break;
            case 'productName':
                $produits = $db->GetProductsByName($what);
                break;
            case 'descriptionName':
                $produits = $db->GetProductsByDescription($what);
                break;
            case 'inStock':
                $produits = $db->GetProductsAvailable($what);
                break;
            case 'numberInStock':
                if (is_int($what)) {
                    $produits = $db->GetProductsByStock($what);
                }
                break;
            case 'tag':
                $produits = $db->GetProductsAvailable($what);
                break;
            default:
                echo "<p class='alert alert-warning'>Recherche non reconnue...$searchBy</p>";
                break;
        }
        if (count($produits) == 0) {
            echo "<div class='alert alert-danger p-2'>";
            echo "<p>Désolé <span class='font-weight-bold font-italic'>$what</span> n'a pas été trouvé dans notre base de données de produits...</p>";
            echo "</div>";
        } else {
            echo "<div class='alert alert-success p-2'>";
            echo "<p><span class='font-weight-bold font-italic'>$what</span> a été trouvé dans notre liste de <a href='produits.php'>produits</a>.</p>";
            echo "</div>";
            DisplayProducts($produits);
        }
    } else {
        echo "<div class='alert alert-danger p-2'>";
        echo "<p>Vous n'avez pas entré ce que vous cherchez...</p>";
        echo "</div>";
    }
    ?>
    <br /><br /><br /><br /><br /><br /><br /><br />
</div>
<?php AddBottom(); ?>


<?php
function RadioButtonIsChecked($radioButtonSearchBy){
    $searchBy = "something";
    if (!empty($_POST["searchBy"])) {
        $searchBy = $_POST["searchBy"];
    }
}

function DisplaySearchForm()
{
?>
    <form action="search.php" method="post">
        <div class="form-group">
            <input name="what" type="text" class="form-control" id="searchInput" aria-describedby="Zone de rechercher" placeholder="Que recherchez-vous ?" required>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="searchBy" id="exampleRadios1" value="option2" <?php RadioButtonIsChecked("")?>>
                    <label class="form-check-label" for="exampleRadios2">
                        Recherche par <span class='font-weight-bold font-italic'>nom</span> de produit.
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="searchBy" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Recherche par <span class='font-weight-bold font-italic'>description</span> de produit.
                    </label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="searchBy" id="exampleRadios3" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Recherche des produits <span class='font-weight-bold font-italic'>en stock</span>.
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="searchBy" id="exampleRadios4" value="option1" checked=false>
                    <label class="form-check-label" for="exampleRadios1">
                        Recherche par <span class='font-weight-bold font-italic'>nom, description, et tags</span>.
                    </label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col float-right">
                <button class="btn btn-primary my-2 my-sm-0 text-right" type="submit" aria-label="Rechercher">Rechercher</button>
                <input type="hidden" name="searchBy" value="something">
            </div>
        </div>
    </form>
    <br/>
<?php
} ?>
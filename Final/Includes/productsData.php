<?php

class Product
{
    public int $Id;
    public string $Name;
    public string $Description;
    public string $ImageName;
    public array $Tags;

    public function __construct(int $Id, string $Name, string $Description, string $ImageName, int $Stock, array $Tags)
    {
        $this->Id = $Id;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->ImageName = $ImageName;
        $this->Stock = $Stock;
        $this->Tags = $Tags;
    }

    public function DisplayProduct(): void
    {
        echo "
        <div class='d-inline-block my-1 p-2 bg-light border rounded text-justify'>
        <h2>$this->Name</h2>
        <img class='img-fluid img-thumbnail product float-left mr-2' src='./Images/$this->ImageName' aria-label='$this->Name'>
        <p>$this->Description.</p>
        <button class='btn btn-primary' aria-label='Ajouter au panier'><i class='bi bi-cart'></i> Ajouter</button>
        </div>
        ";
    }
}

class ProductsDB
{
    public array $Products;
    public function __construct()
    {
        $this->Products = $this->GetProductsFromFakeDB();
    }

    public function __get($Products): array
    {
        return $Products;
    }

    private function GetProductsFromFakeDB(): array
    {
        $products = array(
            new Product(1, "Le Pinky", "Marzipan tootsie roll dragée cake. Lollipop gummies sweet chocolate cake sweet roll candy canes tiramisu fruitcake. Fruitcake sweet roll gummi bears pudding carrot cake cookie sweet tiramisu halvah. Gummi bears donut gummi bears chocolate cake biscuit. Chocolate cake tiramisu tart chocolate cake chocolate. Macaroon ice cream pudding icing jelly. Gummi bears wafer brownie wafer cake jelly gingerbread gummi bears. Gingerbread lemon drops halvah macaroon jelly gummi bears soufflé cookie oat cake. Macaroon tiramisu pie apple pie oat cake cake pastry. Gummi bears dragée bonbon halvah cotton candy brownie pie sugar plum. Tart cotton candy dessert sesame snaps sweet brownie cotton candy chocolate cake marzipan. Icing dessert ice cream sweet sesame snaps topping cookie cake. Jelly ice cream liquorice.", "cupcake1.jpg", 10, ["vanille"]),
            new Product(2, "Le Brown", "Sweet halvah bonbon danish toffee bear claw candy chocolate bar carrot cake. Marzipan cupcake oat cake bonbon chocolate cake macaroon. Cake cotton candy candy canes sesame snaps marzipan icing danish cookie powder. Lollipop cookie gingerbread oat cake cake cake fruitcake. Tart caramels cheesecake jelly beans sesame snaps. Wafer chocolate cake ice cream dragée lemon drops donut powder. Cupcake cupcake caramels wafer powder wafer pastry. Candy donut dragée danish. Muffin bear claw oat cake cheesecake. Powder oat cake candy canes donut. Soufflé cupcake chocolate bar cotton candy croissant dessert dessert tootsie roll. Croissant cotton candy icing.", "cupcake2.jpg", 5, ["cupcake", "caramel"]),
            new Product(3, "Le Caramel", "Sugar plum gingerbread biscuit topping pudding croissant sweet roll chupa chups topping. Cake sugar plum gummies jelly beans. Halvah jelly wafer carrot cake cupcake. Marzipan sweet roll fruitcake cotton candy wafer. Cake jujubes wafer. Sweet marzipan brownie wafer bear claw. Dragée lollipop gummies gummi bears jelly-o biscuit oat cake marzipan. Cheesecake toffee tiramisu. Cookie biscuit oat cake. Halvah tootsie roll cake halvah jujubes toffee bonbon soufflé jelly-o. Dessert pudding apple pie. Jelly cookie jelly beans chocolate bar bonbon brownie", "cupcake3.jpg", 2, ["caramel", "oeuf", "oeufs "]),
            new Product(4, "Le Blue", "Sweet roll ice cream jelly beans. Soufflé marzipan jelly beans cheesecake. Cookie cake candy canes pudding soufflé bonbon cookie. Caramels icing donut tiramisu caramels. Sugar plum apple pie sugar plum gummi bears jelly beans sesame snaps tiramisu. Wafer jujubes apple pie marzipan jelly soufflé. Chocolate pie icing chocolate bar. Gummies pie donut pie. Jelly beans jujubes croissant gummies marshmallow. Icing dragée pastry danish. Cotton candy jelly beans apple pie cupcake biscuit cupcake. Muffin marshmallow toffee. Toffee chupa chups carrot cake.", "cupcake4.jpg", 3, []),
            new Product(5, "Le Rainbow", "Apple pie pie fruitcake. Candy canes jujubes halvah wafer brownie tart dessert candy canes gingerbread. Marshmallow chocolate bar muffin jujubes chocolate croissant gummies halvah caramels. Apple pie marzipan chocolate cake donut jelly-o ice cream. Bear claw tootsie roll pie chupa chups toffee. Chocolate bar candy bonbon carrot cake jelly halvah jelly gummi bears. Biscuit bonbon sweet roll dragée macaroon chocolate bar wafer. Croissant apple pie chocolate cake. Gingerbread powder apple pie gummies wafer. Carrot cake soufflé pastry pudding lollipop icing wafer croissant sugar plum. Topping fruitcake pudding halvah bonbon macaroon cupcake wafer candy. Brownie icing brownie sweet roll macaroon marshmallow pie cotton candy. Dragée gingerbread bonbon sweet gingerbread muffin. Wafer candy canes macaroon jelly pastry liquorice wafer.", "cupcake5.jpg", 0, ["cupcake", "chocolat"])
        );
        return $products;
    }

    public function GetProductById(int $idProduct): Product
    {
        $product = null;
        foreach ($this->Products as $oneProduct) {
            if ($oneProduct->Id == $idProduct) {
                $product = $oneProduct;
                return $product;
            }
        }
        return $product;
    }

    function ContainsProduct(array $products, Product $productToFind): bool
    {
        $found = false;
        foreach ($products as $product) {
            if ($product->Id == $productToFind->Id) {
                return true;
            }
        }
        return $found;
    }

    public function GetProductsBySomething(string $what): array
    {
        $result = array();
        foreach ($this->Products  as $product) {
            if (
                (stripos($product->Name, $what) !== false && !$this->ContainsProduct($result, $product)) ||
                (stripos($product->Description, $what) !== false && !$this->ContainsProduct($result, $product)) ||
                ($this->ProductHasTag($product, $what))
            ) {
                array_push($result, $product);
            }
        }
        return $result;
    }

    public function ProductHasTag(Product $product, string $tag): bool
    {
        return in_array(strtolower($tag), array_map('strtolower', $product->Tags));
    }

    public function GetProductsAvailable(): array
    {
        return $this->GetProductsByStock(1);
    }

    public function GetProductsByStock(int $minStockValue): array
    {
        $result = array();
        foreach ($this->Products as $product) {
            if ($product->Stock >= $minStockValue) {
                array_push($result, $product);
            }
        }
        return $result;
    }

    public function ProductIsAvailable(Product $product): bool
    {
        return $product->Stock > 0;
    }

    public function GetProductsByName(string $name): array
    {
        $result = array();
        foreach ($this->Products  as $product) {
            if (stripos($product->Name, $name) !== false && !$this->ContainsProduct($result, $product)) {
                array_push($result, $product);
            }
        }
        return $result;
    }

    public function GetProductsByDescription(string $desc): array
    {
        $result = array();
        foreach ($this->Products  as $product) {
            if (stripos($product->Description, $desc) && !$this->ContainsProduct($result, $product)) {
                array_push($result, $product);
            }
        }
        return $result;
    }

    public function GetProductsByTag(string $tagToFind)
    {
        $result = array();
        foreach ($this->Products as $product) {
            if ($this->ProductHasTag($product, $tagToFind)) {
                array_push($result, $product);
            }
        }
        return $result;
    }
}
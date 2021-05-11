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
        $tags = count($this->Tags) > 0 ? "<span class='font-weight-bold'>Tags: </span><span class='font-italic'>" . implode(", ", $this->Tags) . "</span>." : "";
        $btnClassAttributes = $this->Stock > 0 ? "class='btn btn-primary' aria-label='Ajouter au panier'" : "class='btn btn-warning disabled' aria-label='Impossible d''ajouter au panier:Plus en stock' ";
        $btnText = $this->Stock > 0 ? "Ajouter" : "Indisponible";

        echo "
        <div class='d-inline-block my-1 p-2 bg-light border rounded'>
        <h2>$this->Name</h2>
        <img class='img-fluid img-thumbnail product float-left mr-2' src='./Images/$this->ImageName' aria-label='Une image de Cupcake: $this->Name'>
        <p>$this->Description.</p>
        <p>$tags</p>
        <p><span class='font-weight-bold'>Stock: </span> $this->Stock </p>
        <button $btnClassAttributes><i class='bi bi-cart'></i> $btnText </button>
        </div>
        ";
    }
}
?>
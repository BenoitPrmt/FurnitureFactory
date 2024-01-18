<?php

class Factory {

    public array $inventory;

    public function makeFurniture(string $type, array $data): void
    {
        if ($type === "table")
        {
            $this->inventory[] = new Table($data["name"], $data["reference"], $data["price"], $data["color"]);
        }
    }

    public function getInventory(): array
    {
        return $this->inventory;
    }

}

class Component
{
    public string $name;
    public int $reference;
    public int $price;
    public string $color;

    /**
     * @param string $name
     * @param int $reference
     * @param int $price
     * @param string $color
     */
    public function __construct(string $name, int $reference, int $price, string $color)
    {
        $this->setName($name);
        $this->setReference($reference);
        $this->setPrice($price);
        $this->setColor($color);
    }

    public function __toString(): string
    {
        return "Nom: " . $this->getName() . "<br>Reference: " . $this->getReference() . "<br>Prix: " . $this->getPrice() . "<br>Couleur: " . $this->getColor() . "<br>";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getReference(): int
    {
        return $this->reference;
    }

    public function setReference(int $reference): void
    {
        $this->reference = $reference;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }


}

class Furniture
{

    public string $name;
    public int $reference;
    public int $price;
    public string $color;
    protected array $components = [];

    /**
     * @param string $name
     * @param int $reference
     * @param int $price
     * @param string $color
     */
    public function __construct(string $name, int $reference, int $price, string $color)
    {
        $this->setName($name);
        $this->setReference($reference);
        $this->setPrice($price);
        $this->setColor($color);
    }

    public function __toString(): string
    {
        return "Nom: " . $this->getName() . "<br>Reference: " . $this->getReference() . "<br>Prix: " . $this->getPrice() . "<br>Couleur: " . $this->getColor() . "<br>";
    }

    public function getFurnitureInventory(): array
    {
        return $this->components;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getReference(): int
    {
        return $this->reference;
    }

    public function setReference(int $reference): void
    {
        $this->reference = $reference;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}

class Table extends Furniture
{
    private const int TABLE_LEG_QUANTITY = 4;
    private const int PLATE_QUANTITY = 1;


    public function __construct(string $name, int $reference, int $price, string $color)
    {
        parent::__construct($name, $reference, $price, $color);
        $this->buildTable();
    }

    public function buildTable(): void
    {
        for ($i = 0; $i < self::TABLE_LEG_QUANTITY; ++$i) {
            $this->components[] = new Component("Pied de table", 1234, 10, "Marron");
        }
        $this->components[] = new Component("Plateau", 98765, 30, $this->getColor());
    }

}

class Chair
{

}

//$pied = new Component("Pied de table", 12345, 10, "Marron");
//echo $pied;

$ikea = new Factory();
$ikea->makeFurniture("table", [
    'name' => "Table en bois",
    'reference' => 5678,
    'price' => 100,
    'color' => "Marron"
]);

var_dump($ikea->getInventory());

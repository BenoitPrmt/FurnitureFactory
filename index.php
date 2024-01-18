<?php

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
        return "Nom: " . $this->getName() ."<br>Reference: " . $this->getReference() . "<br>Prix: " . $this->getPrice() . "<br>Couleur: " . $this->getColor() . "<br>";
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

class Table
{
    private const int TABLE_LEG_QUANTITY = 4;
    private const int PLATE_QUANTITY = 1;

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

class Chair
{

}

$pied = new Component("Pied de table", 12345, 10, "Marron");
echo $pied;
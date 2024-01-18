<?php
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
<?php

class Chair extends Furniture
{
    private const int CHAIR_LEG_QUANTITY = 4;

    public function __construct(string $name, int $reference, int $price, string $color)
    {
        parent::__construct($name, $reference, $price, $color);
        $this->buildChair();
    }

    public function buildChair(): void
    {
        for ($i = 0; $i < self::CHAIR_LEG_QUANTITY; ++$i) {
            $this->components[] = new Component("Pied de chaise", 1234, 10, $this->getColor());
        }
        $this->components[] = new Component("Assise", 98765, 50, $this->getColor());
    }

}
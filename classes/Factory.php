<?php
class Factory
{

    public array $inventory;

    public function makeFurniture(string $type, array $data): void
    {
        if ($type === "table") {
            $this->inventory[] = new Table($data["name"], $data["reference"], $data["price"], $data["color"]);
        }
    }

    public function getInventory(): array
    {
        return $this->inventory;
    }

    public function calculateCurrentValue(): int
    {
        $total = 0;
        foreach ($this->inventory as $key => $value) {
            $total += $value->getPrice();
        }
        return $total;
    }

}
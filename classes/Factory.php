<?php

class Factory
{

    public array $inventory;

    public function makeFurniture(string $type, array $data): void
    {
        if ($type === "table") {
            $this->inventory[] = new Table($data["name"], $data["reference"], $data["price"], $data["color"]);
        } else if ($type === "chair") {
            $this->inventory[] = new Chair($data["name"], $data["reference"], $data["price"], $data["color"]);
        }
    }

    public function getInventory(): array
    {
        return $this->inventory;
    }

    public function countAllFurnitures(): int
    {
        return count($this->inventory);
    }

    public function calculateCurrentBenefit(): int
    {
        $total = $this->calculateCurrentValue();
        foreach ($this->inventory as $key => $value) {
            $components_data = $value->getFurnitureInventory();
            foreach ($components_data as $item) {
                $total -= $item->getPrice();
            }
        }
        return $total;
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
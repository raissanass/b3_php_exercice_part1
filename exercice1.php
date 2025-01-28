<?php

class Product {
    protected string $name;
    protected float $price_without_tax;
    protected float $vat_rate;

    
    public function __construct(string $name, float $price_without_tax, float $vat_rate) {
        $this->name = $name;
        $this->price_without_tax = $price_without_tax;
        $this->vat_rate = $vat_rate;
    }

   
    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    
    public function getPriceWithoutTax(): float {
        return $this->price_without_tax;
    }

    public function setPriceWithoutTax(float $price_without_tax): self {
        $this->price_without_tax = $price_without_tax;
        return $this;
    }

    public function getVatRate(): float {
        return $this->vat_rate;
    }

    public function setVatRate(float $vat_rate): self {
        $this->vat_rate = $vat_rate;
        return $this;
    }

    public function getPriceWithVat(): float {
        return $this->price_without_tax + ($this->price_without_tax * $this->vat_rate);
    }
}

$product = new Product("titi", 10, 0.5); 

echo "Product Name: " . $product->getName()."<br>";
echo "Price Without Tax: " . $product->getPriceWithoutTax()."<br>";
echo "VAT Rate: " . ($product->getVatRate() * 100)."%<br>";
echo "Price With VAT: " . $product->getPriceWithVat()."<br>";



<?php
class ShoppingCart {
    private array $items;
    private float $total;

    public function __construct() {
        $this->items = [];
        $this->total = 0;
    }
    public function ajoutarticles(string $name, float $price): void {
        $this->items[] = ['name' => $name, 'price' => $price];
        $this->total += $price;
    }

    public function afficheiteams(): void {
        foreach ($this->items as $item) {
            echo "nom = " . $item['name']." ,Prix = " . $item['price'] . "<br>";
        }
    }

    public function calculTotal(): float {
        return $this->total;
    }
}

$cart = new ShoppingCart();

$cart->ajoutarticles("pc", 565.55);
$cart->ajoutarticles("souris", 65);
$cart->ajoutarticles("carte graphique", 3456);

echo "Articles dans le panier:<br>";
$cart->afficheiteams();

echo "Coût total = " . $cart->calculTotal() . "<br>";



/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
 */

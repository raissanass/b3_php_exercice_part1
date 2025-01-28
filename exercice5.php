<?php
class Math {
    public static function add(float $a, float $b): float {
        return $a + $b;
    }
    public static function subtract(float $a, float $b): float {
        return $a - $b;
    }
    public static function multiply(float $a, float $b): float {
        return $a * $b;
    }
}

$num1 = 20;
$num2 = 9.5;

echo "l'addition: " . Math::add($num1, $num2)."<br>";
echo "la soustraction: " . Math::subtract($num1, $num2)."<br>";
echo "la multiplication: " . Math::multiply($num1, $num2)."<br>";


/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math 
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
 */

<?php

class Statistics {
    private array $numbers;

    public function __construct(array $numbers) {
        $this->numbers = $numbers;
    }

    // Méthode pour calculer la somme d'un tableau de nombres
    public function getSum(): float {
        $sum = 0;
        foreach ($this->numbers as $number) {
            $sum += $number;
        }
        return $sum;
    }

    // Méthode pour calculer la moyenne d'un tableau de nombres
    public function getAverage(): float {
        if (count($this->numbers) === 0) {
            return 0;
        }
        return $this->getSum() / count($this->numbers);
    }

    // Méthode pour trouver la valeur minimale d'un tableau de nombres
    public function getMin(): float {
        if (count($this->numbers) === 0) {
            return 0;
        }
        $min = $this->numbers[0];
        foreach ($this->numbers as $number) {
            if ($number < $min) {
                $min = $number;
            }
        }
        return $min;
    }

    // Méthode pour trouver la valeur maximale d'un tableau de nombres
    public function getMax(): float {
        if (count($this->numbers) === 0) {
            return 0;
        }
        $max = $this->numbers[0];
        foreach ($this->numbers as $number) {
            if ($number > $max) {
                $max = $number;
            }
        }
        return $max;
    }
}

// Tableau de nombres
$numbers = [10, 5, 8, 20, 3, 15];

// Créer une instance de la classe Statistics
$statistics = new Statistics($numbers);

// Exemple d’utilisation
echo "Tableau de nombres : " . implode(", ", $numbers) . "<br>";
echo "Somme : " . $statistics->getSum() . "<br>";
echo "Moyenne : " . $statistics->getAverage() . "<br>";
echo "Valeur minimale : " . $statistics->getMin() . "<br>";
echo "Valeur maximale : " . $statistics->getMax() . "<br>";
?>

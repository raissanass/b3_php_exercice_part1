<?php
require_once 'exercice2.php';

class Student extends Person {
    private array $grades;

    public function __construct(string $first_name, string $last_name, int $age) {
        parent::__construct($first_name, $last_name, $age);
        $this->grades = [];
    }

    
    public function getAverage(): float {
        return array_sum($this->grades) / count($this->grades);
    }

    public function getGrades(): array {
        return $this->grades;
    }

    public function addGrade(float $grade): void {
        $this->grades[] = $grade;
    }

    public function setGrades(array $grades): void {
        $this->grades = $grades;
    }
    public function afficheInfos(): void {
        parent::afficheInfos();
        echo "la Moyenne des notes: " . $this->getAverage()."<br>";
    }
}
$student = new Student("titi", "toto", 50);

$student->addGrade(14);
$student->addGrade(8);
$student->addGrade(11);

echo "Info de létudiant:<br>";
$student->afficheInfos();

echo "les notes sont : " . implode(", ", $student->getGrades()) . "<br>";


/**
 * ÉNONCÉ:
 * Créez une classe Student qui étend Person et ayant pour propriétés 
 * - grades (tableau de notes).
 * Ajoutez une méthode getAverage() qui retourne la moyenne des notes. 
 * Implémentez les getters et setters pour manipuler le tableau de notes.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */

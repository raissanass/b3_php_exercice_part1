<?php
require_once "exercice2.php";

class Employee extends Person {
    private float $salary;
    private string $position;

    public function __construct(string $first_name, string $last_name, int $age, float $salary, string $position) {
        parent::__construct($first_name, $last_name, $age);
        $this->salary = $salary;
        $this->position = $position;
    }
        public function afficheInfos(): void {
        parent::afficheInfos();
        echo "Salaire =  " . $this->salary."<br>";
        echo "position = " . $this->position."<br>";
    }
}
$employee = new Employee("ana", "rai", 20, 600, "mtp");
$employee->afficheInfos();




/**
 * ÉNONCÉ :
 * Importer le fichier de l'exercice2 pour avoir accès à la classe Person
 * Écrivez une classe nommée Employee qui hérite de la classe Person
 * et ajoute les propriétés salary et position.
 * Surchager le constructeur et appeler le constructeur parent
 * Surcharger la méthode afficheInfos() pour afficher le salaire et le poste
 * En dessous la classe instancier un objet et afficher les infos
 */

<?php

class Person {
    protected string $first_name;
    protected string $last_name;
    protected int $age;

    public function __construct(string $first_name, string $last_name, int $age) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    public function getFirstName(): string {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): void {
        $this->first_name = $first_name;
    }

    public function getLastName(): string {
        return $this->last_name;
    }

    public function setLastName(string $last_name): void {
        $this->last_name = $last_name;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function setAge(int $age): void {
        $this->age = $age;
    }
    public function afficheInfos(): void {
        echo "nom =  " . $this->first_name."<br>";
        echo "prenom = " . $this->last_name."<br>";
        echo "age = " . $this->age."<br>";
    }
}

$person = new Person("anass", "raiss", 21);
$person->afficheInfos();



/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée Person avec des propriétés first_name, last_name et age en protected.
 * Ajouter un conctructeur
 * Ajouter les getters et setters
 * Implémentez une methode afficheInfos() pour afficher les informations de la personne.
 * Créer un nouvel objet et afficher les information
 */

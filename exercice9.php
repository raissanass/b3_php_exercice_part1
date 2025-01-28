<?php
class Movie {
    private string $title;
    private string $genre;
    private int $ageRestriction;

    public function __construct(string $title, string $genre, int $ageRestriction) {
        $this->title = $title;
        $this->genre = $genre;
        $this->ageRestriction = $ageRestriction;
    }

    public function canWatch(int $viewerAge): bool {
        return $viewerAge >= $this->ageRestriction;
    }

    public function afficheInfos(): void {
        echo "le Titre: " . $this->title . "<br>";
        echo "le Genre: " . $this->genre . "<br>";
        echo "la Restriction d'âge: " . $this->ageRestriction . "<br>";
    }
}

$movie = new Movie("vikings", "action", 18);
echo "Informations du film:<br>";
$movie->afficheInfos();
$viewerAge1 = 14;
$viewerAge2 = 20;

echo "le premier spectateur de " . $viewerAge1 . " ans peut-il regarder le film ? " . ($movie->canWatch($viewerAge1) ? "Oui" : "Non") . "<br>";
echo "le deuxieme spectateur de " . $viewerAge2 . " ans peut-il regarder le film ? " . ($movie->canWatch($viewerAge2) ? "Oui" : "Non") . "<br>";



/**
 * ÉNONCÉ:
 * Créez une classe Movie avec les propriétés 
 * title, genre et ageRestriction. 
 * Ajoutez une méthode canWatch($viewerAge) qui retourne true 
 * si l’âge du spectateur ($viewerAge) est supérieur ou égal à ageRestriction, 
 * sinon false.
  * En dessous de la classe, créer un objet et appeler les méthodes
 */

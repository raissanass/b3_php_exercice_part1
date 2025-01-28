<?php
class Article {
    private string $titre;
    private string $contenu;

    public function __construct(string $titre, string $contenu) {
        $this->titre = $titre;
        $this->contenu = $contenu;
    }

    public function getTitre(): string {
        return $this->titre;
    }

    public function setTitre(string $titre): void {
        $this->titre = $titre;
    }

    public function getContenu(): string {
        return $this->contenu;
    }

    public function setContenu(string $contenu): void {
        $this->contenu = $contenu;
    }

    public function getSummary(int $maxLength): string {
        if (strlen($this->contenu) <= $maxLength) {
            return $this->contenu;
        } else {
            return substr($this->contenu, 0, $maxLength) . "…";
        }
    }

    public function afficheInfos(): void {
        echo "Titre: " . $this->titre."<br>";
        echo "Contenu: " . $this->contenu."<br>";
    }
}

$article = new Article("keyce", "dev informatique eval php ");
$article->afficheInfos();
echo "voila notre resumer  = " . $article->getSummary(15) . "<br>";


/**
 * ÉNONCÉ
 * Créez une classe Article ayant les propriétés 
 * title (titre)
 * content (contenu)
 * Implémentez une méthode getSummary($maxLength) qui retourne les premiers $maxLength caractères 
 * du contenu, suivis de « … » si le contenu est trop long.
 * En dessous la classe instancier un objet et afficher les infos

 */

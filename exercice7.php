<?php
class BankAccount {
    private float $balance;

    public function __construct(float $initialBalance = 0.0) {
        $this->balance = $initialBalance;
    }

    public function deposit(float $amount): void {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "votre depot de " . $amount . " est bien effectué . le Nouveau solde est = " . $this->balance . " <br>";
        } else {
            echo "Le montant de dépôt doit être supp à zéro.<br>";
        }
    }
    public function withdraw(float $amount): void {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "votre retrait de " . $amount . " est effectué. le Nouveau solde est = " . $this->balance . " <br>";
        } elseif ($amount > $this->balance) {
            echo "Solde insuffisant.<br>";
        } else {
            echo "Le montant du retrait doit être supérieur à zéro.<br>";
        }
    }

    public function getBalance(): float {
        return $this->balance;
    }
}

$account = new BankAccount(100.0);
$account->deposit(12);
$account->withdraw(40);
$account->withdraw(15);
$account->deposit(-12.98);
$account->withdraw(23);

echo "votre Solde final est =  " . $account->getBalance() . " €<br>";

 

/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/
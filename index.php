<?php
class Film {
    public $titolo;
    public $genere;
    public $anno_uscita;
    public $prezzo;

    // Costruttore della classe Film
    public function __construct($titolo, $genere, $prezzo, $anno_uscita) {
        // Inizializzazione delle variabili membro con i valori forniti
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->prezzo = $prezzo;
        $this->anno_uscita = $anno_uscita;
    }

    // Metodo per impostare il prezzo in base all'anno di uscita
    public function setPrezzo($prezzo) {
        if ($this->anno_uscita < 2018) {
            $this->prezzo = $prezzo * 0.6;
        } else {
            $this->prezzo = $prezzo;
        }
    }

    // Metodo per ottenere una descrizione formattata del film
    public function getDescrizione() {
        return "Titolo: " . $this->titolo . "\nGenere: " . $this->genere . "\nAnno di uscita: " . $this->anno_uscita . "\nPrezzo: " . $this->prezzo;
    }
}

// oggetto film 1
$DoppiaPelle = new Film("Doppia Pelle", "Drammatico", 15, 2019);
// Impostazione del prezzo del film
$DoppiaPelle->setPrezzo(14);
// Stampa della descrizione del film
echo $DoppiaPelle->getDescrizione();
echo '<br/>';

// oggetto film 2
$LaCasaDelleBambole = new Film("La casa delle bambole", "horror", 12, 2019);
$LaCasaDelleBambole->setPrezzo(12);
echo $LaCasaDelleBambole->getDescrizione();
echo '<br/>';

// oggetto film 3
$IBambiniDiColdRock = new Film("I Bambini di Cold Rock", "thriller", 13, 2012);
$IBambiniDiColdRock->setPrezzo(12);
echo $IBambiniDiColdRock->getDescrizione();
?>







<?php
class Klase {
    public $vardas;
    public $pavarde;
    
    public function labas() {
        return 'Labukas, as esu <i>'. $this -> vardas . '</i> ' . $this -> pavarde . '<br>';
    }
}
    $klasiokas1 = new Klase();
    $klasiokas2 = new Klase();
$klasiokas1 -> vardas = 'Jonas';
$klasiokas1 -> pavarde = 'Kusaitis';

$klasiokas2 -> vardas = 'Ausra';
$klasiokas2 -> pavarde = 'Kuzite';

echo $klasiokas1 -> labas();
echo $klasiokas2 -> labas();
?>
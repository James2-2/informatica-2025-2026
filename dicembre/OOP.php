<?php
class Studente{
    private string $nome;
    private int $eta;
    private static $numero;
    public function setNome($nome) : void{
        $this->nome = $nome;
    }
    public function setEta($eta) : void{
        $this->eta = $eta;
    }

    public function saluta() : void{
        echo "ciao sono $this->nome";
    }
    public static function presentazione() : void{
        echo "ciao sono uno studente";
        self::$numero++;
    }
}

$s = new Studente();
$s->setNome("Marco");
$s->setEta(18);
$s->saluta();

echo "<br>";

$s2 = new Studente();
$s2->setNome("Gianni");
$s2->setEta(12);
$s2->saluta();

echo "<br>";

Studente::presentazione();
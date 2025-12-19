<?php
class Studente{
    private string $nome;
    private int $eta;
    public function setNome($nome): void{
        $this->nome = $nome;
    }
    public function setEta($eta): void{
        $this->eta = $eta;
    }

    public function saluta(): void{
        echo "ciao sono $this->nome";
    }
}

$s = new Studente();
$s->setNome("Marco");
$s->setEta(18);
$s->saluta();


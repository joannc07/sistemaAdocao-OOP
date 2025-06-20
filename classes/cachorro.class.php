<?php

class cachorro{

    public $nome;
    public $raca;
    public $porte;
    public $nivelEnergia;
    public $vacinado;
    public $vermifugado;
    public $sociavel;
    public $adestrado;

    public function exibirCachorro(): string {
        return "Atributos do cachorro:<br>
        Nome: {$this->nome}<br>
        Raça: {$this->raca}<br>
        Porte: {$this->porte}<br>
        Nível de energia: {$this->nivelEnergia}<br>
        Vacinação: {$this->vacinado}<br>
        Vermifugação: {$this->vermifugado}<br>
        Sociabilidade: {$this->sociavel}<br>
        Adestramento: {$this->adestrado}";

    }

    public function vacinar(): string {
        return "O animal {$this->vacinado}";

    }

    public function verificarAdestramento(): string {
        return "O animal {$this->adestrado}";

    }

    public function atualizarNivelEnergia(): string {

    }

    public function indicarPorte(): string {

    }

    public function socializar(): string {

    }

    public function iniciarAdestramento(): string {

    }

    public function resumoCachorro(): string {

    }
}

?>
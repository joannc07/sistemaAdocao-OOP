<?php
include_once 'animal.class.php';

class cachorro extends animal{

    //herdei o atributo nome do animal ao cachorro.
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
        $this->vacinado = true;
        return $this->vacinado;

    }

    public function verificarAdestramento(): string {
        return "O animal {$this->adestrado}";

    }

    public function atualizarNivelEnergia($nivelEnergia): string {
        $this->nivelEnergia = $nivelEnergia;
        return "Nivel de energia atualizado para {$this->nivelEnergia}";

    }

    public function indicarPorte(): string {
        return "O porte do cachorro é {$this->porte}";

    }

    public function socializar(): string {
        $this->sociavel = true;
        return $this->sociavel;

    }

    public function iniciarAdestramento(): string {
        $this->adestrado = true;
        return $this->adestrado;

    }

    public function resumoCachorro(): string {
        return "O nome do cachorro é {$this->nome}<br>
        sua raça é {$this->raca}<br>
        e seu porte é {$this->porte}";

    }
}

?>
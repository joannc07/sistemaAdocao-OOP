<?php

class gato{

    public $nome;
    public $pelagem;
    public $castrado;
    public $independente;
    public $vacinado;
    public $curioso;
    public $adoraColo;
    public $usaCaixaAreia;

    public function exibirGato(): string {
        return "Atributos do gato:<br>
        Nome: {$this->nome} <br>
        Pelagem: {$this->pelagem} <br>
        Castração: {$this->castrado} <br>
        Independência: {$this->independente} <br>
        Vacinação: {$this->vacinado} <br>
        Curiosidade: {$this->curioso} <br> 
        Gosta de colo: {$this->adoraColo} <br>
        Usa caixa de areia: {$this->usaCaixaAreia}";

    }

    public function castrar(): string {
        $this->castrado = true;
        return $this->castrado;
  
    }
  
    public function verificarPelagem(): string {

    }

    public function atualizarIndependencia(): string {

    }

    public function vacinar(): string {

    }

    public function resumoGato(): string {

    }

    public function ensinarCaixaAreia(): string {

    }

    public function verificarContato(): string {

    }

}

?>
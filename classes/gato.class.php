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
    public $status;

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
        return "A pelagem do gato é {$this->pelagem}";

    }

    public function atualizarIndependencia($independente): string {
        $this->independente = $independente;
        return "Grau de independência atualizado para {$this->independente}";

    }

    public function vacinar(): string {
        $this->vacinado = true;
        return $this->vacinado;

    }

    public function resumoGato(): string {
        return "O nome do gato é {$this->nome}, <br>
        sua pelagem é {$this->pelagem} <br>
        e está {$this->status}";

    }

    public function ensinarCaixaAreia(): string {
        $this->usaCaixaAreia = true;
        return $this->usaCaixaAreia;

    }

    public function verificarContato(): string {
        return "O gato {$this->adoraColo} Colo";
   
    }

}

?>
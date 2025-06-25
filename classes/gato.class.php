<?php
include_once 'cachorro.class.php';

class gato extends cachorro{

    //herdei os atributos "nome", "status" e "vacinacado", além do método "vacinar()".
    public $pelagem;
    public $castrado;
    public $independente;
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
        return "A pelagem do gato é {$this->pelagem}";

    }

    public function atualizarIndependencia($independente): string {
        $this->independente = $independente;
        return "Grau de independência atualizado para {$this->independente}";

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
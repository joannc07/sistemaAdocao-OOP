<?php

class animal{

    public $nome;
    public $especie;
    public $peso;
    public $idade;
    public $sexo;
    public $cor;
    public $status;
    public $chipado;

    public function exibirFicha(): string {
        return "A ficha do animal:<br> 
        Nome: {$this->nome}<br>
        Especie: {$this->especie} <br>
        Peso: {$this->peso} <br>
        Idade: {$this->idade} <br>
        Sexo: {$this->sexo} <br>
        Cor: {$this->cor} <br>
        Status: {$this->status} <br>
        Chipado: {$this->chipado}";
    }

    public function atualizarPeso($peso): string {
        $this->peso = $peso;
        return "Peso atualizado para {$this->peso} kg.";
    }


    public function alterarStatus($status): string {
        $this ->status = $status;
        return "Status atualizado para {$this->status}";
    }

    public function verificarIdade(): string {
        return "A idade do animal é {$this->idade}";
    }

    public function marcarComoChipado(): string {
        $this->chipado = true;
        return $this->chipado;

    }

    public function desmarcarChipado(): string {
        $this->chipado = false;
        return $this->chipado;

    }

    public function resumoAnimal(): string {
        return "O nome do animal é {$this->nome} <br> 
        sua espécie é {$this->especie} <br>
        e ele  está {$this->status}";
    }

    public function verificarSexo(): string {
        return "O sexo do animal é {$this->sexo}";

    }
}

?>
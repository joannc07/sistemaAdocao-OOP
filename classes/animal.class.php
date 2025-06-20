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
        return "A ficha do animal:<br> nome: {$this->nome}.<br>
        especie: {$this->especie} <br>
        peso: {$this->peso} <br>
        idade: {$this->idade} <br>
        sexo: {$this->sexo} <br>
        cor: {$this->cor} <br>
        status: {$this->status} <br>
        chipado: {$this->chipado}<br>";
    }

    public function atualizarPeso($peso): string {
        $this->peso = $peso;
        return "Peso atualizado para {$this->peso} kg.<br>";
    }


    public function alterarStatus($status): string {
        $this ->status = $status;
        return "Status atualizado para {$this->status}<br>";
    }

    public function verificarIdade(): string {
        return "A idade do animal é {$this->idade}";
    }

    public function marcarComoChipado(): string {
        

    }

    public function desmarcarChipado(): string {

    }

    public function resumoAnimal(): string {

    }

    public function verificarSexo(): string {

    }
}

?>
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
        return "A ficha do animal: nome: {$this->nome} 
        especie: {$this->especie} 
        peso: {$this->peso} 
        idade: {$this->idade} 
        sexo: {$this->sexo} 
        cor: {$this->cor} 
        status: {$this->status} 
        chipado: {$this->chipado}";
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
        

    }

    public function desmarcarChipado(): string {

    }

    public function resumoAnimal(): string {

    }

    public function verificarSexo(): string {

    }
}

?>
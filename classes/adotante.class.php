<?php

class adotante{

    public $nome;
    public $idade;
    public $telefone;
    public $email;
    public $endereco;
    public $temOutrosAnimais;
    public $experienciaComPets;
    public $tipoAnimal;

    public function exibirAdotante(): string {
        return "Dados do adotante: <br> 
        Nome: {$this->nome} <br> 
        Idade: {$this->idade} <br> 
        Telefone: {$this->telefone} <br> 
        Email: {$this->email} <br> 
        Endereço: {$this->endereco} <br> 
        Possui outros animais: {$this->temOutrosAnimais} <br> 
        Possui experiência: {$this->experienciaComPets} <br> 
        Tipo de animal adotado: {$this->tipoAnimal}";

    }

    public function adotarAnimal($tipoAnimal): string {
        $this->tipoAnimal = $tipoAnimal;
        return "O {$this->tipoAnimal} foi associado ao adotante";
   
    }

    public function verificarIdade(): string {
        if ($this->idade >= 18) {
            return "Está na idade legal para adotar";
        } else {
            return "Não está na idade legal para adotar";
        }

    }

    public function temExperiencia(): string {
        return "O adotante {$this->experienciaComPets} com outros animais";

    }

    public function listarContato(): string {
        return "Contato do adotante: <br>
        Email: {$this->email} <br>
        Telefone: {$this->telefone}";

    }

    public function verificarOutrosAnimais(): string {
        return "O adotante {$this->temOutrosAnimais}";

    }

    public function cancelarAdocao(): string {

    }

    public function resumoAdotante(): string {

    }
}

?>
<?php

include_once './classes/animal.class.php';
include_once './classes/adotante.class.php';
include_once './classes/cachorro.class.php';
include_once './classes/gato.class.php';


$animal = new animal();

$animal -> nome = 'Tadeuzinho';
$animal -> especie = 'Periquito Australiano';
$animal -> idade = '2 anos';
$animal -> sexo = 'masculino';
$animal -> peso = '700g';
$animal -> cor = 'Branco, azul e verde';
$animal -> status = 'adotado';
$animal -> chipado = 'não';

echo $animal->exibirFicha();
echo"<br><br>";
echo $animal->atualizarPeso(500);
echo "<br><br>";
echo $animal->alterarStatus('Disponivel');
echo "<br><br>";
echo $animal->verificarIdade();
echo "<br><br>";
echo $animal->marcarComoChipado() ? "chipado":"não chipado";
echo "<br><br>";
echo $animal->desmarcarChipado() ? "chipado":"não chipado";
echo"<br><br>";
echo $animal->resumoAnimal();
echo"<br><br>";
echo $animal->verificarSexo();
echo"<br><br>";

echo"<hr>";

$cachorro = new cachorro();

$cachorro -> nome = 'Saci'; 
$cachorro -> raca = 'Vira-lata';
$cachorro -> porte = 'médio';
$cachorro -> nivelEnergia = '9';
$cachorro -> vacinado = 'está vacinado';
$cachorro -> vermifugado = 'não';
$cachorro -> sociavel = 'é sociável';
$cachorro -> adestrado = 'está adestrado';

echo "<br>";
echo $cachorro->exibirCachorro();
echo "<br><br>";
echo $cachorro->vacinar() ? "vacinado":"não vacinado";
echo "<br><br>";
echo $cachorro->verificarAdestramento();
echo "<br><br>";
echo $cachorro->atualizarNivelEnergia(10);
echo "<br><br>";
echo $cachorro->indicarPorte();
echo "<br><br>";
echo $cachorro->socializar() ? "sociável":"não sociável";
echo "<br><br>";
echo $cachorro->iniciarAdestramento() ? "adestrado":"não adestrado";
echo "<br><br>";
echo $cachorro->resumoCachorro();
echo "<br><br>";

echo "<hr>";


$gato = new Gato(
    nome: 'Corinha',
    idade: 2,
    sexo: 'fêmea',
    peso: 3.5,
    cor: 'cinza',
    pelagem: 'curta',
    vacinado: 'vacinado',
    independente: 'dependente',
    chipado: 'não',
    especie: 'felino',
    status: 'adotada',
    castrado: 'castrado',
    curioso: 'curioso',
    adoraColo: 'adora',
    usaCaixaAreia: 'usa caixa'
);

echo "<br>";
echo $gato->exibirGato();
echo "<br><br>";
echo $gato->castrar() ? "Castrado":"Não castrado";
echo "<br><br>";
echo $gato->verificarPelagem();
echo "<br><br>";
echo $gato->atualizarIndependencia("Um pouco independente");
echo "<br><br>";
echo $gato->vacinar() ? "vacinado":"não vacinado";
echo "<br><br>";
echo $gato->resumoGato();
echo "<br><br>";
echo $gato->ensinarCaixaAreia() ? "Usa caixa de areia":"Não usa caixa de areia";
echo "<br><br>";
echo $gato->verificarContato();
echo "<br><br>";

echo "<hr>";

$adotante = new adotante();

$adotante -> nome = 'Joan';
$adotante -> idade = '17';
$adotante -> telefone = '51991572758';
$adotante -> email = 'joanncsenac@gmail.com';
$adotante -> endereco = 'Av. Ganzo, 745';
$adotante -> temOutrosAnimais = 'Possui outros animais';
$adotante -> experienciaComPets = 'Possui experiência';
$adotante -> tipoAnimal = 'Cachorro';

echo "<br>";
echo $adotante->exibirAdotante();
echo "<br><br>";
echo $adotante->adotarAnimal("Cachorro");
echo "<br><br>";
echo $adotante->verificarIdade();
echo "<br><br>";
echo $adotante->temExperiencia();
echo "<br><br>";
echo $adotante->listarcontato();
echo "<br><br>";
echo $adotante->verificarOutrosAnimais();
echo "<br><br>";
echo $adotante->cancelarAdocao()  ? "O cachorro foi adotado" : "A adoção não irá prosseguir";
echo "<br><br>";
echo $adotante->resumoAdotante();


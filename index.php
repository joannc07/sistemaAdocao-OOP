<?php

include_once './classes/animal.class.php';
include_once './classes/adotante.class.php';
include_once './classes/cachorro.class.php';

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
$cachorro -> vacinado = 'não está vacinado';
$cachorro -> vermifugado = 'não';
$cachorro -> sociavel = 'sim';
$cachorro -> adestrado = 'está adestrado';

echo "<br>";
echo $cachorro->exibirCachorro();
echo "<br><br>";
echo $cachorro->vacinar();
echo "<br><br>";
echo $cachorro->verificarAdestramento();


$gato = new gato();

$gato -> nome = 'Corinha';
$gato -> pelagem = 'curta';
$gato -> castrado = 'sim';
$gato -> independente = 'não';
$gato -> vacinado = 'sim'; 
$gato -> curioso = 'sim';
$gato -> adoraColo = 'sim';
$gato -> usaCaixaAreia = 'sim';

$adotante = new adotante();

$adotante -> nome = 'Joan';
$adotante -> idade = '17';
$adotante -> telefone = '51991572758';
$adotante -> email = 'joanncsenac@gmail.com';
$adotante -> endereco = 'Av. Ganzo, 745';
$adotante -> temOutrosAnimais = 'Sim';
$adotante -> experienciaComPets = 'Sim';
$adotante -> tipoAnimal = 'Cachorro';





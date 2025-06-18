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

echo $animal->exibirFicha()."<br>";
echo $animal ->atualizarPeso(500)."<br>";
echo $animal ->alterarStatus('Disponivel')."<br>";
echo $animal ->verificarIdade()."<br>";
echo $animal ->marcarComoChipado()."<br>";
echo $animal ->desmarcarChipado()."<br>";
echo $animal ->resumoAnimal()."<br>";
echo $animal ->verificarSexo()."<br>";

$cachorro = new cachorro();

$cachorro -> nome = 'Saci'; 
$cachorro -> raca = 'Vira-lata';
$cachorro -> porte = 'médio';
$cachorro -> nivelEnergia = '9';
$cachorro -> vacinado = 'não';
$cachorro -> vermifugado = 'não';
$cachorro -> sociavel = 'sim';
$cachorro -> adestrado = 'sim';

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





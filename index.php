<?php

require_once ('Player.php');
require_once ('Defesa.php');
require_once ('Ataque.php');
require_once ('Inventario.php');
require_once ('Magia.php');


$player1 = new Player('Igor');
$player1->subirNivel();

$escudo = new Defesa('Escudo', 4, 'Escudo');
$escudo2 = new Defesa('Escudo Mitico', 4, 'Escudo');
$espada = new Ataque('Excalibur', 7, 'Espadas');
$espada2 = new Ataque('Destroyer', 7, 'Espadas');
$magia = new Magia('Cajado Merlin', 2, 'Magia');
$magia2 = new Magia('Grimorio 6 Folhas', 2, 'Magia');


$player1->coletarItem($escudo2);
$player1->coletarItem($escudo);
$player1->coletarItem($espada);
$player1->coletarItem($magia);
$player1->coletarItem($espada2);
$player1->checarCapacidade();
$player1->soltarItem($escudo2);
$player1->checarCapacidade();
echo "<hr>";

$player2 = new Player('Giulia');
$escudo3 = new Defesa('Escudo Tinta Sombria', 4, 'Escudo');
$escudo4 = new Defesa('Escudo Meia lua', 4, 'Escudo');
$espada3 = new Ataque('Adaga Meia noite', 7, 'Espadas');
$espada4 = new Ataque('Espada dos Elfos', 7, 'Espadas');
$magia3 = new Magia('Joia da mente', 2, 'Magia');
$magia4 = new Magia('Poção de Mana', 2, 'Magia');
$player2->coletarItem($escudo3);
$player2->coletarItem($escudo4);
$player2->coletarItem($espada3);
$player2->coletarItem($escudo4);
$player2->checarCapacidade();
$player2->coletarItem($magia3);
$player2->subirNivel();
$player2->checarCapacidade();
$player2->coletarItem($magia3);
$player2->soltarItem($espada3);


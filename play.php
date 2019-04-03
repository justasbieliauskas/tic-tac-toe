<?php

include __DIR__ . '/vendor/autoload.php';

use TicTacToe\Game;
use TicTacToe\ArrayBoard;

$game = new Game(new ArrayBoard());
$game->play();


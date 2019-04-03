<?php

namespace TicTacToe;

interface BoardDisplay
{
    public function asString();

    public function with(array $board);
}

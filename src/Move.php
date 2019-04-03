<?php

namespace TicTacToe;

interface Move
{
    public function exists();

    public function toTuple();

    public function next(array $board);
}

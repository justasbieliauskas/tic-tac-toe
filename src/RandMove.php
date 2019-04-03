<?php

namespace TicTacToe;

class RandMove implements Move
{
    private $board;

    public function __construct(array $board = null)
    {
        $this->board = $board;
    }

    public function exists()
    {
        return true;
    }

    public function toTuple()
    {
        do {
            $rand = rand(0, 8);
            $row = intval($rand / 3);
            $column = $rand % 3;
        } while(!empty($this->board[$row][$column]));
        return [$row, $column];
    }

    public function next(array $board)
    {
        return new self($board);
    }
}

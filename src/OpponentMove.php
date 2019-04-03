<?php

namespace TicTacToe;

class OpponentMove implements Move
{
    private $move;

    public function __construct(Move $move)
    {
        $this->move = $move;
    }

    public function exists()
    {
        return $this->move->exists();
    }

    public function toTuple()
    {
        list($row, $column) = $this->move->toTuple();
        echo "Your opponent entered '$row $column'.\n";
        return [$row, $column];
    }

    public function next(array $board)
    {
        return new self($this->move->next($board));
    }
}

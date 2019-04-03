<?php

namespace TicTacToe;

class RobotMove implements Move
{
    private $move;

    public function __construct()
    {
        $this->move = new OpponentMove(
            new RandMove()
        );
    }

    public function exists()
    {
        return $this->move->exists();
    }

    public function toTuple()
    {
        return $this->move->toTuple();
    }

    public function next(array $board)
    {
        return $this->move->next($board);
    }
}

<?php

namespace TicTacToe;

class ToggledTurn implements Turn
{
    private $turn1;

    private $turn2;

    private $first;

    public function __construct(Turn $turn1, Turn $turn2, $first = false)
    {
        $this->turn1 = $turn1;
        $this->turn2 = $turn2;
        $this->first = $first;
    }

    public function exists()
    {
        if($this->first) {
            return $this->turn1->exists();
        }
        return $this->turn2->exists();
    }

    public function newBoardArray()
    {
        if($this->first) {
            return $this->turn1->newBoardArray();
        }
        return $this->turn2->newBoardArray();
    }

    public function next(array $board)
    {
        $first = !$this->first;
        $turn1 = $first ? $this->turn1->next($board) : $this->turn1;
        $turn2 = $first ? $this->turn2 : $this->turn2->next($board);
        return new self($turn1, $turn2, $first);
    }
}

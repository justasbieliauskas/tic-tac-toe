<?php

namespace TicTacToe;

class BoardDisplayingTurn implements Turn
{
    private $turn;

    private $display;

    public function __construct(Turn $turn, BoardDisplay $display)
    {
        $this->turn = $turn;
        $this->display = $display;
    }

    public function exists()
    {
        return $this->turn->exists();
    }

    public function newBoardArray()
    {
        $newBoard = $this->turn->newBoardArray();
        echo $this->display->with($newBoard)->asString();
        return $newBoard;
    }

    public function next(array $board)
    {
        return new self(
            $this->turn->next($board),
            $this->display
        );
    }
}

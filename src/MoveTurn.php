<?php

namespace TicTacToe;

class MoveTurn implements Turn
{
    private $move;

    private $symbol;

    private $board;

    public function __construct(Move $move, $symbol, array $board = null)
    {
        $this->move = $move;
        $this->symbol = $symbol;
        $this->board = $board;
    }

    public function exists()
    {
        return $this->move->exists();
    }

    public function newBoardArray()
    {
        $newArray = $this->board;
        list($row, $column) = $this->move->toTuple();
        $newArray[$row][$column] = $this->symbol;
        return $newArray;
    }

    public function next(array $board)
    {
        return new self(
            $this->move->next($board),
            $this->symbol,
            $board
        );
    }
}

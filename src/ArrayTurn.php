<?php

namespace TicTacToe;

class ArrayTurn implements Turn
{
    private $tuples;

    private $symbol;

    private $index;

    private $board;

    public function __construct(array $tuples, $symbol, $index = -1, array $board = null)
    {
        $this->tuples = $tuples;
        $this->symbol = $symbol;
        $this->index = $index;
        $this->board = $board;
    }

    public function exists()
    {
        return $this->index != count($this->tuples);
    }

    public function newBoardArray()
    {
        $newBoard = $this->board;
        list($row, $column) = $this->tuples[$this->index];
        $newBoard[$row][$column] = $this->symbol;
        return $newBoard;
    }

    public function next(array $board)
    {
        return new self(
            $this->tuples,
            $this->symbol,
            $this->index + 1,
            $board
        );
    }
}

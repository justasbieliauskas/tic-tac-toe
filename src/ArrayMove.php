<?php

namespace TicTacToe;

class ArrayMove implements Move
{
    private $tuples;

    private $index;

    public function __construct(array $tuples, $index = -1)
    {
        $this->tuples = $tuples;
        $this->index = $index;
    }

    public function exists()
    {
        return $this->index != count($this->tuples);
    }

    public function toTuple()
    {
        return $this->tuples[$this->index];
    }

    public function next(array $board)
    {
        return new self(
            $this->tuples,
            $this->index + 1
        );
    }
}

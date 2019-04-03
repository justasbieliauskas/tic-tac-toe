<?php

namespace TicTacToe;

class InteractiveMove implements Move
{
    private $input;

    public function __construct(Input $input)
    {
        $this->input = $input;
    }

    public function exists()
    {
        return !$this->input->eof();
    }

    public function toTuple()
    {
        $line = $this->input->read();
        list($row, $column) = explode(' ', $line);
        return [intval($row), intval($column)];
    }

    public function next(array $board)
    {
        return $this;
    }
}

<?php

namespace TicTacToe;

/**
 * A move, which scans user input and converts it to a tuple.
 *
 * @package TicTacToe
 */
class InteractiveMove implements Move
{
    private $input;

    /**
     * @param Input $input
     */
    public function __construct(Input $input)
    {
        $this->input = $input;
    }

    /**
     * {@inheritdoc}
     */
    public function exists()
    {
        return !$this->input->eof();
    }

    /**
     * {@inheritdoc}
     */
    public function toTuple()
    {
        $line = $this->input->read();
        list($row, $column) = explode(' ', $line);
        return [intval($row), intval($column)];
    }

    /**
     * {@inheritdoc}
     */
    public function next(array $board)
    {
        return $this;
    }
}

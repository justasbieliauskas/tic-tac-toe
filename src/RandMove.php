<?php

namespace TicTacToe;

/**
 * Random move.
 *
 * @package TicTacToe
 */
class RandMove implements Move
{
    private $board;

    /**
     * @param array|null $board
     */
    public function __construct(array $board = null)
    {
        $this->board = $board;
    }

    /**
     * {@inheritdoc}
     */
    public function exists()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function toTuple()
    {
        do {
            $rand = rand(0, 8);
            $row = intval($rand / 3);
            $column = $rand % 3;
        } while(!empty($this->board[$row][$column]));
        return [$row, $column];
    }

    /**
     * {@inheritdoc}
     */
    public function next(array $board)
    {
        return new self($board);
    }
}

<?php

namespace TicTacToe;

/**
 * A move that notifies user after being applied.
 * @package TicTacToe
 */
class OpponentMove implements Move
{
    private $move;

    /**
     * @param Move $move
     */
    public function __construct(Move $move)
    {
        $this->move = $move;
    }

    /**
     * {@inheritdoc}
     */
    public function exists()
    {
        return $this->move->exists();
    }

    /**
     * {@inheritdoc}
     */
    public function toTuple()
    {
        list($row, $column) = $this->move->toTuple();
        echo "Your opponent entered '$row $column'.\n";
        return [$row, $column];
    }

    /**
     * {@inheritdoc}
     */
    public function next(array $board)
    {
        return new self($this->move->next($board));
    }
}

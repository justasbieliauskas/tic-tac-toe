<?php

namespace TicTacToe;

/**
 * A move made by a computer.
 *
 * @package TicTacToe
 */
class RobotMove implements Move
{
    private $move;

    public function __construct()
    {
        $this->move = new OpponentMove(
            new RandMove()
        );
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
        return $this->move->toTuple();
    }

    /**
     * {@inheritdoc}
     */
    public function next(array $board)
    {
        return $this->move->next($board);
    }
}

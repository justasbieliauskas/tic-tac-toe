<?php

namespace TicTacToe;

/**
 * A fake move with fixed set of tuples.
 *
 * @package TicTacToe
 */
class ArrayMove implements Move
{
    private $tuples;

    private $index;

    /**
     * @param array $tuples
     * @param int $index
     */
    public function __construct(array $tuples, $index = -1)
    {
        $this->tuples = $tuples;
        $this->index = $index;
    }

    /**
     * {@inheritdoc}
     */
    public function exists()
    {
        return $this->index != count($this->tuples);
    }

    /**
     * {@inheritdoc}
     */
    public function toTuple()
    {
        return $this->tuples[$this->index];
    }

    /**
     * {@inheritdoc}
     */
    public function next(array $board)
    {
        return new self(
            $this->tuples,
            $this->index + 1
        );
    }
}

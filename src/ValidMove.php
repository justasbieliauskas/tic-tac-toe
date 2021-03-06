<?php

namespace TicTacToe;

/**
 * An in-bounds, non-taken move.
 *
 * @package TicTacToe
 */
class ValidMove implements Move
{
    private $move;

    private $board;

    private $tuple;

    /**
     * @param Move $move
     * @param array|null $board
     */
    public function __construct(Move $move, array $board = null)
    {
        $this->move = $move;
        $this->board = $board;
    }

    /**
     * {@inheritdoc}
     */
    public function exists()
    {
        $valid = false;
        $currentMove = $this->move;
        while(!$valid && $currentMove->exists()) {
            $this->tuple = $currentMove->toTuple();
            $valid = $this->valid(...$this->tuple);
            if(!$valid) {
                $currentMove = $currentMove->next($this->board);
            }
        }
        return $valid;
    }

    /**
     * {@inheritdoc}
     */
    public function toTuple()
    {
        return $this->tuple;
    }

    public function next(array $board)
    {
        return new self(
            $this->move->next($board),
            $board
        );
    }

    private function valid($row, $column)
    {
        return
            $row >= 0 &&
            $row < count($this->board) &&
            $column >= 0 &&
            $column < count($this->board[0]) &&
            empty($this->board[$row][$column]);
    }
}

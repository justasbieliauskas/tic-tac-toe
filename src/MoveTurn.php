<?php

namespace TicTacToe;

/**
 * A symbol-aware turn that uses a move.
 * @package TicTacToe
 */
class MoveTurn implements Turn
{
    private $move;

    private $symbol;

    private $board;

    /**
     * @param Move $move
     * @param string $symbol
     * @param array|null $board
     */
    public function __construct(Move $move, $symbol, array $board = null)
    {
        $this->move = $move;
        $this->symbol = $symbol;
        $this->board = $board;
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
    public function newBoardArray()
    {
        $newArray = $this->board;
        list($row, $column) = $this->move->toTuple();
        $newArray[$row][$column] = $this->symbol;
        return $newArray;
    }

    /**
     * {@inheritdoc}
     */
    public function next(array $board)
    {
        return new self(
            $this->move->next($board),
            $this->symbol,
            $board
        );
    }
}

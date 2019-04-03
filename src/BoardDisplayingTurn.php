<?php

namespace TicTacToe;

/**
 * A turn, which displays the board after being activated.
 *
 * @package TicTacToe
 */
class BoardDisplayingTurn implements Turn
{
    private $turn;

    private $display;

    /**
     * @param Turn $turn
     * @param BoardDisplay $display
     */
    public function __construct(Turn $turn, BoardDisplay $display)
    {
        $this->turn = $turn;
        $this->display = $display;
    }

    /**
     * {@inheritdoc}
     */
    public function exists()
    {
        return $this->turn->exists();
    }

    /**
     * {@inheritdoc}
     */
    public function newBoardArray()
    {
        $newBoard = $this->turn->newBoardArray();
        echo $this->display->with($newBoard)->asString();
        return $newBoard;
    }

    /**
     * {@inheritdoc}
     */
    public function next(array $board)
    {
        return new self(
            $this->turn->next($board),
            $this->display
        );
    }
}

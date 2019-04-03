<?php

namespace TicTacToe;

/**
 * Quick-n-dirty board representation.
 *
 * @package TicTacToe
 */
class DefaultBoardDisplay implements BoardDisplay
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
    public function asString()
    {
        $display = ' _ _ _ ' . PHP_EOL;
        foreach($this->board as $row) {
            $display .= '|';
            foreach($row as $index => $cell) {
                $display .= (empty($cell) ? ' ' : $cell);
                if($index < 2) {
                    $display .= ' ';
                }
            }
            $display .= '|' . PHP_EOL;
        }
        $display .= ' - - - ' . PHP_EOL;
        return PHP_EOL . $display;
    }

    /**
     * {@inheritdoc}
     */
    public function with(array $board)
    {
        return new self($board);
    }
}

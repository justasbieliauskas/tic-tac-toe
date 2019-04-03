<?php

namespace TicTacToe;

/**
 * Represents a symbol that won the game.
 *
 * @package TicTacToe
 */
class WinnerSymbol
{
    private $board;

    private $default;

    /**
     * @param array $board
     * @param string $default a symbol if no one won that game
     */
    public function __construct(array $board, $default)
    {
        $this->board = $board;
        $this->default = $default;
    }

    /**
     * Converts itself to string.
     *
     * @return string
     */
    public function __toString()
    {
        $cells = $this->board;
        $symbol = $this->default;
        if($cells[0][0] == $cells[0][1] && $cells[0][1] == $cells[0][2]) {
            $symbol = $cells[0][0];
        } else if($cells[1][0] == $cells[1][1] && $cells[1][1] == $cells[1][2]) {
            $symbol = $cells[1][0];
        } else if($cells[2][0] == $cells[2][1] && $cells[2][1] == $cells[2][2]) {
            $symbol = $cells[2][0];
        } else if($cells[0][0] == $cells[1][0] && $cells[1][0] == $cells[2][0]) {
            $symbol = $cells[0][0];
        } else if($cells[0][1] == $cells[1][1] && $cells[1][1] == $cells[2][1]) {
            $symbol = $cells[0][1];
        } else if($cells[0][2] == $cells[1][2] && $cells[1][2] == $cells[2][2]) {
            $symbol = $cells[0][2];
        } else if($cells[0][0] == $cells[1][1] && $cells[1][1] == $cells[2][2]) {
            $symbol = $cells[0][0];
        } else if($cells[0][2] == $cells[1][1] && $cells[1][1] == $cells[2][0]) {
            $symbol = $cells[0][2];
        }
        return $symbol;
    }
}

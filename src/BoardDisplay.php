<?php

namespace TicTacToe;

/**
 * Board representation.
 *
 * @package TicTacToe
 */
interface BoardDisplay
{
    /**
     * Converts itself to string.
     *
     * @return string
     */
    public function asString();

    /**
     * Returns a new display with different board array.
     *
     * @param array $board
     * @return self
     */
    public function with(array $board);
}

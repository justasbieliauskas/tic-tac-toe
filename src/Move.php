<?php

namespace TicTacToe;

/**
 * Represents a move made by a player.
 *
 * @package TicTacToe
 */
interface Move
{
    /**
     * Tells whether this move can be made.
     *
     * @return bool
     */
    public function exists();

    /**
     * Converts itself to [row, column] representation.
     *
     * @return array
     */
    public function toTuple();

    /**
     * Returns a next move.
     *
     * @param array $board
     * @return self
     */
    public function next(array $board);
}

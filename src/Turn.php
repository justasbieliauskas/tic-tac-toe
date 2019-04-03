<?php

namespace TicTacToe;

/**
 * Tic-tac-toe turn.
 *
 * @package TicTacToe
 */
interface Turn
{
    /**
     * Tells whether turn is valid at certain game stage.
     *
     * @return bool
     */
	public function exists();

    /**
     * Returns a modified board array.
     *
     * @return array
     */
	public function newBoardArray();

    /**
     * Returns next turn.
     *
     * @param array $board
     * @return mixed
     */
	public function next(array $board);
}

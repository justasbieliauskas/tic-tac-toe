<?php

namespace TicTacToe;

/**
 * Tic-tac-toe board.
 *
 * @package TicTacToe
 */
interface Board
{
    /**
     * Generates an array representation of itself.
     *
     * @return array
     */
	public function toArray();
}

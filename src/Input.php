<?php

namespace TicTacToe;

/**
 * User input.
 *
 * @package TicTacToe
 */
interface Input
{
    /**
     * Checks to see if the input ended and cannot be read from.
     *
     * @return bool
     */
    public function eof();

    /**
     * Returns user input.
     *
     * @return string
     */
    public function read();
}

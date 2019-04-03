<?php

namespace TicTacToe;

/**
 * Array based board.
 *
 * @package TicTacToe
 */
class ArrayBoard implements Board
{
    private $cells;

    /**
     * @param array $cells
     */
    public function __construct(array $cells = [
        [ '', '', '' ],
        [ '', '', '' ],
        [ '', '', '' ]
    ]) {
        $this->cells = $cells;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return $this->cells;
    }
}

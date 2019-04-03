<?php

namespace TicTacToe;

class ArrayBoard implements Board
{
    private $cells;

    public function __construct(array $cells = [
        [ '', '', '' ],
        [ '', '', '' ],
        [ '', '', '' ]
    ]) {
        $this->cells = $cells;
    }

    public function toArray()
    {
        return $this->cells;
    }
}

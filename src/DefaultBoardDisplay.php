<?php

namespace TicTacToe;

class DefaultBoardDisplay implements BoardDisplay
{
    private $board;

    public function __construct(array $board = null)
    {
        $this->board = $board;
    }

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

    public function with(array $board)
    {
        return new self($board);
    }
}

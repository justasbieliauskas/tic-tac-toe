<?php

namespace TicTacToe;

class HumanMove implements Move
{
    private $move;

    public function __construct()
    {
        $this->move = new ValidMove(
            new InteractiveMove(
                new InputMatching(
                    '/^\d \d$/',
                    new StdinInput('Enter move ("0 0" is the top-left corner, "2 2" is bottom right): ')
                )
            )
        );
    }

    public function exists()
    {
        return $this->move->exists();
    }

    public function toTuple()
    {
        return $this->move->toTuple();
    }

    public function next(array $board)
    {
        return $this->move->next($board);
    }
}

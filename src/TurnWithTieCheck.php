<?php

namespace TicTacToe;

class TurnWithTieCheck implements Turn
{
    private $turn;

    private $message;

    private $which;

    public function __construct(Turn $turn, $message, $which = 0)
    {
        $this->turn = $turn;
        $this->message = $message;
        $this->which = $which;
    }

    public function exists()
    {
        $tie = $this->which > 9;
        if($tie) {
            echo $this->message . PHP_EOL;
        }
        return
            $this->turn->exists() &&
            !$tie;
    }

    public function newBoardArray()
    {
        return $this->turn->newBoardArray();
    }

    public function next(array $board)
    {
        return new self(
            $this->turn->next($board),
            $this->message,
            $this->which + 1
        );
    }
}

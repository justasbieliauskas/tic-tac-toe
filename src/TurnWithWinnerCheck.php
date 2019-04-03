<?php

namespace TicTacToe;

class TurnWithWinnerCheck implements Turn
{
    private $turn;

    private $xMessage;

    private $oMessage;

    private $board;

    public function __construct(Turn $turn, $xMessage, $oMessage, array $board = null)
    {
        $this->turn = $turn;
        $this->xMessage = $xMessage;
        $this->oMessage = $oMessage;
        $this->board = $board;
    }

    public function exists()
    {
        $symbol = new WinnerSymbol($this->board, '');
        $symbol = "$symbol";
        if($symbol == 'X') {
            echo $this->xMessage . PHP_EOL;
        } else if($symbol == 'O') {
            echo $this->oMessage . PHP_EOL;
        }
        return
            $symbol == '' &&
            $this->turn->exists();
    }

    public function newBoardArray()
    {
        return $this->turn->newBoardArray();
    }

    public function next(array $board)
    {
        return new self(
            $this->turn->next($board),
            $this->xMessage,
            $this->oMessage,
            $board
        );
    }
}

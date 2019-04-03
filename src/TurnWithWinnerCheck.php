<?php

namespace TicTacToe;

/**
 * A turn which checks for a winner before being activated.
 *
 * @package TicTacToe
 */
class TurnWithWinnerCheck implements Turn
{
    private $turn;

    private $xMessage;

    private $oMessage;

    private $board;

    /**
     * @param Turn $turn
     * @param string $xMessage
     * @param string $oMessage
     * @param array|null $board
     */
    public function __construct(Turn $turn, $xMessage, $oMessage, array $board = null)
    {
        $this->turn = $turn;
        $this->xMessage = $xMessage;
        $this->oMessage = $oMessage;
        $this->board = $board;
    }

    /**
     * {@inheritdoc}
     */
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

    /**
     * {@inheritdoc}
     */
    public function newBoardArray()
    {
        return $this->turn->newBoardArray();
    }

    /**
     * {@inheritdoc}
     */
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

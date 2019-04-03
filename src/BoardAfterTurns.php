<?php

namespace TicTacToe;

class BoardAfterTurns implements Board
{
	private $board;

	private $turn;

	public function __construct(Board $board, Turn $turn)
	{
		$this->board = $board;
		$this->turn = $turn;
	}

    public function toArray()
    {
        $boardArray = $this->board->toArray();
        $currentTurn = $this->turn->next($boardArray);
        while($currentTurn->exists()) {
            $boardArray = $currentTurn->newBoardArray();
            $currentTurn = $currentTurn->next($boardArray);
        }
        return $boardArray;
    }
}

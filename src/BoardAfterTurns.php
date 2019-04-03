<?php

namespace TicTacToe;

/**
 * A tic-tac-toe board after applying given turns.
 *
 * @package TicTacToe
 */
class BoardAfterTurns implements Board
{
	private $board;

	private $turn;

    /**
     * @param Board $board
     * @param Turn $turn a turn from which other turns are spawned
     */
	public function __construct(Board $board, Turn $turn)
	{
		$this->board = $board;
		$this->turn = $turn;
	}

    /**
     * {@inheritdoc}
     */
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

<?php

namespace TicTacToe;

/**
 * Tic-tac-toe game.
 *
 * @package TicTacToe
 */
class Game
{
    private $board;

    /**
     * @param Board $board initial board
     */
    public function __construct(Board $board)
    {
        $this->board = new BoardAfterTurns(
            $board,
            new BoardDisplayingTurn(
                new TurnWithTieCheck(
                    new TurnWithWinnerCheck(
                        new ToggledTurn(
                            new MoveTurn(new HumanMove(), 'X'),
                            new MoveTurn(new RobotMove(), 'O')
                        ),
                        'You won!',
                        'You lost.'
                    ),
                    "It's a tie!"
                ),
                new DefaultBoardDisplay()
            )
        );
    }

    /**
     * Play the game.
     */
    public function play()
    {
        $this->board->toArray();
    }
}

<?php

namespace TicTacToe;

class Game
{
    private $board;

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

    public function play()
    {
        $this->board->toArray();
    }
}

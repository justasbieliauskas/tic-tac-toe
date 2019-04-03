<?php

namespace TicTacToe;

/**
 * A turn that checks for tie situation before being activated.
 *
 * @package TicTacToe
 */
class TurnWithTieCheck implements Turn
{
    private $turn;

    private $message;

    private $which;

    /**
     * @param Turn $turn
     * @param string $message message printed on tie
     * @param int $which
     */
    public function __construct(Turn $turn, $message, $which = 0)
    {
        $this->turn = $turn;
        $this->message = $message;
        $this->which = $which;
    }

    /**
     * {@inheritdoc}
     */
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
            $this->message,
            $this->which + 1
        );
    }
}

<?php

namespace TicTacToe;

/**
 * User input read from stdin.
 *
 * @package TicTacToe
 */
class StdinInput implements Input
{
    private $prompt;

    private $line;

    /**
     * @param string $prompt
     */
    public function __construct($prompt)
    {
        $this->prompt = $prompt;
    }

    /**
     * {@inheritdoc}
     */
    public function eof()
    {
        $done = feof(STDIN);
        if(!$done) {
            echo $this->prompt;
            $this->line = fgets(STDIN);
            $done = $this->line === false;
        }
        return $done;
    }

    /**
     * {@inheritdoc}
     */
    public function read()
    {
        return $this->line;
    }
}

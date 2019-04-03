<?php

namespace TicTacToe;

class StdinInput implements Input
{
    private $prompt;

    private $line;

    public function __construct($prompt)
    {
        $this->prompt = $prompt;
    }

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

    public function read()
    {
        return $this->line;
    }
}

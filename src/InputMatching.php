<?php

namespace TicTacToe;

class InputMatching implements Input
{
    private $regex;

    private $input;

    private $value;

    public function __construct($regex, Input $input)
    {
        $this->regex = $regex;
        $this->input = $input;
    }

    public function eof()
    {
        $valid = false;
        while(!$valid && !$this->input->eof()) {
            $this->value = $this->input->read();
            $match = preg_match($this->regex, $this->value);
            $valid = $match == 1;
        }
        return !$valid;
    }

    public function read()
    {
        return $this->value;
    }
}

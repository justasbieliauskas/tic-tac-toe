<?php

namespace TicTacToe;

/**
 * User input, which matches given regex.
 *
 * @package TicTacToe
 */
class InputMatching implements Input
{
    private $regex;

    private $input;

    private $value;

    /**
     * @param string $regex
     * @param Input $input
     */
    public function __construct($regex, Input $input)
    {
        $this->regex = $regex;
        $this->input = $input;
    }

    /**
     * {@inheritdoc}
     */
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

    /**
     * {@inheritdoc}
     */
    public function read()
    {
        return $this->value;
    }
}

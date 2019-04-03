<?php

namespace TicTacToe;

interface Input
{
    public function eof();

    public function read();
}

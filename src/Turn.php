<?php

namespace TicTacToe;

interface Turn
{
	public function exists();

	public function newBoardArray();

	public function next(array $board);
}

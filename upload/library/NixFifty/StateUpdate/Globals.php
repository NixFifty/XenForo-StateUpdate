<?php

// This class is used to encapsulate global state between layers without using $GLOBAL[] or
// relying on the consumer being loaded correctly by the dynamic class autoloader

class NixFifty_StateUpdate_Globals
{
	public static $stateUpdate = null;

	private function __construct() {}
}
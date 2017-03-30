<?php

class NixFifty_StateUpdate_Listen
{
	public static function loadClass($class, array &$extend)
	{
		$extend[] = 'NixFifty_StateUpdate_' . $class;
	}
}

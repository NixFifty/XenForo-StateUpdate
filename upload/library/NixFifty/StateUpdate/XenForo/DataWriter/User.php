<?php

class NixFifty_StateUpdate_XenForo_DataWriter_User
	extends XFCP_NixFifty_StateUpdate_XenForo_DataWriter_User
{
	protected function _preSave()
	{
		// forgive me lord
		if (NixFifty_StateUpdate_Globals::$stateUpdate && $this->isUpdate())
		{
			$this->set('user_state', NixFifty_StateUpdate_Globals::$stateUpdate);
		}

		parent::_preSave();
	}
}
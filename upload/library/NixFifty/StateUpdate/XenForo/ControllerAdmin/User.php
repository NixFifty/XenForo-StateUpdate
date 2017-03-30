<?php

class NixFifty_StateUpdate_XenForo_ControllerAdmin_User extends XFCP_NixFifty_StateUpdate_XenForo_ControllerAdmin_User
{
	public function actionBatchUpdate()
	{
		if ($this->isConfirmedPost())
		{
			$actions = $this->_input->filterSingle('actions', XenForo_Input::ARRAY_SIMPLE);

			if ($this->_input->filterSingle('confirmUpdate', XenForo_Input::UINT) && $actions)
			{
				NixFifty_StateUpdate_Globals::$stateUpdate = $actions['user_state'];
			}
		}
		return parent::actionBatchUpdate();
	}
}
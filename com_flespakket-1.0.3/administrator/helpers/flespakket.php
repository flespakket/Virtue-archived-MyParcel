<?php
/**
 * @version     1.0.0
 * @package     com_flespakket
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Balticode <giedrius@balticode.com> - www.balticode.com
 */

// No direct access
defined('_JEXEC') or die;

/**
 * Flespakket helper.
 */
class FlespakketHelper
{
	/**
	 * Configure the Linkbar.
	 */
	public static function addSubmenu($vName = '')
	{
		/*JSubMenuHelper::addEntry(
			JText::_('COM_FLESPAKKET_TITLE_CONFIGS'),
			'index.php?option=com_flespakket&view=configs',
			$vName == 'configs'
		);*/

	}

	/**
	 * Gets a list of the actions that can be performed.
	 *
	 * @return	JObject
	 * @since	1.6
	 */
	public static function getActions()
	{
		$user	= JFactory::getUser();
		$result	= new JObject;

		$assetName = 'com_flespakket';

		$actions = array(
			/*'core.admin', 'core.manage'*/
		);

		/*foreach ($actions as $action) {
			$result->set($action, $user->authorise($action, $assetName));
		}*/

		return $result;
	}
}

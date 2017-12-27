<?php
/**
 * @version     1.0.0
 * @package     com_flespakket
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Balticode <giedrius@balticode.com> - www.balticode.com
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

// Execute the task.
$controller	= JController::getInstance('Flespakket');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();

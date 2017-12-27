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

jimport('joomla.application.component.controllerform');

/**
 * Config controller class.
 */
class FlespakketControllerConfig extends JControllerForm
{

    function __construct() {
        $this->view_list = 'configs';
        parent::__construct();
    }

}
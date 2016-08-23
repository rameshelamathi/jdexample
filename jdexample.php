<?php

/**
 * @package     Joomla.Plugin
 * @subpackage  Content.joomla
 *
 * @copyright   Copyright (C) 2005 - 2016 J2Store. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Example Content Plugin
 *
 * @since  1.6
 */
class PlgContentJDExample extends JPlugin
{

	public function onContentAfterSave($context, $article, $isNew)
	{
		//here goes our logic
		$mailer = JFactory::getMailer();
		
	}


}

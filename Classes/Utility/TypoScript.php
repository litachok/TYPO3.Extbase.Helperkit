<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012-2013 Andy Hausmann <ah@sota-studio.de>, sota studio
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Helper Class which makes various tools and helper available
 *
 * @author Andy Hausmann <ah@sota-studio.de>, sota studio
 * @package helperkit
 * @suboackage Classes\Utility
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Helperkit_Utility_TypoScript
{

	/**
	 * Returns the Page ID of the given rootline level.
	 *
	 * @param mixed $level Level of the rootline layer.
	 * @param mixed $pageID ID of the page to search within the rootline - defaults to the current page if empty.
	 * @return mixed The id of the givel rootline level.
	 */
	public static function getLevelUid($level, $pageID = null)
	{
		if (!is_numeric($pageID)) {
			$pageID = $GLOBALS['TSFE']->id;
		}
		$rootline = $GLOBALS['TSFE']->sys_page->getRootLine($pageID);
		return $rootline[$level]['uid'];
	}

}
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
 *
 * A view helper for adding CSS and JS files to teh frontend.
 *
 * This helper needs to be called once per file.
 * It is not possible to add multiple files via array or such, yet.
 *
 * @author Andy Hausmann <ah@sota-studio.de>, sota studio
 * @package helperkit
 * @subpackage ViewHelpers\Asset
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Helperkit_ViewHelpers_Asset_CssJsViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractTagBasedViewHelper
{
	/**
	 * Adds JS and CSS to the frontend
	 *
	 * @param string $file
	 * @param bool $moveToFooter
	 * @param string $type Override for media type detection
	 * @return void
	 */
	public function render($file = null, $moveToFooter = false, $type = null)
	{
		if ($file) {
			Tx_Helperkit_Utility_Page::addCssJsFile(
				$file,
				$moveToFooter,
				$type
			);
		}
	}
}
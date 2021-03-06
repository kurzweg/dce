<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2012-2014 Armin Rüdiger Vieweg <armin@v.ieweg.de>
*
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
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
 * This view helper returns the url of current page
 *
 * @copyright  2012-2014 Copyright belongs to the respective authors
 * @license    http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Dce_ViewHelpers_ThisUrlViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {
	/**
	 * Returns the current url
	 *
	 * @param boolean $showHost If TRUE the hostname will be included
	 * @param boolean $showRequestedUri If TRUE the requested uri will be included
	 * @param boolean $urlencode If TRUE the whole result will be URI encoded
	 *
	 * @return string url
	 */
	public function render($showHost = TRUE, $showRequestedUri = TRUE, $urlencode = FALSE) {
		$url = '';

		if ($showHost) {
			$url .= ($_SERVER['HTTPS']) ? 'https://' : 'http://';
			$url .= $_SERVER['SERVER_NAME'];
		}
		if ($showRequestedUri) {
			$url .= $_SERVER['REQUEST_URI'];
		}
		if ($urlencode) {
			$url = urlencode($url);
		}

		return $url;
	}
}
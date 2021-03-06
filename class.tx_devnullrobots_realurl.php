<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Jacob Floyd <jacob@cognifire.com>
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
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 * Hint: use extdeveval to insert/update function index above.
 */

/**
 * Plugin 'Robots.txt' for the 'dev_null_robots' extension.
 *
 * @author	Jacob Floyd <jacob@cognifire.com>
 * @package	TYPO3
 * @subpackage	tx_devnullrobots
 */
class tx_devnullrobots_realurl {

	/**
	 * Generates additional RealURL configuration and merges
         * it with provided configuration
	 *
	 * @param	array		$params: Default configuration
	 * @param tx_realurl_autoconfgen $pObj: Parent Object
	 * @return	array	Updated configuration
	 */
	function addRobotsConfig($params, &$pObj)	{
		return array_merge_recursive($params['config'], array(
		  'fileName' => array (
		    'index' => array (
		      'robots.txt' => array (
		        'keyValues' => array(
		          'type' => '1964',
		        ),
		      ),
		    ),
		  ),
		));
	}
}
?>

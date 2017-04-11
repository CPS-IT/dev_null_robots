<?php

/***************************************************************
*  Copyright notice
*  
*  (c) 2011 Wolfgang Rotschek <scotty@dev-null.at>
*  All rights reserved
*
*  This script is part of the Typo3 project. The Typo3 project is 
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


class tx_devnullrobots_fehook {    

	public function hookInitConfig(array &$parameters, TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController &$parentObject) {
		
		$TSconf = &$parameters['config'];
		$fePage  = &$parentObject;
		
		if($TSconf['devnullrobots.']['metaRobots'] == 0)
			return;
		
		// merge SETUP with page data
		if(!empty($fePage->page)) {
			$flag = $TSconf['devnullrobots.']['metaDefault'] | $fePage->page['tx_devnullrobots_flags'];
		}

		// get the meta content
		$meta = array(
			$flag & 1 ? 'noindex' : 'index',
			$flag & 2 ? 'nofollow' : 'follow'
		);
		
		// add the meta header
		$GLOBALS['TSFE']->additionalHeaderData[] = '<meta name="robots" content="' . implode(',', $meta) . '" />';
		
    }	
}

?>

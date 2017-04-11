<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Hook for rendering robots meta tag
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['configArrayPostProc'][$_EXTKEY] = 'EXT:dev_null_robots/class.tx_devnullrobots_fehook.php:&tx_devnullrobots_fehook->hookInitConfig';

// RealURL autoconfiguration
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration'][$_EXTKEY] = 'EXT:dev_null_robots/class.tx_devnullrobots_realurl.php:&tx_devnullrobots_realurl->addRobotsConfig';
?>

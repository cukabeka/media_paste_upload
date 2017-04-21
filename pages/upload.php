<?php
/**
 * media_paste_upload Addon.
 * @author Friends Of REDAXO
 * @package redaxo
 * @var rex_addon $this
 */
	
$addon = rex_addon::get('media_paste_upload');
$addon->getProperty("php_debug");

if($addon->getProperty("php_debug")) {
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
}

require_once rex_path::addon("media_paste_upload", "fragments/action.upload.php");

<?php
/**
 * media_paste_upload Addon.
 * @author Friends Of REDAXO
 * @package redaxo
 * @var rex_addon $this
 */
	
$addon = rex_addon::get('media_paste_upload');

require_once rex_path::addon("media_paste_upload", "fragments/action.upload.php");

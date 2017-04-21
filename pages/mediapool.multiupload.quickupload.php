<?php

/**
 * media_paste_upload Addon.
 * @author Friends Of REDAXO
 * @package redaxo
 * @var rex_addon $this
 */

$upload = new rex_media_paste_upload;
$upload->setCallback("complete", "pasteuploadEditFile");
echo $upload->createUploadForm();


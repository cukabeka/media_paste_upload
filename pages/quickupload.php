<?php

/**
 * multiupload Addon.
 * @author Friends Of REDAXO
 * @package redaxo
 * @var rex_addon $this
 */


echo rex_view::title('media_paste_upload');

$upload = new rex_media_paste_upload;
$upload->setCallback("complete", "multiuploadEditFile");
echo $upload->createUploadForm();



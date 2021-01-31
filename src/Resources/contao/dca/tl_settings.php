<?php

/*
 * This file is part of Gallery Creator Bundle.
 *
 * (c) Marko Cupic 2021 <m.cupic@gmx.ch>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/markocupic/gallery-creator-bundle
 */

/**
 * Add to palette
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{gallery_creator_legend:hide},gc_error404_thumb,gc_disable_backend_edit_protection,gc_album_import_copy_files,gc_read_exif';

/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['gc_disable_backend_edit_protection'] = array(
	'inputType' => 'checkbox',
	'eval'      => array('fieldType' => 'checkbox', 'tl_class' => 'clr')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['gc_album_import_copy_files'] = array(
	'inputType' => 'checkbox'
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['gc_read_exif'] = array(
	'inputType' => 'checkbox'
);
$GLOBALS['TL_DCA']['tl_settings']['fields']['gc_error404_thumb'] = array(
	'inputType' => 'fileTree',
	'eval'      => array('fieldType' => 'radio', 'extensions' => 'jpg,jpeg,png,gif', 'filesOnly' => true, 'files' => true, 'mandatory' => false, 'tl_class' => 'clr')
);

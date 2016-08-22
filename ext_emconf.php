<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Michael Klapper <michael.klapper@morphodo.com>
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

$EM_CONF[$_EXTKEY] = [
	'title' => 'Improved backend groups management interface.',
	'description' => 'This extension provide several new options to restructure large amount of be_groups records.',
	'category' => 'misc',
	'author' => 'Michael Klapper',
	'author_email' => 'development@morphodo.com',
	'shy' => 1,
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '2.0.0',
	'constraints' => [
		'depends' => [
			'php' => '5.4-0.0.0',
			'typo3' => '6.2.0-6.2.99',
		],
		'conflicts' => [
		],
		'suggests' => [
		],
	],
	'_md5_values_when_last_written' => '',
	'suggests' => [
	],
];

<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['be_groups']['ctrl']['label_userFunc'] = 'Morphodo\\BeGroups\\Service\\TceMain\\LabelHelper->getCombinedTitle';

$imagesFolder = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('be_groups') . '/Resources/Public/Images/';
$tempColumns = [
	'tx_begroups_kind' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind',
		'config' => [
			'type' => 'select',
			'items' => [
				[
					'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.0',
					'0',
					$imagesFolder . 'selicon_be_groups_tx_begroups_kind_0.gif'
				],
				[
					'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.1',
					'1',
					$imagesFolder . 'selicon_be_groups_tx_begroups_kind_1.gif'
				],
				[
					'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.2',
					'2',
					$imagesFolder . 'selicon_be_groups_tx_begroups_kind_2.gif'
				],
				[
					'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.3',
					'3',
					$imagesFolder . 'selicon_be_groups_tx_begroups_kind_3.gif'
				],
				[
					'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.4',
					'4',
					$imagesFolder . 'selicon_be_groups_tx_begroups_kind_4.gif'
				],
				[
					'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.5',
					'5',
					$imagesFolder . 'selicon_be_groups_tx_begroups_kind_5.gif'
				],
				[
					'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.6',
					'6',
					$imagesFolder . 'selicon_be_groups_tx_begroups_kind_6.gif'
				],
				[
					'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.7',
					'7',
					$imagesFolder . 'selicon_be_groups_tx_begroups_kind_7.gif'
				],
				[
					'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.8',
					'8',
					$imagesFolder . 'selicon_be_groups_tx_begroups_kind_8.gif'
				],
			],
			'size' => 1,
			'maxitems' => 1,
		]
	],
	'subgroup_fm' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.file_mount',
		'config' => [
			'type' => 'select',
			'foreign_table' => 'be_groups',
			'foreign_table_where' => ' AND be_groups.tx_begroups_kind = 5',
			'size' => 10,
			'maxitems' => 999,
			'minitems' => 0,
			'noIconsBelowSelect' => TRUE,
			'multiple' => TRUE,
			'renderMode' => $GLOBALS['TYPO3_CONF_VARS']['BE']['accessListRenderMode'],
			'appearance' => [
				'newRecordLinkPosition' => 'bottom',
				'collapseAll' => 1,
				'expandSingle' => 1,
			],
			'wizards' => [
				'add' => [
					'icon' => 'add.gif',
					'params' => [
						'pid' => 0,
						'setValue' => 'prepend',
						'table' => 'be_groups',
					],
					'script' => 'wizard_add.php',
					'title' => 'LLL:EXT:lang/locallang_tca.xml:be_users.usergroup_add_title',
					'type' => 'script',
				]
			]
		]
	],
	'subgroup_pm' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.db_mount',
		'config' => [
			'type' => 'select',
			'foreign_table' => 'be_groups',
			'foreign_table_where' => ' AND be_groups.tx_begroups_kind = 6',
			'size' => 10,
			'maxitems' => 999,
			'minitems' => 0,
			'noIconsBelowSelect' => TRUE,
			'multiple' => TRUE,
			'renderMode' => $GLOBALS['TYPO3_CONF_VARS']['BE']['accessListRenderMode'],
			'appearance' => [
				'newRecordLinkPosition' => 'bottom',
				'collapseAll' => 1,
				'expandSingle' => 1,
			],
		]
	],
	'subgroup_ws' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.workspace_rights',
		'config' => [
			'type' => 'select',
			'foreign_table' => 'be_groups',
			'foreign_table_where' => ' AND be_groups.tx_begroups_kind = 8',
			'size' => 10,
			'maxitems' => 999,
			'minitems' => 0,
			'noIconsBelowSelect' => TRUE,
			'multiple' => TRUE,
			'renderMode' => $GLOBALS['TYPO3_CONF_VARS']['BE']['accessListRenderMode'],
			'appearance' => [
				'newRecordLinkPosition' => 'bottom',
				'collapseAll' => 1,
				'expandSingle' => 1,
			],
		]
	],
	'subgroup_r' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.rights',
		'config' => [
			'type' => 'select',
			'foreign_table' => 'be_groups',
			'foreign_table_where' => ' AND be_groups.tx_begroups_kind = 1',
			'size' => 10,
			'maxitems' => 999,
			'minitems' => 0,
			'noIconsBelowSelect' => TRUE,
			'multiple' => TRUE,
			'renderMode' => $GLOBALS['TYPO3_CONF_VARS']['BE']['accessListRenderMode'],
			'appearance' => [
				'newRecordLinkPosition' => 'bottom',
				'collapseAll' => 1,
				'expandSingle' => 1,
			],
		]
	],
	'subgroup_pa' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.page_access',
		'config' => [
			'type' => 'select',
			'foreign_table' => 'be_groups',
			'foreign_table_where' => ' AND be_groups.tx_begroups_kind = 4',
			'size' => 10,
			'maxitems' => 999,
			'minitems' => 0,
			'noIconsBelowSelect' => TRUE,
			'multiple' => TRUE,
			'renderMode' => $GLOBALS['TYPO3_CONF_VARS']['BE']['accessListRenderMode'],
			'appearance' => [
				'newRecordLinkPosition' => 'bottom',
				'collapseAll' => 1,
				'expandSingle' => 1,
			],
		]
	],
	'subgroup_ts' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.tsconfig',
		'config' => [
			'type' => 'select',
			'foreign_table' => 'be_groups',
			'foreign_table_where' => ' AND be_groups.tx_begroups_kind = 7',
			'size' => 10,
			'maxitems' => 999,
			'minitems' => 0,
			'noIconsBelowSelect' => TRUE,
			'multiple' => TRUE,
			'renderMode' => $GLOBALS['TYPO3_CONF_VARS']['BE']['accessListRenderMode'],
			'appearance' => [
				'newRecordLinkPosition' => 'bottom',
				'collapseAll' => 1,
				'expandSingle' => 1,
			],
		]
	],
	'subgroup_l' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.language',
		'config' => [
			'type' => 'select',
			'foreign_table' => 'be_groups',
			'foreign_table_where' => ' AND be_groups.tx_begroups_kind = 2',
			'size' => 10,
			'maxitems' => 999,
			'minitems' => 0,
			'noIconsBelowSelect' => TRUE,
			'multiple' => TRUE,
			'renderMode' => $GLOBALS['TYPO3_CONF_VARS']['BE']['accessListRenderMode'],
			'appearance' => [
				'newRecordLinkPosition' => 'bottom',
				'collapseAll' => 1,
				'expandSingle' => 1,
			],
		]
	],
];

t3lib_div::loadTCA('be_groups');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('be_groups', $tempColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('be_groups', 'tx_begroups_kind;;;;1-1-1', '', 'after:title');
unset($tempColumns);

// register the new types field
$GLOBALS['TCA']['be_groups']['ctrl']['type'] = 'tx_begroups_kind';
$GLOBALS['TCA']['be_groups']['ctrl']['typeicon_column'] = 'tx_begroups_kind';
$GLOBALS['TCA']['be_groups']['ctrl']['typeicons'] = [
	'1' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('be_groups') . '/Resources/Public/Images/selicon_be_groups_tx_begroups_kind_1.gif',
	'2' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('be_groups') . '/Resources/Public/Images/selicon_be_groups_tx_begroups_kind_2.gif',
	'3' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('be_groups') . '/Resources/Public/Images/selicon_be_groups_tx_begroups_kind_3.gif',
	'4' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('be_groups') . '/Resources/Public/Images/selicon_be_groups_tx_begroups_kind_4.gif',
	'5' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('be_groups') . '/Resources/Public/Images/selicon_be_groups_tx_begroups_kind_5.gif',
	'6' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('be_groups') . '/Resources/Public/Images/selicon_be_groups_tx_begroups_kind_6.gif',
	'7' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('be_groups') . '/Resources/Public/Images/selicon_be_groups_tx_begroups_kind_7.gif',
	'8' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('be_groups') . '/Resources/Public/Images/selicon_be_groups_tx_begroups_kind_8.gif',
];

/**
 * 0 = all
 * 1 = authorization + extensions
 * 2 = language
 * 3 = meta
 * 4 = page access group
 * 5 = starting point of files system
 * 6 = starting point of page tree
 * 7 = tsconfig
 * 8 = workspace
 */

// Improve visibility of subgroups in usergroup field to show only META groups
t3lib_div::loadTCA('be_users');
$GLOBALS['TCA']['be_users']['columns']['usergroup']['config']['foreign_table_where'] = ' AND hide_in_lists = 0 ORDER BY be_groups.tx_begroups_kind, be_groups.title';

$tabExtended = '';
$tabExtendedFields = '';
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('tt_news')) {
	$tabExtendedFields .= 'tt_news_categorymounts;;;;1-1-1, ';
}
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('dam')) {
	$tabExtendedFields .= 'tx_dam_mountpoints;;;;1-1-1, ';
}
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('templavoila')) {
	$tabExtendedFields .= 'tx_templavoila_access;;;;1-1-1, ';
}
if (trim($tabExtendedFields) != '') {
	$tabExtended = '--div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.extended, ' . $tabExtendedFields;
}
if (version_compare(TYPO3_version, '6.0.0', '>=')) {
	$filePermissions = '--div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xlf:be_groups.tabs.file_permissions, file_permissions,';
} else {
	$filePermissions = '';
}

// define the new types and their showitems
$GLOBALS['TCA']['be_groups']['types']['0'] = ['showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, subgroup;;;;3-3-3, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.base_rights, inc_access_lists;;;;1-1-1, groupMods, tables_select, tables_modify, pagetypes_select, non_exclude_fields, explicit_allowdeny , allowed_languages;;;;2-2-2, custom_options;;;;3-3-3, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.mounts_and_workspaces, db_mountpoints;;;;1-1-1,file_mountpoints, fileoper_perms, workspace_perms;;;;2-2-2, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2, TSconfig;;;;3-3-3, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.extended'];
$GLOBALS['TCA']['be_groups']['types']['1'] = ['showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.modul_rights, groupMods, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xlf:be_groups.tabs.table_rights, tables_select, tables_modify, non_exclude_fields, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xlf:be_groups.tabs.page_rights, pagetypes_select, explicit_allowdeny, ' . $filePermissions . $tabExtended . ' --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2'];
$GLOBALS['TCA']['be_groups']['types']['2'] = ['showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.language_rights, allowed_languages, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2'];
$GLOBALS['TCA']['be_groups']['types']['3'] = ['showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.rights, subgroup_r,subgroup_pa,subgroup_ts, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.mountAndWs, subgroup_fm,subgroup_pm,subgroup_ws, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.language, subgroup_l, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2'];
$GLOBALS['TCA']['be_groups']['types']['4'] = ['showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2'];
$GLOBALS['TCA']['be_groups']['types']['5'] = ['showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.file_mount, file_mountpoints, fileoper_perms, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2'];
$GLOBALS['TCA']['be_groups']['types']['6'] = ['showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.db_mount, db_mountpoints, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2'];
$GLOBALS['TCA']['be_groups']['types']['7'] = ['showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.tsconfig, TSconfig, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2'];
$GLOBALS['TCA']['be_groups']['types']['8'] = ['showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.workspace_rights, workspace_perms;;;;2-2-2, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2'];

// hide all META subgroups to avoid too much confusion.
$GLOBALS['TCA']['be_groups']['columns']['subgroup']['config']['foreign_table_where'] = 'AND tx_begroups_kind NOT IN(3) AND NOT(be_groups.uid = ###THIS_UID###) AND be_groups.hidden=0 ORDER BY be_groups.tx_begroups_kind,be_groups.title';
$GLOBALS['TCA']['be_groups']['columns']['subgroup']['config']['wizards']['add'] = [
	'icon' => 'add.gif',
	'params' => [
		'pid' => 0,
		'setValue' => 'prepend',
		'table' => 'be_groups',
	],
	'script' => 'wizard_add.php',
	'title' => 'LLL:EXT:lang/locallang_tca.xml:be_users.usergroup_add_title',
	'type' => 'script',
];


$GLOBALS['TCA']['be_groups']['columns']['file_mountpoints']['config']['renderMode'] = 'checkbox';
$GLOBALS['TCA']['be_groups']['columns']['file_mountpoints']['config']['wizards'] = NULL;
$GLOBALS['TCA']['be_groups']['columns']['pagetypes_select']['config']['renderMode'] = 'checkbox';
//~ $GLOBALS['TCA']['be_groups']['columns']['groupMods']['config']['renderMode']= 'checkbox';
//~ $GLOBALS['TCA']['be_groups']['columns']['tables_modify']['config']['renderMode']= 'checkbox';
//~ $GLOBALS['TCA']['be_groups']['columns']['tables_select']['config']['renderMode']= 'checkbox';
//~ $GLOBALS['TCA']['be_groups']['columns']['non_exclude_fields']['config']['renderMode']= 'checkbox';

// change list sorting from 'title' to 'tx_begroups_kind'
$GLOBALS['TCA']['be_groups']['ctrl']['default_sortby'] = 'ORDER BY tx_begroups_kind,title ASC';

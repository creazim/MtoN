<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_nbomn_domain_model_track'] = array(
	'ctrl' => $TCA['tx_nbomn_domain_model_track']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, nr, cd, song',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, nr, cd, song,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_nbomn_domain_model_track',
				'foreign_table_where' => 'AND tx_nbomn_domain_model_track.pid=###CURRENT_PID### AND tx_nbomn_domain_model_track.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' =>array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'nr' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:nbomn/Resources/Private/Language/locallang_db.xml:tx_nbomn_domain_model_track.nr',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'cd' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:nbomn/Resources/Private/Language/locallang_db.xml:tx_nbomn_domain_model_track.cd',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_nbomn_domain_model_cd',
				// manually changed: In this relation table, we need a relation, so minitems = 1
				'minitems' => 1,
				'maxitems' => 1,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 0,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						// manually changed: Make it a PopUp (Typo3 Bug: invalid Ajax UID)
						'type' => 'popup',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table'=> 'tx_nbomn_domain_model_cd',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'song' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:nbomn/Resources/Private/Language/locallang_db.xml:tx_nbomn_domain_model_track.song',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_nbomn_domain_model_song',
				// manually changed: In this relation table, we need a relation, so minitems = 1
				'minitems' => 1,
				'maxitems' => 1,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 0,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						// manually changed: Make it a PopUp (Typo3 Bug: invalid Ajax UID)
						'type' => 'popup',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table'=> 'tx_nbomn_domain_model_song',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		// manually changed: we don't need this:
		/*'cd' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		'song' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),*/
	),
);
?>
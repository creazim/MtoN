<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}




t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'MtoN');


t3lib_extMgm::addLLrefForTCAdescr('tx_nbomn_domain_model_category', 'EXT:nbomn/Resources/Private/Language/locallang_csh_tx_nbomn_domain_model_category.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_nbomn_domain_model_category');
$TCA['tx_nbomn_domain_model_category'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:nbomn/Resources/Private/Language/locallang_db.xml:tx_nbomn_domain_model_category',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'dividers2tabs' => true,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Category.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_nbomn_domain_model_category.gif'
	),
);

?>
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

t3lib_extMgm::addLLrefForTCAdescr('tx_nbomn_domain_model_person', 'EXT:nbomn/Resources/Private/Language/locallang_csh_tx_nbomn_domain_model_person.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_nbomn_domain_model_person');
$TCA['tx_nbomn_domain_model_person'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:nbomn/Resources/Private/Language/locallang_db.xml:tx_nbomn_domain_model_person',
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Person.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_nbomn_domain_model_person.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_nbomn_domain_model_company', 'EXT:nbomn/Resources/Private/Language/locallang_csh_tx_nbomn_domain_model_company.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_nbomn_domain_model_company');
$TCA['tx_nbomn_domain_model_company'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:nbomn/Resources/Private/Language/locallang_db.xml:tx_nbomn_domain_model_company',
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Company.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_nbomn_domain_model_company.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_nbomn_domain_model_cd', 'EXT:nbomn/Resources/Private/Language/locallang_csh_tx_nbomn_domain_model_cd.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_nbomn_domain_model_cd');
$TCA['tx_nbomn_domain_model_cd'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:nbomn/Resources/Private/Language/locallang_db.xml:tx_nbomn_domain_model_cd',
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/CD.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_nbomn_domain_model_cd.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_nbomn_domain_model_track', 'EXT:nbomn/Resources/Private/Language/locallang_csh_tx_nbomn_domain_model_track.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_nbomn_domain_model_track');
$TCA['tx_nbomn_domain_model_track'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:nbomn/Resources/Private/Language/locallang_db.xml:tx_nbomn_domain_model_track',
		// manually changed: The label of the Track is a combination of CD name:
		'label' => 'cd',
		// manually changed: and the title of the song:
		'label_alt' => 'song',
		// manually changed: and we display both:
		'label_alt_force' => true,
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Track.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_nbomn_domain_model_track.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_nbomn_domain_model_song', 'EXT:nbomn/Resources/Private/Language/locallang_csh_tx_nbomn_domain_model_song.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_nbomn_domain_model_song');
$TCA['tx_nbomn_domain_model_song'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:nbomn/Resources/Private/Language/locallang_db.xml:tx_nbomn_domain_model_song',
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Song.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_nbomn_domain_model_song.gif'
	),
);

?>
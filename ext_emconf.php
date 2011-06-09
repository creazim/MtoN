<?php

########################################################################
# Extension Manager/Repository config file for ext "nbomn".
#
# Auto generated 09-06-2011 13:22
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'MtoN',
	'description' => 'Example on how to create m:n Relations with Extbase and Fluid. This extension does nothing in the Frontend! Add a Folder in the Backend and insert new Category Objects',
	'category' => '',
	'author' => 'Noël Bossart',
	'author_email' => 'n.company@me.com',
	'author_company' => 'www.noelboss.ch',
	'shy' => '',
	'dependencies' => 'cms,extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'test',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:16:{s:21:"ExtensionBuilder.json";s:4:"27bc";s:12:"ext_icon.gif";s:4:"e922";s:14:"ext_tables.php";s:4:"2ca1";s:14:"ext_tables.sql";s:4:"3fd6";s:41:"Classes/Controller/CategoryController.php";s:4:"1cda";s:33:"Classes/Domain/Model/Category.php";s:4:"c5b6";s:48:"Classes/Domain/Repository/CategoryRepository.php";s:4:"5c80";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"b2d2";s:30:"Configuration/TCA/Category.php";s:4:"e819";s:40:"Resources/Private/Language/locallang.xml";s:4:"0478";s:75:"Resources/Private/Language/locallang_csh_tx_nbomn_domain_model_category.xml";s:4:"e7bb";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"b851";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:57:"Resources/Public/Icons/tx_nbomn_domain_model_category.gif";s:4:"905a";s:35:"Tests/Domain/Model/CategoryTest.php";s:4:"6104";s:14:"doc/manual.sxw";s:4:"8d2d";}',
);

?>
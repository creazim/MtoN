<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Noël Bossart <n.company@me.com>, www.noelboss.ch
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


/**
 * Controller for the CD object
 */
class Tx_Nbomn_Controller_CDController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * cDRepository
	 *
	 * @var Tx_Nbomn_Domain_Repository_CDRepository
	 */
	protected $cDRepository;

	/**
	 * injectCDRepository
	 *
	 * @param Tx_Nbomn_Domain_Repository_CDRepository $cDRepository
	 * @return void
	 */
	public function injectCDRepository(Tx_Nbomn_Domain_Repository_CDRepository $cDRepository) {
		$this->cDRepository = $cDRepository;
	}

	/**
	 * Displays all CDs
	 *
	 * @return void
	 */
	public function listAction() {
		$configuration = $this->configurationManager->getConfiguration(Tx_Extbase_Configuration_ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
		if(empty($configuration['persistence']['storagePid'])){
			$this->flashMessageContainer->add('No storagePid! You have to include the static template of this extension and set the constant plugin.tx_' . t3lib_div::lcfirst($this->extensionName) . '.persistence.storagePid in the constant editor');
		}
		$cDs = $this->cDRepository->findAll();
		$this->view->assign('cDs', $cDs);
	}

	/**
	 * Displays a single CD
	 *
	 * @param Tx_Nbomn_Domain_Model_CD $cD the CD to display
	 * @return string The rendered view
	 */
	public function showAction(Tx_Nbomn_Domain_Model_CD $cD) {
		$this->view->assign('cD', $cD);
	}

	/**
	 * Displays a form for creating a new  CD
	 *
	 * @param Tx_Nbomn_Domain_Model_CD $newCD a fresh CD object which has not yet been added to the repository
	 * @return void
	 * @dontvalidate $newCD
	 */
	public function newAction(Tx_Nbomn_Domain_Model_CD $newCD = NULL) {
		
		$this->view->assign('newCD', $newCD);
	}

	/**
	 * Creates a new CD and forwards to the list action.
	 *
	 * @param Tx_Nbomn_Domain_Model_CD $newCD a fresh CD object which has not yet been added to the repository
	 * @return void
	 */
	public function createAction(Tx_Nbomn_Domain_Model_CD $newCD) {
		$this->cDRepository->add($newCD);
		$this->flashMessageContainer->add('Your new CD was created.');
		
		$this->redirect('list');
	}

	/**
	 * Displays a form for editing an existing CD
	 *
	 * @param Tx_Nbomn_Domain_Model_CD $cD the CD to display
	 * @return string A form to edit a CD
	 */
	public function editAction(Tx_Nbomn_Domain_Model_CD $cD) {
		$this->view->assign('cD', $cD);
	}

	/**
	 * Updates an existing CD and forwards to the list action afterwards.
	 *
	 * @param Tx_Nbomn_Domain_Model_CD $cD the CD to display
	 * @return
	 */
	public function updateAction(Tx_Nbomn_Domain_Model_CD $cD) {
		$this->cDRepository->update($cD);
		$this->flashMessageContainer->add('Your CD was updated.');
		$this->redirect('list');
	}

	/**
	 * Deletes an existing CD
	 *
	 * @param Tx_Nbomn_Domain_Model_CD $cD the CD to be deleted
	 * @return void
	 */
	public function deleteAction(Tx_Nbomn_Domain_Model_CD $cD) {
		$this->cDRepository->remove($cD);
		$this->flashMessageContainer->add('Your CD was removed.');
		$this->redirect('list');
	}

}
?>
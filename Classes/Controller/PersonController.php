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
 * Controller for the Person object
 */
class Tx_Nbomn_Controller_PersonController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * personRepository
	 *
	 * @var Tx_Nbomn_Domain_Repository_PersonRepository
	 */
	protected $personRepository;

	/**
	 * injectPersonRepository
	 *
	 * @param Tx_Nbomn_Domain_Repository_PersonRepository $personRepository
	 * @return void
	 */
	public function injectPersonRepository(Tx_Nbomn_Domain_Repository_PersonRepository $personRepository) {
		$this->personRepository = $personRepository;
	}

	/**
	 * Displays all Persons
	 *
	 * @return void
	 */
	public function listAction() {
		$configuration = $this->configurationManager->getConfiguration(Tx_Extbase_Configuration_ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
		if(empty($configuration['persistence']['storagePid'])){
			$this->flashMessageContainer->add('No storagePid! You have to include the static template of this extension and set the constant plugin.tx_' . t3lib_div::lcfirst($this->extensionName) . '.persistence.storagePid in the constant editor');
		}
		$persons = $this->personRepository->findAll();
		$this->view->assign('persons', $persons);
	}

	/**
	 * Displays a single Person
	 *
	 * @param Tx_Nbomn_Domain_Model_Person $person the Person to display
	 * @return string The rendered view
	 */
	public function showAction(Tx_Nbomn_Domain_Model_Person $person) {
		$this->view->assign('person', $person);
	}

	/**
	 * Displays a form for creating a new  Person
	 *
	 * @param Tx_Nbomn_Domain_Model_Person $newPerson a fresh Person object which has not yet been added to the repository
	 * @return void
	 * @dontvalidate $newPerson
	 */
	public function newAction(Tx_Nbomn_Domain_Model_Person $newPerson = NULL) {
		
		$this->view->assign('newPerson', $newPerson);
	}

	/**
	 * Creates a new Person and forwards to the list action.
	 *
	 * @param Tx_Nbomn_Domain_Model_Person $newPerson a fresh Person object which has not yet been added to the repository
	 * @return void
	 */
	public function createAction(Tx_Nbomn_Domain_Model_Person $newPerson) {
		$this->personRepository->add($newPerson);
		$this->flashMessageContainer->add('Your new Person was created.');
		
		$this->redirect('list');
	}

	/**
	 * Displays a form for editing an existing Person
	 *
	 * @param Tx_Nbomn_Domain_Model_Person $person the Person to display
	 * @return string A form to edit a Person
	 */
	public function editAction(Tx_Nbomn_Domain_Model_Person $person) {
		$this->view->assign('person', $person);
	}

	/**
	 * Updates an existing Person and forwards to the list action afterwards.
	 *
	 * @param Tx_Nbomn_Domain_Model_Person $person the Person to display
	 * @return
	 */
	public function updateAction(Tx_Nbomn_Domain_Model_Person $person) {
		$this->personRepository->update($person);
		$this->flashMessageContainer->add('Your Person was updated.');
		$this->redirect('list');
	}

	/**
	 * Deletes an existing Person
	 *
	 * @param Tx_Nbomn_Domain_Model_Person $person the Person to be deleted
	 * @return void
	 */
	public function deleteAction(Tx_Nbomn_Domain_Model_Person $person) {
		$this->personRepository->remove($person);
		$this->flashMessageContainer->add('Your Person was removed.');
		$this->redirect('list');
	}

}
?>
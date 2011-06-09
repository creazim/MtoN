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
 * Controller for the Category object
 */
class Tx_Nbomn_Controller_CategoryController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * categoryRepository
	 *
	 * @var Tx_Nbomn_Domain_Repository_CategoryRepository
	 */
	protected $categoryRepository;

	/**
	 * injectCategoryRepository
	 *
	 * @param Tx_Nbomn_Domain_Repository_CategoryRepository $categoryRepository
	 * @return void
	 */
	public function injectCategoryRepository(Tx_Nbomn_Domain_Repository_CategoryRepository $categoryRepository) {
		$this->categoryRepository = $categoryRepository;
	}

	/**
	 * Displays all Categories
	 *
	 * @return void
	 */
	public function listAction() {
		$configuration = $this->configurationManager->getConfiguration(Tx_Extbase_Configuration_ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
		if(empty($configuration['persistence']['storagePid'])){
			$this->flashMessageContainer->add('No storagePid! You have to include the static template of this extension and set the constant plugin.tx_' . t3lib_div::lcfirst($this->extensionName) . '.persistence.storagePid in the constant editor');
		}
		$categories = $this->categoryRepository->findAll();
		$this->view->assign('categories', $categories);
	}

	/**
	 * Displays a single Category
	 *
	 * @param Tx_Nbomn_Domain_Model_Category $category the Category to display
	 * @return string The rendered view
	 */
	public function showAction(Tx_Nbomn_Domain_Model_Category $category) {
		$this->view->assign('category', $category);
	}

	/**
	 * Displays a form for creating a new  Category
	 *
	 * @param Tx_Nbomn_Domain_Model_Category $newCategory a fresh Category object which has not yet been added to the repository
	 * @return void
	 * @dontvalidate $newCategory
	 */
	public function newAction(Tx_Nbomn_Domain_Model_Category $newCategory = NULL) {
		
		$this->view->assign('newCategory', $newCategory);
	}

	/**
	 * Creates a new Category and forwards to the list action.
	 *
	 * @param Tx_Nbomn_Domain_Model_Category $newCategory a fresh Category object which has not yet been added to the repository
	 * @return void
	 */
	public function createAction(Tx_Nbomn_Domain_Model_Category $newCategory) {
		$this->categoryRepository->add($newCategory);
		$this->flashMessageContainer->add('Your new Category was created.');
		
		$this->redirect('list');
	}

	/**
	 * Displays a form for editing an existing Category
	 *
	 * @param Tx_Nbomn_Domain_Model_Category $category the Category to display
	 * @return string A form to edit a Category
	 */
	public function editAction(Tx_Nbomn_Domain_Model_Category $category) {
		$this->view->assign('category', $category);
	}

	/**
	 * Updates an existing Category and forwards to the list action afterwards.
	 *
	 * @param Tx_Nbomn_Domain_Model_Category $category the Category to display
	 * @return
	 */
	public function updateAction(Tx_Nbomn_Domain_Model_Category $category) {
		$this->categoryRepository->update($category);
		$this->flashMessageContainer->add('Your Category was updated.');
		$this->redirect('list');
	}

	/**
	 * Deletes an existing Category
	 *
	 * @param Tx_Nbomn_Domain_Model_Category $category the Category to be deleted
	 * @return void
	 */
	public function deleteAction(Tx_Nbomn_Domain_Model_Category $category) {
		$this->categoryRepository->remove($category);
		$this->flashMessageContainer->add('Your Category was removed.');
		$this->redirect('list');
	}

}
?>
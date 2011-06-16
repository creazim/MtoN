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
 * Categorie with Subcategories
 */
class Tx_Nbomn_Domain_Model_Category extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Name
	 *
	 * @var string $name
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * Sub Categories
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Nbomn_Domain_Model_Category> $subcategory
	 */
	protected $subcategory;

	/**
	 * Parent Categories
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Nbomn_Domain_Model_Category> $parentcategory
	 */
	protected $parentcategory;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		* Do not modify this method!
		* It will be rewritten on each save in the extension builder
		* You may modify the constructor of this class instead
		*/
		$this->subcategory = new Tx_Extbase_Persistence_ObjectStorage();
		$this->parentcategory = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Adds a Category
	 *
	 * @param Tx_Nbomn_Domain_Model_Subsubcategory the Subsubcategory to be added
	 * @return void
	 */
	public function addSubcategory(Tx_Nbomn_Domain_Model_Category $subcategory) {
		$this->subcategory->attach($subcategory);
	}

	/**
	 * Removes a Category
	 *
	 * @param Tx_Nbomn_Domain_Model_Subsubcategory the Subsubcategory to be removed
	 * @return void
	 */
	public function removeSubcategory(Tx_Nbomn_Domain_Model_Category $subcategoryToRemove) {
		$this->subcategory->detach($subcategoryToRemove);
	}

	/**
	 * Returns the subcategory
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Nbomn_Domain_Model_Subsubcategory>
	 */
	public function getSubcategory() {
		return $this->subcategory;
	}

	/**
	 * Sets the subcategory
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Nbomn_Domain_Model_Subsubcategory> $subsubcategory
	 * @return void
	 */
	public function setSubcategory(Tx_Extbase_Persistence_ObjectStorage $subcategory) {
		$this->subcategory = $subcategory;
	}

	/**
	 * Adds a Category
	 *
	 * @param Tx_Nbomn_Domain_Model_Category $parentcategory
	 * @return void
	 */
	public function addParentcategory(Tx_Nbomn_Domain_Model_Category $parentcategory) {
		$this->parentcategory->attach($parentcategory);
	}

	/**
	 * Removes a Category
	 *
	 * @param Tx_Nbomn_Domain_Model_Category $parentcategoryToRemove The Category to be removed
	 * @return void
	 */
	public function removeParentcategory(Tx_Nbomn_Domain_Model_Category $parentcategoryToRemove) {
		$this->parentcategory->detach($parentcategoryToRemove);
	}

	/**
	 * Returns the parentcategory
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Nbomn_Domain_Model_Category> $parentcategory
	 */
	public function getParentcategory() {
		return $this->parentcategory;
	}

	/**
	 * Sets the parentcategory
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Nbomn_Domain_Model_Category> $parentcategory
	 * @return void
	 */
	public function setParentcategory($parentcategory) {
		$this->parentcategory = $parentcategory;
	}

}
?>
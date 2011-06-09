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
*  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_Nbomn_Domain_Model_Category.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage MtoN
 *
 * @author Noël Bossart <n.company@me.com>
 */
class Tx_Nbomn_Domain_Model_CategoryTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Nbomn_Domain_Model_Category
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Nbomn_Domain_Model_Category();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNameForStringSetsName() { 
		$this->fixture->setName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getName()
		);
	}
	
	/**
	 * @test
	 */
	public function getCategoryMmReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getCategoryMm()
		);
	}

	/**
	 * @test
	 */
	public function setCategoryMmForIntegerSetsCategoryMm() { 
		$this->fixture->setCategoryMm(12);

		$this->assertSame(
			12,
			$this->fixture->getCategoryMm()
		);
	}
	
	/**
	 * @test
	 */
	public function getSubcategoryReturnsInitialValueForObjectStorageContainingTx_Nbomn_Domain_Model_Category() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getSubcategory()
		);
	}

	/**
	 * @test
	 */
	public function setSubcategoryForObjectStorageContainingTx_Nbomn_Domain_Model_CategorySetsSubcategory() { 
		$subcategory = new Tx_Nbomn_Domain_Model_Category();
		$objectStorageHoldingExactlyOneSubcategory = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneSubcategory->attach($subcategory);
		$this->fixture->setSubcategory($objectStorageHoldingExactlyOneSubcategory);

		$this->assertSame(
			$objectStorageHoldingExactlyOneSubcategory,
			$this->fixture->getSubcategory()
		);
	}
	
	/**
	 * @test
	 */
	public function addSubcategoryToObjectStorageHoldingSubcategory() {
		$subcategory = new Tx_Nbomn_Domain_Model_Category();
		$objectStorageHoldingExactlyOneSubcategory = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneSubcategory->attach($subcategory);
		$this->fixture->addSubcategory($subcategory);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneSubcategory,
			$this->fixture->getSubcategory()
		);
	}

	/**
	 * @test
	 */
	public function removeSubcategoryFromObjectStorageHoldingSubcategory() {
		$subcategory = new Tx_Nbomn_Domain_Model_Category();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($subcategory);
		$localObjectStorage->detach($subcategory);
		$this->fixture->addSubcategory($subcategory);
		$this->fixture->removeSubcategory($subcategory);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getSubcategory()
		);
	}
	
}
?>
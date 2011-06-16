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
 * Test case for class Tx_Nbomn_Domain_Model_Person.
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
class Tx_Nbomn_Domain_Model_PersonTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Nbomn_Domain_Model_Person
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Nbomn_Domain_Model_Person();
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
	public function getCompaniesReturnsInitialValueForObjectStorageContainingTx_Nbomn_Domain_Model_Company() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getCompanies()
		);
	}

	/**
	 * @test
	 */
	public function setCompaniesForObjectStorageContainingTx_Nbomn_Domain_Model_CompanySetsCompanies() { 
		$company = new Tx_Nbomn_Domain_Model_Company();
		$objectStorageHoldingExactlyOneCompanies = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCompanies->attach($company);
		$this->fixture->setCompanies($objectStorageHoldingExactlyOneCompanies);

		$this->assertSame(
			$objectStorageHoldingExactlyOneCompanies,
			$this->fixture->getCompanies()
		);
	}
	
	/**
	 * @test
	 */
	public function addCompanyToObjectStorageHoldingCompanies() {
		$company = new Tx_Nbomn_Domain_Model_Company();
		$objectStorageHoldingExactlyOneCompany = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCompany->attach($company);
		$this->fixture->addCompany($company);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneCompany,
			$this->fixture->getCompanies()
		);
	}

	/**
	 * @test
	 */
	public function removeCompanyFromObjectStorageHoldingCompanies() {
		$company = new Tx_Nbomn_Domain_Model_Company();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($company);
		$localObjectStorage->detach($company);
		$this->fixture->addCompany($company);
		$this->fixture->removeCompany($company);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getCompanies()
		);
	}
	
}
?>
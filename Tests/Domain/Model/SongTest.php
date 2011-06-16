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
 * Test case for class Tx_Nbomn_Domain_Model_Song.
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
class Tx_Nbomn_Domain_Model_SongTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Nbomn_Domain_Model_Song
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Nbomn_Domain_Model_Song();
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
	public function getCdReturnsInitialValueForObjectStorageContainingTx_Nbomn_Domain_Model_Track() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getCd()
		);
	}

	/**
	 * @test
	 */
	public function setCdForObjectStorageContainingTx_Nbomn_Domain_Model_TrackSetsCd() { 
		$cd = new Tx_Nbomn_Domain_Model_Track();
		$objectStorageHoldingExactlyOneCd = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCd->attach($cd);
		$this->fixture->setCd($objectStorageHoldingExactlyOneCd);

		$this->assertSame(
			$objectStorageHoldingExactlyOneCd,
			$this->fixture->getCd()
		);
	}
	
	/**
	 * @test
	 */
	public function addCdToObjectStorageHoldingCd() {
		$cd = new Tx_Nbomn_Domain_Model_Track();
		$objectStorageHoldingExactlyOneCd = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCd->attach($cd);
		$this->fixture->addCd($cd);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneCd,
			$this->fixture->getCd()
		);
	}

	/**
	 * @test
	 */
	public function removeCdFromObjectStorageHoldingCd() {
		$cd = new Tx_Nbomn_Domain_Model_Track();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($cd);
		$localObjectStorage->detach($cd);
		$this->fixture->addCd($cd);
		$this->fixture->removeCd($cd);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getCd()
		);
	}
	
}
?>
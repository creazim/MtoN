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
 * Test case for class Tx_Nbomn_Domain_Model_CD.
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
class Tx_Nbomn_Domain_Model_CDTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Nbomn_Domain_Model_CD
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Nbomn_Domain_Model_CD();
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
	public function getTrackReturnsInitialValueForObjectStorageContainingTx_Nbomn_Domain_Model_Track() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getTrack()
		);
	}

	/**
	 * @test
	 */
	public function setTrackForObjectStorageContainingTx_Nbomn_Domain_Model_TrackSetsTrack() { 
		$track = new Tx_Nbomn_Domain_Model_Track();
		$objectStorageHoldingExactlyOneTrack = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneTrack->attach($track);
		$this->fixture->setTrack($objectStorageHoldingExactlyOneTrack);

		$this->assertSame(
			$objectStorageHoldingExactlyOneTrack,
			$this->fixture->getTrack()
		);
	}
	
	/**
	 * @test
	 */
	public function addTrackToObjectStorageHoldingTrack() {
		$track = new Tx_Nbomn_Domain_Model_Track();
		$objectStorageHoldingExactlyOneTrack = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneTrack->attach($track);
		$this->fixture->addTrack($track);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneTrack,
			$this->fixture->getTrack()
		);
	}

	/**
	 * @test
	 */
	public function removeTrackFromObjectStorageHoldingTrack() {
		$track = new Tx_Nbomn_Domain_Model_Track();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($track);
		$localObjectStorage->detach($track);
		$this->fixture->addTrack($track);
		$this->fixture->removeTrack($track);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getTrack()
		);
	}
	
}
?>
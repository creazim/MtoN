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
 * Test case for class Tx_Nbomn_Domain_Model_Track.
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
class Tx_Nbomn_Domain_Model_TrackTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Nbomn_Domain_Model_Track
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Nbomn_Domain_Model_Track();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getNrReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getNr()
		);
	}

	/**
	 * @test
	 */
	public function setNrForIntegerSetsNr() { 
		$this->fixture->setNr(12);

		$this->assertSame(
			12,
			$this->fixture->getNr()
		);
	}
	
	/**
	 * @test
	 */
	public function getCdReturnsInitialValueForTx_Nbomn_Domain_Model_CD() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getCd()
		);
	}

	/**
	 * @test
	 */
	public function setCdForTx_Nbomn_Domain_Model_CDSetsCd() { 
		$dummyObject = new Tx_Nbomn_Domain_Model_CD();
		$this->fixture->setCd($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getCd()
		);
	}
	
	/**
	 * @test
	 */
	public function getSongReturnsInitialValueForTx_Nbomn_Domain_Model_Song() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getSong()
		);
	}

	/**
	 * @test
	 */
	public function setSongForTx_Nbomn_Domain_Model_SongSetsSong() { 
		$dummyObject = new Tx_Nbomn_Domain_Model_Song();
		$this->fixture->setSong($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getSong()
		);
	}
	
}
?>
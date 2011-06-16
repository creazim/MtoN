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
 * Track of a CD
 */
class Tx_Nbomn_Domain_Model_Track extends Tx_Extbase_DomainObject_AbstractValueObject {

	/**
	 * Track Number
	 *
	 * @var integer $nr
	 * @validate NotEmpty
	 */
	protected $nr;

	/**
	 * CD
	 *
	 * @var Tx_Nbomn_Domain_Model_CD $cd
	 */
	protected $cd;

	/**
	 * Song
	 *
	 * @var Tx_Nbomn_Domain_Model_Song $song
	 */
	protected $song;

	/**
	 * Sets the nr
	 *
	 * @param integer $nr
	 * @return void
	 */
	public function setNr($nr) {
		$this->nr = $nr;
	}

	/**
	 * Returns the nr
	 *
	 * @return integer
	 */
	public function getNr() {
		return $this->nr;
	}

	/**
	 * Sets the cd
	 *
	 * @param Tx_Nbomn_Domain_Model_CD $cd
	 * @return void
	 */
	public function setCd(Tx_Nbomn_Domain_Model_CD $cd) {
		$this->cd = $cd;
	}

	/**
	 * Returns the cd
	 *
	 * @return Tx_Nbomn_Domain_Model_CD
	 */
	public function getCd() {
		return $this->cd;
	}

	/**
	 * Sets the song
	 *
	 * @param Tx_Nbomn_Domain_Model_Song $song
	 * @return void
	 */
	public function setSong(Tx_Nbomn_Domain_Model_Song $song) {
		$this->song = $song;
	}

	/**
	 * Returns the song
	 *
	 * @return Tx_Nbomn_Domain_Model_Song
	 */
	public function getSong() {
		return $this->song;
	}

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

	}

}
?>
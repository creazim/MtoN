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
 * CD
 */
class Tx_Nbomn_Domain_Model_CD extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Name
	 *
	 * @var string $name
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * Add Tracks
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Nbomn_Domain_Model_Track> $track
	 */
	protected $track;

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
		$this->track = new Tx_Extbase_Persistence_ObjectStorage();
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
	 * Sets the track
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Nbomn_Domain_Model_Track> $track
	 * @return void
	 */
	public function setTrack(Tx_Extbase_Persistence_ObjectStorage $track) {
		$this->track = $track;
	}

	/**
	 * Returns the track
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Nbomn_Domain_Model_Track>
	 */
	public function getTrack() {
		return $this->track;
	}

	/**
	 * Adds a Track
	 *
	 * @param Tx_Nbomn_Domain_Model_Track the Track to be added
	 * @return void
	 */
	public function addTrack(Tx_Nbomn_Domain_Model_Track $track) {
		$this->track->attach($track);
	}

	/**
	 * Removes a Track
	 *
	 * @param Tx_Nbomn_Domain_Model_Track the Track to be removed
	 * @return void
	 */
	public function removeTrack(Tx_Nbomn_Domain_Model_Track $trackToRemove) {
		$this->track->detach($trackToRemove);
	}

}
?>
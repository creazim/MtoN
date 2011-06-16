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
 * Controller for the Song object
 */
class Tx_Nbomn_Controller_SongController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * songRepository
	 *
	 * @var Tx_Nbomn_Domain_Repository_SongRepository
	 */
	protected $songRepository;

	/**
	 * injectSongRepository
	 *
	 * @param Tx_Nbomn_Domain_Repository_SongRepository $songRepository
	 * @return void
	 */
	public function injectSongRepository(Tx_Nbomn_Domain_Repository_SongRepository $songRepository) {
		$this->songRepository = $songRepository;
	}

	/**
	 * Displays all Songs
	 *
	 * @return void
	 */
	public function listAction() {
		$configuration = $this->configurationManager->getConfiguration(Tx_Extbase_Configuration_ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
		if(empty($configuration['persistence']['storagePid'])){
			$this->flashMessageContainer->add('No storagePid! You have to include the static template of this extension and set the constant plugin.tx_' . t3lib_div::lcfirst($this->extensionName) . '.persistence.storagePid in the constant editor');
		}
		$songs = $this->songRepository->findAll();
		$this->view->assign('songs', $songs);
	}

	/**
	 * Displays a single Song
	 *
	 * @param Tx_Nbomn_Domain_Model_Song $song the Song to display
	 * @return string The rendered view
	 */
	public function showAction(Tx_Nbomn_Domain_Model_Song $song) {
		$this->view->assign('song', $song);
	}

	/**
	 * Displays a form for creating a new  Song
	 *
	 * @param Tx_Nbomn_Domain_Model_Song $newSong a fresh Song object which has not yet been added to the repository
	 * @return void
	 * @dontvalidate $newSong
	 */
	public function newAction(Tx_Nbomn_Domain_Model_Song $newSong = NULL) {
		
		$this->view->assign('newSong', $newSong);
	}

	/**
	 * Creates a new Song and forwards to the list action.
	 *
	 * @param Tx_Nbomn_Domain_Model_Song $newSong a fresh Song object which has not yet been added to the repository
	 * @return void
	 */
	public function createAction(Tx_Nbomn_Domain_Model_Song $newSong) {
		$this->songRepository->add($newSong);
		$this->flashMessageContainer->add('Your new Song was created.');
		
		$this->redirect('list');
	}

	/**
	 * Displays a form for editing an existing Song
	 *
	 * @param Tx_Nbomn_Domain_Model_Song $song the Song to display
	 * @return string A form to edit a Song
	 */
	public function editAction(Tx_Nbomn_Domain_Model_Song $song) {
		$this->view->assign('song', $song);
	}

	/**
	 * Updates an existing Song and forwards to the list action afterwards.
	 *
	 * @param Tx_Nbomn_Domain_Model_Song $song the Song to display
	 * @return
	 */
	public function updateAction(Tx_Nbomn_Domain_Model_Song $song) {
		$this->songRepository->update($song);
		$this->flashMessageContainer->add('Your Song was updated.');
		$this->redirect('list');
	}

	/**
	 * Deletes an existing Song
	 *
	 * @param Tx_Nbomn_Domain_Model_Song $song the Song to be deleted
	 * @return void
	 */
	public function deleteAction(Tx_Nbomn_Domain_Model_Song $song) {
		$this->songRepository->remove($song);
		$this->flashMessageContainer->add('Your Song was removed.');
		$this->redirect('list');
	}

}
?>
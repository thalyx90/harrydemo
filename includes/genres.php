<?php
require_once('connection.php');
require_once('albums.php');

class Genre{
	public $iId;
	public $sGenreName;
	public $sGenreDescription;
	public $aAlbum;

	public function __construct(){
		$this->iId = 0;
		$this->sGenreName = '';
		$this->sGenreDescription = '';
		$this->aAlbum = [];
	}

	public function load($iId){

		$oConnection = new Connection();

		$sSQL = 'SELECT id, genre_name, genre_description
				FROM genres
				WHERE id ='.$iId;

		$oResultSet = $oConnection->query($sSQL);

		$aRow = $oConnection->fetch($oResultSet);

		$this->iId = $aRow['id'];
		$this->sGenreName = $aRow['genre_name'];
		$this->sGenreDescription = $aRow['genre_description'];


		$sSQL = 'SELECT id
				FROM albums
				WHERE genre_id = '.$iId;

		$oResultSet = $oConnection->query($sSQL);

		while($aRow = $oConnection->fetch($oResultSet)){
			$iAlbumId = $aRow['id'];

			$oAlbum = new Album();
			$oAlbum->load($iAlbumId);
			$this->aAlbums[] = $oAlbum;
		}
	}
}

// $oGenre = new Genre;
// $oGenre->load(4);
// echo '<pre>';
// print_r($oGenre);
// echo '</pre>';

?>
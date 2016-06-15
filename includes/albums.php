<?php
require_once('connection.php');

class Album{
	public $iId;
	public $sName;
	public $sDescription;
	public $sPhoto;
	public $fPrice;
	public $iGenreId;

	public function __construct(){
		$this->iId = 0;
		$this->sName = '';
		$this->sDescription = '';
		$this->sPhoto = '';
		$this->fPrice = 0;
		$this->iGenreId = 0;
	}

	public function load($iId){
		$oConnection = new Connection();

		$sSQL = 'SELECT id, name, description, photo, price, genre_id
				FROM albums
				WHERE id = '.$iId;

		$oResultSet = $oConnection->query($sSQL);

		$aRow = $oConnection->fetch($oResultSet);

		$this->iId = $aRow['id'];
		$this->sName = $aRow['name'];
		$this->sDescription = $aRow['description'];
		$this->sPhoto = $aRow['photo'];
		$this->fPrice = $aRow['price'];
		$this->iGenreId = $aRow['genre_id'];
	}
}

// $oAlbum = new Album();
// $oAlbum->load(2);

// echo '<pre>';
// print_r($oAlbum);
// echo '</pre>';
?>
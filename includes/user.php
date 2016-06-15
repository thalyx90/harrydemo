<?php
require_once('connection.php');

class User{
	public $iId;
	public $sUserName;
	public $sPassword;
	public $sFirstName;
	public $sLastName;
	public $sAddress;
	public $sTelephone;
	public $sEmail;
	public $sAdmin;

	public function __construct (){
		$this->iId = 0;
		$this->sUserName = '';
		$this->sPassword = '';
		$this->sFirstName= '';
		$this->sLastName = '';
		$this->sAddress = '';
		$this->sTelephone = '';
		$this->sEmail = '';
		$this->sAdmin = '';
	}

	public function load($iId){
		$oConnection = new Connection();

		$sSQL = 'SELECT id, username, password, first_name, last_name, address, telephone, email, admin
				FROM users
				WHERE id = '.$iId;

		$oResultSet = $oConnection->query($sSQL);

		$aRow = $oConnection->fetch($oResultSet);

		$this->iId = $aRow['id'];
		$this->sUserName = $aRow['username'];
		$this->sPassword = $aRow['password'];
		$this->sFirstName= $aRow['first_name'];
		$this->sLastName = $aRow['last_name'];
		$this->sAddress = $aRow['address'];
		$this->sTelephone = $aRow['telephone'];
		$this->sEmail = $aRow['email'];
		$this->sAdmin = $aRow['admin'];
	}

	public function save(){
		
		$oConnection = new Connection();

		$sSQL = "INSERT INTO users (id, username, password, first_name, last_name, address, telephone, email, admin) 
					VALUES ('".$this->iId."', '".$this->sUserName."', '".$this->sPassword."', '".$this->sFirstName."', '".$this->sLastName."', '".$this->sAddress."', '".$this->sTelephone."', '".$this->sEmail."', '".$this->sAdmin."')";

		$bSuccess = $oConnection->query($sSQL);

		
	}
}


$oUser = new User();
// $oUser->load(1);

// $oUser->iId = '12';
// $oUser->sUserName = 'harry.sturt';
// $oUser->sPassword = '2';
// $oUser->sFirstName = 'Harry';
// $oUser->sLastName = 'Sturt';
// $oUser->sAddress = '420 Haze road';
// $oUser->sTelephone = '12345678';
// $oUser->sEmail = 'harry.sturt@hotmail.com';
// $oUser->sAdmin = 'no';



// $oUser->save();
// echo '<pre>';
// print_r($oUser);
// echo '</pre>';
?>


























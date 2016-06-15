<?php 
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

require_once('includes/user.php');
require_once('includes/form.php');
require_once('includes/header.php');


$oForm = new Form();

if(isset($_POST['submit']) == true){
	$oUser = new User();
	$oUser->sUserName = $_POST['username'];
	$oUser->sPassword = $_POST['password'];
	$oUser->sFirstName = $_POST['first_name'];
	$oUser->sLastName = $_POST['last_name'];
	$oUser->sAddress = $_POST['address'];
	$oUser->sTelephone = $_POST['telephone'];
	$oUser->sEmail = $_POST['email'];

	$oUser->save();

	header('Location:success.php?pageid='.$oUser->iId);
}

$oForm->open();
$oForm->makeTextInput('Enter username','username');
$oForm->makeTextInput('Enter password','password');
$oForm->makeTextInput('Enter First Name','first_name');
$oForm->makeTextInput('Enter Last Name','last_name');
$oForm->makeTextInput('Enter Address','address');
$oForm->makeTextInput('Enter Telephone Number','telephone');
$oForm->makeTextInput('Enter Email','email');
$oForm->makeSubmit('Submit','submit');
$oForm->close();
?>

<h1>Register user </h1>

<?php echo $oForm->sHTML;?>

<?php
require_once('includes/footer.php');
?>
<?php
include_once 'config.php';

session_start();

function login($emails, $passwords, $mysqli) {

	if ($data = $mysqli->prepare("SELECT email, password, type 
		FROM login 
		WHERE email = '$emails' 
		AND password = '$passwords';")) {
		$data->execute();
		$data->bind_result($email, $password, $type);

		while ($data->fetch()) {
			if ($emails == $email AND $passwords == $password) {
				$_SESSION["username"] = $email;
				$_SESSION["password"] = $password;
				$_SESSION["type"] = $type;
				return true;
			}
			else{
				return false;
				echo "falses";
			}
		}
	}
	else{
		echo $emails;
		echo $passwords;
		echo $mysqli;
	}
}

?>
<?php  
	session_start();
	class Siynup{
		private $x;
		function __construct(){
			// baza
			$this->x = new mysqli("localhost","root","","users");

			// validacia
			if (isset($_POST["valid_name"])) {
				if ($_POST["valid_name"] == "valid_name") {
					$this->valid_name();
				}
			}
			if (isset($_POST["valid_surname"])) {
				if ($_POST["valid_surname"] == "valid_surname") {
					$this->valid_surname();
				}
			}
			if (isset($_POST["valid_email"])) {
				if ($_POST["valid_email"] == "valid_email") {
					$this->valid_email();
				}
			}
			if (isset($_POST["valid_age"])) {
				if ($_POST["valid_age"] == "valid_age") {
					$this->valid_age();
				}
			}
			if (isset($_POST["valid_password"])) {
				if ($_POST["valid_password"] == "valid_password") {
					$this->valid_password();
				}
			}
			if (isset($_POST["valid_password_confirm"])) {
				if ($_POST["valid_password_confirm"] == "valid_password_confirm") {
					$this->valid_password_confirm();
				}
			}
			if (isset($_POST["siynup"])) {
				if ($_POST["siynup"] == "siynup") {
					$this->register();
				}
			}

			// login 
			if (isset($_POST["s_login"])) {
				if ($_POST["s_login"] == "s_login") {
					$this->s_login();
				}
			}

			// profil 
			if (isset($_POST["p_profil"])) {
				if ($_POST["p_profil"] == "profil") {
					$this->p_profil();
				}
			}

			// chat baza qcel
			if (isset($_POST["online_chat_new"])) {
				if ($_POST["online_chat_new"] == "online_chat_new") {
					$this->online_chat_new();
				}
			}

		}

		// validacia
		function valid_name(){
			$s = str_split($_POST["name"]);
			$split = [];
			foreach ($s as $key) {
				$split[] = $key;
			}
			$x = 0;
			if (count($split) < 3) {
				$x = 0;
			}else {
				$x = 1;
			} 
			echo $x;
		}
		function valid_surname(){
			$x = 0; 
			if (filter_var($_POST["surname"], FILTER_VALIDATE_INT)) {
				$x = 0;
			}
			$s = str_split($_POST["surname"]);
			$split = [];
			foreach ($s as $key) {
				$split[] = $key;
			}
			if (count($split) < 4) {
				$x = 0;
			}else {
				$x = 1;
			}
			echo $x;
		}
		function valid_email(){
			if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
				echo 0;
			}else {
				echo 1;
			}
		}
		function valid_age(){
			if (!filter_var($_POST["age"], FILTER_VALIDATE_INT) || $_POST["age"] < 6) {
				echo 0;
			}else {
				echo 1;
			}
		}
		function valid_password(){
			if (strlen($_POST["password"]) < 6 || strlen($_POST["password"]) > 20) {
				echo 0;
			}else {
				echo 1;
			}
		}
		function valid_password_confirm(){
			if ($_POST["password_confirm"] != $_POST["password"] || strlen($_POST["password"]) > 20 || empty($_POST["password_confirm"])) {
				echo 0;
			}else {
				echo 1;
			}
		}

		// register
		function register(){
			$errors = [];
			$email = $_POST["email"];
			$y = $this->x->query("SELECT * FROM users WHERE email='$email' ")->fetch_all(true);
			if (empty($_POST["name"])) {
				$errors["name"] = "Fill in the name";
			}else if (filter_var($_POST["name"], FILTER_VALIDATE_INT)) {
				$errors["name"] = "Try another name";
			}
			if (empty($_POST["surname"])) {
				$errors["surname"] = "Fill in the surname";
			}else if (filter_var($_POST["surname"], FILTER_VALIDATE_INT)) {
				$errors["surname"] = "Try a different last name";
			}
			if (empty($_POST["email"])) {
				$errors["email"] = "Fill in the email address";
			}else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
				$errors["email"] = "Try another address";
			}else if ($y) {
				$errors["email"] = "Try another address";
			}
			if (empty($_POST["age"])) {
				$errors["age"] = "Fill in age";
			}else if (!filter_var($_POST["age"], FILTER_VALIDATE_INT)) {
				$errors["age"] = "Write a digit";
			}else if ($_POST["age"] < 6) {
				$errors["age"] = "Fill in age";
			}
			if (empty($_POST["password"])) {
				$errors["password"] = "Fill in the password";
			}
			if (empty($_POST["password_confirm"])) {
				$errors["password_confirm"] = "Repeat password";
			}else if ($_POST["password"] != $_POST["password_confirm"]) {
				$errors["password_confirm"] = "Invalid password";
			}
			if (!empty($errors)) {
				echo(json_encode($errors));
			}else {
				$name = $_POST["name"];
				$surname = $_POST["surname"];
				$age = $_POST["age"];
				$email = $_POST["email"];
				$password = $_POST["password"];
				$hash = password_hash($password, PASSWORD_DEFAULT);
				$this->x->query("INSERT INTO users (name, surname, age, email, password, user_img) VALUES('$name', '$surname', '$age', '$email', '$hash', 'user_img/user-avatar.png')");
			}
		}


		// login
		function s_login(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			$active = "active";
			$send = "";
			if ($email != "") {
				$sql = $this->x->query("SELECT * FROM users WHERE email='$email' ")->fetch_all(true);
				if (!$sql) {
					$send = "The data is incorrect";
				}
				if ($sql) {
					$verify = password_verify($password, $sql[0]["password"]);
					if (!$verify) {
						$send = "The data is incorrect";
					}else {
						$this->x->query("UPDATE users SET online_offline = '$active' WHERE email = '$email' ");
						$_SESSION["profil"] = $this->x->query("SELECT * FROM users WHERE email='$email' ")->fetch_all(true);
					}
				}
			}else {
				$send = "The data is incorrect";
			}
			echo($send);
		}

		// profil
		function p_profil(){
			$p_profil = $_SESSION["profil"];
			echo(json_encode($p_profil));
		}



		// chat baza qcel

		// function online_chat_new(){
		// 	$id = $_POST["user_id"];
		// 	$text = mysqli_real_escape_string($this->x, $_POST["text_l"]);
		// 	$this->x->query("INSERT INTO online_chat(user_id,messenger) VALUES('$id','$text')");
		// 	$online_chat_user = $this->x->query("SELECT name,surname,age,user_img FROM users WHERE id = '$id' ")->fetch_all(true);
		// 	echo(json_encode($online_chat_user));
		// }

		function chat_add_db(ConnectionInterface $data){
			$data = json_decode($data);
			$type = $data->type;
			switch ($type) {
				case 'chat_add_db':
					$id = $data->user_id;
					$text = $data->text;
					$this->x->query("INSERT INTO online_chat(user_id,messenger) VALUES('$id','$text')");
					break;
			}
		}

	}
	$s = new Siynup();
?>
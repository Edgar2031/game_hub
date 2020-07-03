<?php  
	session_start();
	class Siynup{
		private $x;
		function __construct(){
			// connective mysql
			$this->x = new mysqli("localhost","root","","users");
			// Validation
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

			// online_chat_mss
			if (isset($_POST["online_chat_mss"])) {
				if ($_POST["online_chat_mss"] == "online_chat_mss") {
					$this->online_chat_mss();
				}
			}

			// online_offline
			if (isset($_POST["online_offline"])) {
				if ($_POST["online_offline"] == "online_offline") {
					$this->online_offline();
				}
			}

			// profil 
			if (isset($_POST["p_profil"])) {
				if ($_POST["p_profil"] == "profil") {
					$this->p_profil();
				}
			}


			// users_images
			if (isset($_POST["users_images"])) {
				if ($_POST["users_images"] == "users_images") {
					$this->users_images();
				}
			}

			// delete images
			if (isset($_POST["delete_img"])) {
				if ($_POST["delete_img"] == "delete_img") {
					$this->delete_img();
				}
			}

			// profil images
			if (isset($_POST["profil_img_add"])) {
				if ($_POST["profil_img_add"] == "profil_img_add") {
					$this->profil_img_add();
				}
			}

			// u_images
			if (isset($_POST["u_images"])) {
				if ($_POST["u_images"] == "u_images") {
					$this->u_images();
				}
			}

			// friends_search
			if (isset($_POST["friends_search"])) {
				if ($_POST["friends_search"] == "friends_search") {
					$this->friends_search();
				}
			}

			// add_friend
			if (isset($_POST["add_friend"])) {
				if ($_POST["add_friend"] == "add_friend") {
					$this->add_friend();
				}
			}

			// remove_friends
			if (isset($_POST["remove_friends"])) {
				if ($_POST["remove_friends"] == "remove_friends") {
					$this->remove_friends();
				}
			}

			// edit_name
			if (isset($_POST["edit_name"])) {
				if ($_POST["edit_name"] == "edit_name") {
					$this->edit_name();
				}
			}

			// edit_surname
			if (isset($_POST["edit_surname"])) {
				if ($_POST["edit_surname"] == "edit_surname") {
					$this->edit_surname();
				}
			}

			// edit_email
			if (isset($_POST["edit_email"])) {
				if ($_POST["edit_email"] == "edit_email") {
					$this->edit_email();
				}
			}

			// edit_age
			if (isset($_POST["edit_age"])) {
				if ($_POST["edit_age"] == "edit_age") {
					$this->edit_age();
				}
			}

			// edit_password
			if (isset($_POST["edit_password"])) {
				if ($_POST["edit_password"] == "edit_password") {
					$this->edit_password();
				}
			}

			// notifications_request
			if (isset($_POST["notifications_request"])) {
				if ($_POST["notifications_request"] == "notifications_request") {
					$this->notifications_request();
				}
			}

			// friends_s
			if (isset($_POST["friends_s"])) {
				if ($_POST["friends_s"] == "friends_s") {
					$this->friends_s();
				}
			}

			// delet_fr
			if (isset($_POST["delet_fr"])) {
				if ($_POST["delet_fr"] == "delet_fr") {
					$this->delet_fr();
				}
			}

			// add_fr
			if (isset($_POST["add_fr"])) {
				if ($_POST["add_fr"] == "add_fr") {
					$this->add_fr();
				}
			}

			// mass
			if (isset($_POST["mass_fr"])) {
				if ($_POST["mass_fr"] == "mass_fr") {
					$this->mass_fr();
				}
			}

			// param1
			if (isset($_POST["param1"])) {
				if ($_POST["param1"] == "param1") {
					$this->param1();
				}
			}

			// getmess
			if (isset($_POST["getmess"])) {
				if ($_POST["getmess"] == "getmess") {
					$this->getmess();
				}
			}

			// post
			if (isset($_POST["text"])) {
				$this->posts();
			}

			// photo_us
			if (isset($_POST["photo_us"])) {
				$this->photo_us();
			}

			// new_post
			if (isset($_POST["new_post"])) {
				if ($_POST["new_post"] == "new_post") {
					$this->new_post();
				}
			}

			// coment
			if (isset($_POST["coment"])) {
				if ($_POST["coment"] == "coment") {
					$this->coment();
				}
			}

			// coment_u
			if (isset($_POST["coment_u"])) {
				if ($_POST["coment_u"] == "coment_u") {
					$this->coment_u();
				}
			}

			// u_images_get
			if (isset($_POST["u_images_get"])) {
				if ($_POST["u_images_get"] == "u_images_get") {
					$this->u_images_get();
				}
			}

			// get_friend
			if (isset($_POST["get_friend"])) {
				if ($_POST["get_friend"] == "get_friend") {
					$this->get_friend();
				}
			}

			// get_friend_post
			if (isset($_POST["get_friend_post"])) {
				if ($_POST["get_friend_post"] == "get_friend_post") {
					$this->get_friend_post();
				}
			}

			// like_post
			if (isset($_POST["like_post"])) {
				if ($_POST["like_post"] == "like_post") {
					$this->like_post();
				}
			}

			// online_chat_new
			if (isset($_POST["online_chat_new"])) {
				if ($_POST["online_chat_new"] == "online_chat_new") {
					$this->online_chat_new();
				}
			}

			// Friends_btn_p
			if (isset($_POST["Friends_btn_p"])) {
				if ($_POST["Friends_btn_p"] == "Friends_btn_p") {
					$this->Friends_btn_p();
				}
			}


			// Friends_btn
			if (isset($_POST["Friends_btn"])) {
				if ($_POST["Friends_btn"] == "Friends_btn") {
					$this->Friends_btn();
				}
			}


			// Friends_btn_2
			if (isset($_POST["Friends_btn_2"])) {
				if ($_POST["Friends_btn_2"] == "Friends_btn_2") {
					$this->Friends_btn_2();
				}
			}

			// logout
			if (isset($_POST["logout"])) {
				if ($_POST["logout"] == "logout") {
					$this->logout();
				}
			}
		}

		// Validation
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

		// online_chat_mss
		function online_chat_mss() {
			$online_mss = $this->x->query("SELECT online_chat.*,users.name,users.surname,users.user_img FROM online_chat JOIN users ON users.id = online_chat.user_id ")->fetch_all(true);
			echo(json_encode($online_mss));
		}

		// online_offline
		function online_offline() {
			$arr = [];
			$online = $this->x->query("SELECT COUNT(*)online FROM users WHERE online_offline = 'active' ")->fetch_all(true);
			$offline = $this->x->query("SELECT COUNT(*)offline FROM users WHERE online_offline = '0' ")->fetch_all(true);
			foreach ($online as $k) {
				array_push($arr,$k);
			}
			foreach ($offline as $key) {
				array_push($arr,$key);
			}
			echo(json_encode($arr));
		}

		// profil
		function p_profil(){
			$p_profil = $_SESSION["profil"];
			echo(json_encode($p_profil));
		}

		// users_images
		function users_images(){
			$users_id = $_SESSION["profil"];
			$id = $users_id[0]["id"];
			$user_img = $this->x->query("SELECT user_img FROM users WHERE id = '$id' ")->fetch_all(true);
			echo(json_encode($user_img));	
		}

		// photo_us
		function photo_us(){
			$profil = $_SESSION["profil"];
			$id = $profil[0]["id"];
			$photo = $_FILES["photo_inp"];
			if (!empty($photo["name"])) {			
				if (!file_exists("user_img")) {
					mkdir("user_img");
				}
				$address = "user_img/".time().$photo["name"];
				move_uploaded_file($photo["tmp_name"],$address);
				$this->x->query("INSERT INTO photo (users_id, img) VALUES('$id', '$address')");
				$this->x->query("UPDATE users SET user_img = '$address' WHERE id = '$id' ");
				header('location:./profil/profil.php');
			}else {
				header('location:./profil/profil.php');
			}
		}

		// delete_img 
		function delete_img(){
			$img = $_POST["img"];
			$this->x->query("DELETE FROM photo WHERE img = '$img'");
			$this->x->query("UPDATE users SET user_img = 'user_img/user-avatar.png' WHERE user_img = '$img' ");
		}

		// profil images
		function profil_img_add(){
			$img_id = $_POST["img_id"];
			$id = $_SESSION["profil"][0]["id"];
			$this->x->query("UPDATE users SET user_img = '$img_id' WHERE id = '$id' ");
		}

		// u_images
		function u_images(){
			$id = $_SESSION["profil"][0]["id"];
			$f = $this->x->query("SELECT * FROM photo WHERE users_id='$id' ")->fetch_all(true);
			echo(json_encode($f));
		}

		// edit_name
		function edit_name(){
			$name =  mysqli_real_escape_string($this->x,$_POST["name"]);
			$users_id = $_SESSION["profil"];
			$id = $users_id[0]["id"];
			$this->x->query("UPDATE users SET name = '$name' WHERE id = '$id' ");
			$_SESSION["profil"] = $this->x->query("SELECT * FROM users WHERE id = '$id' ")->fetch_all(true);
		}

		// edit_surname
		function edit_surname(){
			$surname =  mysqli_real_escape_string($this->x,$_POST["surname"]);
			$users_id = $_SESSION["profil"];
			$id = $users_id[0]["id"];
			$this->x->query("UPDATE users SET surname = '$surname' WHERE id = '$id' ");
			$_SESSION["profil"] = $this->x->query("SELECT * FROM users WHERE id = '$id' ")->fetch_all(true);
		}

		// edit_email
		function edit_email(){
			if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
				echo 0;
			}else {
				$id = $_SESSION["profil"][0]["id"];
				$email = $_POST["email"];
				$y = $this->x->query("SELECT * FROM users WHERE email='$email' ")->fetch_all(true);
				if ($y) {
					echo 0;
				}else {
					$this->x->query("UPDATE users SET email = '$email' WHERE id = '$id' ");
					$_SESSION["profil"] = $this->x->query("SELECT * FROM users WHERE id = '$id' ")->fetch_all(true);
				}	
			}
		}

		// edit_age
		function edit_age(){
			$age = $_POST["age"];
			$users_id = $_SESSION["profil"];
			$id = $users_id[0]["id"];
			$this->x->query("UPDATE users SET age = '$age' WHERE id = '$id' ");
			$_SESSION["profil"] = $this->x->query("SELECT * FROM users WHERE id = '$id' ")->fetch_all(true);
		}

		// edit password
		function edit_password(){
			$previous_password = $_POST["previous_password"];
			$users_password = $_SESSION["profil"];
			$verify = password_verify($previous_password, $users_password[0]["password"]);
			if ($verify) {
				$new_password = $_POST["new_password"];
				$hash = password_hash($new_password, PASSWORD_DEFAULT);
				$users_id = $_SESSION["profil"];
				$id = $users_id[0]["id"];
				$this->x->query("UPDATE users SET password = '$hash' WHERE id = '$id' ");
				$_SESSION["profil"] = $this->x->query("SELECT * FROM users WHERE id = '$id' ")->fetch_all(true);
			}else {
				echo(1);
			}
		}

		// notifications_request
		function notifications_request(){
			$user_id = $_SESSION["profil"][0]["id"];
			$f = $this->x->query("SELECT * FROM request WHERE user_id = '$user_id' ")->fetch_all(true);
			if (!empty($f)) {
				$on = [];
				for ($i = 0; $i < count($f); $i++) { 
					$on[] = $f[$i];
					$h = $on[$i]["my_id"];
					$notifications[] = $this->x->query("SELECT id,name,surname,age,user_img FROM users WHERE id = '$h' ")->fetch_all(true);
				}
				echo(json_encode($notifications));
			}
		}

		// friends_search
		function friends_search(){
			$id = $_SESSION["profil"][0]["id"];
			$friends_value = mysqli_real_escape_string($this->x, $_POST["friends_value"]);
			$d = $this->x->query("SELECT id,name,surname,age,email,user_img FROM users WHERE name LIKE '$friends_value%' AND id != '$id' OR surname LIKE '$friends_value%' AND id != '$id' ")->fetch_all(true);
			$arr = [];
			foreach ($d as $key) {
				$user_id =  $key["id"];
				$req = $this->x->query("SELECT * from request where my_id ='$id' and user_id = '$user_id' ")->fetch_all(true);
				$fr = $this->x->query("SELECT * from friends where (my_id ='$id' and user_id = '$user_id') or (my_id ='$user_id' and user_id = '$id')")->fetch_all(true);
				if(!empty($req)){
					$key["ok"] = 1;
				}
				else if(!empty($fr)){
					$key['ok'] = 2;
				}
				else{
					$key['ok'] = 0;
				}
				array_push($arr, $key);
			}
			echo(json_encode($arr));
		}

		// add_friend
		function add_friend(){
			$user_id = $_POST["user_id"];
			$my_id = $_SESSION["profil"][0]["id"];
			$this->x->query("INSERT INTO request (user_id,my_id ) VALUES('$user_id', '$my_id')");
		}

		// remove_friends
		function remove_friends(){
			$user_id = $_POST["user_id"];
			$my_id = $_SESSION["profil"][0]["id"];
			$this->x->query("DELETE FROM request WHERE user_id = '$user_id' AND my_id = '$my_id' ");
			$this->x->query("DELETE FROM friends WHERE (my_id = '$my_id' AND user_id = '$user_id') OR (my_id = '$user_id' AND user_id = '$my_id') ");
		}


		// friends
		function friends_s(){
			$id = $_SESSION["profil"][0]["id"];
			$date = $this->x->query("SELECT * FROM users WHERE id in (SELECT user_id from friends where my_id = '$id' union SELECT my_id from friends where user_id = '$id') ")->fetch_all(true);
			echo(json_encode($date));
		}

		// delet request database
		function delet_fr(){
			$user_id = $_SESSION["profil"][0]["id"];
			$my_id = $_POST["my_id"];
			$this->x->query("DELETE FROM request WHERE user_id = '$user_id' AND my_id = '$my_id' ");
		}

		// add friends database
		function add_fr(){
			$user_id = $_SESSION["profil"][0]["id"];
			$my_id = $_POST["my_id"];
			$this->x->query("DELETE FROM request WHERE user_id = '$user_id' AND my_id = '$my_id' ");
			$this->x->query("INSERT INTO friends (my_id,user_id) VALUES('$user_id','$my_id') ");
		}	

		// mass
		function mass_fr(){
			$id = $_POST["id"];
			$f = $this->x->query("SELECT name,surname,age,user_img FROM users WHERE id = '$id' ")->fetch_all(true);
			echo(json_encode($f));
		}

		// param1
		function param1(){
			$my_id = $_SESSION["profil"][0]["id"];
			$id = $_POST["id"];
			$val = $_POST["val"];
			$g = $this->x->query("INSERT INTO massages(my_id,user_id,massage) VALUES('$my_id','$id','$val') ");
		}

		// getmess
		function getmess(){
			$mes_id = mysqli_real_escape_string($this->x, $_POST["mes_id"]);
			$my_id = $_SESSION["profil"][0]["id"];
			$messeg = $this->x->query("SELECT massages.*,users.name,users.surname,users.user_img FROM massages JOIN users ON users.id = massages.user_id WHERE (my_id ='$my_id' AND user_id = '$mes_id') OR (my_id ='$mes_id' AND user_id = '$my_id')")->fetch_all(true);
			$arr = [];
			foreach ($messeg as $key) {
				if ($key["my_id"] == $my_id) {
					$key[] = $this->x->query("SELECT user_img FROM users WHERE id = '$my_id' ")->fetch_all(true);
				}
				array_push($arr, $key);
			}
			echo(json_encode($arr));
		}

		// new post
		function new_post(){
			$id = $_SESSION["profil"][0]["id"];
			$arr = [];
			$fr = $this->x->query("SELECT posts.*,users.name,users.surname,users.user_img FROM posts JOIN users ON users.id = posts.user_id WHERE posts.user_id in (SELECT user_id from friends where my_id = '$id' union SELECT my_id from friends where user_id = '$id') ORDER BY id DESC ")->fetch_all(true);
			$t = [];
			foreach ($fr as $k) {
				$d = $k["id"];
				$k["likes"] = $this->x->query("SELECT * from post_like JOIN users on post_like.user_id = users.id where post_like.post_id = '$d' ")->fetch_all(true);
				$k["comments"] = $this->x->query("SELECT * from comments JOIN posts on comments.user_id = posts.user_id where comments.posts_id = '$d' ")->fetch_all(true);	
				$k["comments"] = $this->x->query("SELECT comments.*,users.name,users.surname,users.user_img from comments JOIN users on comments.user_id = users.id where comments.posts_id = '$d' ")->fetch_all(true);	
				$dl = $k["user_id"];
				array_push($t, $k);
			}			
			array_push($arr, $t);

			// $fr_m = $this->x->query("SELECT posts.*,users.name,users.surname,users.user_img FROM posts JOIN users ON users.id = posts.user_id WHERE user_id ='$id' ORDER BY id DESC ")->fetch_all(true);
			// $t1 = [];
			// foreach ($fr_m as $key) {
			// 	$d = $key["id"];
			// 	$key["likes"] = $this->x->query("SELECT * from post_like JOIN users on post_like.user_id = users.id where post_like.post_id = '$d' ")->fetch_all(true);
			// 	$key["comments"] = $this->x->query("SELECT * from comments JOIN posts on comments.user_id = posts.user_id where comments.posts_id = '$d' ")->fetch_all(true);	
			// 	$key["comments"] = $this->x->query("SELECT comments.*,users.name,users.surname,users.user_img from comments JOIN users on comments.user_id = users.id where comments.posts_id = '$d' ")->fetch_all(true);	
			// 	$dl = $key["user_id"];	
			// 	array_push($t1, $key);
			// }
			// array_push($arr, $t1);

			
			echo(json_encode($arr));
		}


		// coment
		function coment(){
			$coment_val = mysqli_real_escape_string($this->x, $_POST["com_val"]);
			$id = $_SESSION["profil"][0]["id"];
			$posts_id = $_POST["posts_id"];
			$this->x->query("INSERT INTO comments(posts_id,user_id,comment) VALUES($posts_id,'$id','$coment_val')");
			$new_post_append = $this->x->query("SELECT comments.*,users.name,users.surname,users.user_img FROM comments JOIN users ON users.id = comments.user_id where posts_id = '$posts_id' ORDER BY id DESC LIMIT 1")->fetch_all(true);
			echo(json_encode($new_post_append));
		}

		// coment_u
		function coment_u(){
			$class_id_3 = $_POST["class_id_3"];
			$post_append = $this->x->query("SELECT comments.*,users.name,users.surname,users.user_img FROM comments JOIN users ON users.id = comments.user_id where posts_id = '$class_id_3' ORDER BY id DESC ")->fetch_all(true);
			echo(json_encode($post_append));
		}

		// posts 
		function posts(){
			$text = mysqli_real_escape_string($this->x, $_POST["text"]);
			$id = $_SESSION["profil"][0]["id"];
			$photo_post = $_FILES["photo_post"];
			$address = 0;
			if ($photo_post["name"] != "") {				
				if (!file_exists("post_img")) {
					mkdir("post_img");
				}
				$address = "post_img/".time().$photo_post["name"];
				move_uploaded_file($photo_post["tmp_name"],$address);
			}
			$this->x->query("INSERT INTO posts(post,user_id,picture) VALUES('$text','$id','$address')");
			header('location:./profil/profil.php');
		}

		// u_images_get
		function u_images_get(){
			$page = $_POST["page"];
			$f = $this->x->query("SELECT * FROM photo WHERE users_id = '$page' ")->fetch_all(true);
			echo(json_encode($f));
		}

		// get_friend
		function get_friend(){
			$page = $_POST["page"];
			$get = $this->x->query("SELECT name,surname,user_img FROM users WHERE id = '$page' ")->fetch_all(true);
			echo(json_encode($get));
		}

		// get_friend_post
		function get_friend_post(){
			$arr = [];
			$page = $_POST["page"];
			$fr = $this->x->query("SELECT posts.*,users.name,users.surname,users.user_img FROM posts JOIN users ON users.id = posts.user_id WHERE posts.user_id = '$page' ")->fetch_all(true);
			$t = [];
			foreach ($fr as $k) {
				$d = $k["id"];
				$k["likes"] = $this->x->query("SELECT * from post_like JOIN users on post_like.user_id = users.id where post_like.post_id = '$d' ")->fetch_all(true);
				$k["comments"] = $this->x->query("SELECT * from comments JOIN posts on comments.user_id = posts.user_id where comments.posts_id = '$d' ")->fetch_all(true);	
				$k["comments"] = $this->x->query("SELECT comments.*,users.name,users.surname,users.user_img from comments JOIN users on comments.user_id = users.id where comments.posts_id = '$d' ")->fetch_all(true);	
				$dl = $k["user_id"];
				array_push($t, $k);
			}
			array_push($arr, $t);
			echo(json_encode($arr));
		}

		// like_post
		function like_post(){
			$id = $_SESSION["profil"][0]["id"];
			$id_post = $_POST["id_post"];
			$f = $this->x->query("SELECT * FROM post_like WHERE post_id = '$id_post' and user_id = '$id' ")->fetch_all(true);
			$res = 0;
			if ($f) {
				$this->x->query("DELETE FROM post_like WHERE post_id = '$id_post' and user_id = '$id' ");
				$res = $this->x->query("SELECT post_like.*,users.name,users.surname,users.user_img from post_like JOIN users on post_like.user_id = users.id where post_like.post_id = '$id_post' ")->fetch_all(true);
			}else {
				$this->x->query("INSERT INTO post_like (post_id,user_id) VALUES ('$id_post','$id')");
				$res = $this->x->query("SELECT post_like.*,users.name,users.surname,users.user_img from post_like JOIN users on post_like.user_id = users.id where post_like.post_id = '$id_post' ")->fetch_all(true);
			}
			echo(json_encode($res));
		}

		// online_chat_new
		function online_chat_new(){
			$id = $_POST["user_id"];
			$text = mysqli_real_escape_string($this->x, $_POST["text_l"]);
			$this->x->query("INSERT INTO online_chat(user_id,messenger) VALUES('$id','$text')");
			$online_chat_user = $this->x->query("SELECT name,surname,age,user_img FROM users WHERE id = '$id' ")->fetch_all(true);
			echo(json_encode($online_chat_user));
		}

		// Friends_btn
		function Friends_btn(){
			$id = $_POST["page"];
			$this->x->query("DELETE FROM users WHERE id = '$id' ");
		}

		// Friends_btn_2
		function Friends_btn_2(){
			$my_id = $_SESSION["profil"][0]["id"];
			$user_id = $_POST["page"];
			$this->x->query("INSERT INTO friends (my_id,user_id) VALUES('$user_id','$my_id') ");
		}

		// logout
		function logout(){
			$id = $_SESSION["profil"][0]["id"];
			$this->x->query("UPDATE users SET online_offline = '0' WHERE id = '$id' ");
			unset($_SESSION["profil"]);
			echo(1);
		}
	}
	$s = new Siynup();
?>
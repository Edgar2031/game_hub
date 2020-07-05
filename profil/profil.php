<?php 
	session_start();
	$profil = 0;
	if (isset($_SESSION["profil"])) {
		$profil = $_SESSION["profil"];
	}else {
		header("location: ../index.php");
	}
	date_default_timezone_set("Asia/Yerevan");
?>
<!DOCTYPE html>
<html lang="en" class="no-js" >
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<title class="fr_p"></title>
	    <link rel="icon" type="text/css" href="../img/hub.png">
	<!-- Styles -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="profil css/profil.css">


		<style type="text/css">
			.d-none {
			    display: none !important;
			}

			.others-show {
			    top: -55px !important;
			    z-index: 10 !important;
			}

			.emoji-show {
			    display: flex !important;
			    flex-wrap: wrap;
			    align-content: flex-start;
			    width: 150px !important;
			    height: 100px !important;
			    padding: 10px;
			    top: -135px !important;
			    right: 10px !important;
			    background-color: #fff;
			    box-shadow: 0 0 25px -5px lightgray;
			    border-radius: 5px 5px 0 5px;
			}

			button {
			    border: 0;
			    outline: none;
			}

			img {
			    width: 100%;
			    object-fit: cover;
			}

			.avatar-wrapper {
			    border-radius: 50%;
			    overflow: hidden;
			}

			.chat-box {
			    width: 350px;
			    margin: auto;
			}
			.chat-box .header {
			    display: flex;
			    align-items: center;
			    background-color: #fff;
			    border-radius: 20px 20px 0 0;
			    padding: 15px;
			}
			.chat-box .header .avatar-big {
			    width: 35px;
			    height: 35px;
			}
			.chat-box .header .name {
			    margin-left: 20px;
			    font-size: 20px;
			    font-weight: 500;
			}
			.chat-box .header .options {
			    font-size: 20px;
			    color: lightgrey;
			    margin-left: auto;
			    cursor: pointer;
			}
			.chat-box .chat-room {
			    height: 300px;
			    background-color: #f7f9fb;
			    padding: 15px;
			    overflow: auto;
			}
			.chat-box .chat-room .avatar-small {
			    width: 25px;
			    height: 25px;
			}
			.chat-box .chat-room .message {
			    margin-bottom: 15px;
			    display: flex;
			    flex-direction: column;
			}
			.chat-box .chat-room .message-left {
			    align-items: flex-start;
			}
			.chat-box .chat-room .message-left .bubble {
			    border-radius: 0 5px 5px 5px;
			}
			.chat-box .chat-room .message-right {
			    align-items: flex-end;
			}
			.chat-box .chat-room .message-right .bubble {
			    border-radius: 5px 0 5px 5px;
			}
			.chat-box .chat-room .bubble {
			    padding: 10px;
			    font-size: 14px;
			    margin-top: 5px;
			    display: inline-block;
			}
			.chat-box .chat-room .bubble-light {
			    background-color: #fbcffc;
			}
			.chat-box .chat-room .bubble-dark {
			    color: #fff;
			    background-color: #be79df;
			}
			.chat-box .type-area {
			    display: flex;
			    height: 65px;
			    background-color: #fff;
			    border-radius: 0 0 20px 20px;
			}
			.chat-box .type-area .input-wrapper {
			    overflow: hidden;
			    border-radius: 0 0 0 20px;
			}
			.chat-box .type-area .input-wrapper input {
			    outline: none;
			    border: none;
			    padding-left: 20px;
			    height: 100%;
			    width: 220px;
			    font-size: 14px;
			}
			.chat-box .type-area .button-add {
			    display: flex;
			    align-items: center;
			    position: relative;
			}
			.chat-box .type-area .button-add i {
			    font-size: 30px;
			    color: lightgrey;
			    cursor: pointer;
			}
			.chat-box .type-area .button-add i:hover {
			    color: #be79df;
			}
			.chat-box .type-area .button-add .others {
			    display: flex;
			    padding: 10px 15px;
			    background-color: #fff;
			    position: absolute;
			    top: 5px;
			    z-index: -1;
			    right: -52px;
			    border-radius: 999px;
			    box-shadow: 0 0 25px -5px lightgray;
			    transition: 0.3s all ease-out;
			}
			.chat-box .type-area .button-add .others span i {
			    font-size: 20px;
			    color: #be79df;
			}
			.chat-box .type-area .button-add .others span.image-button {
			    margin: 0 25px;
			}
			.chat-box .type-area .button-add .others .emoji-button {
			    position: relative;
			}
			.chat-box .type-area .button-add .others .emoji-button .emoji-box {
			    display: none;
			    position: absolute;
			    width: 0px;
			    height: 0px;
			    top: 0px;
			    right: 0px;
			    transition: 0.3s all ease-out;
			}
			.chat-box .type-area .button-add .others .emoji-button .emoji-box span {
			    user-select: none;
			    cursor: pointer;
			    margin-right: 5px;
			    margin-bottom: 5px;
			    width: 20px;
			    height: 20px;
			}
			.chat-box .type-area .button-send {
			    background-color: #fff;
			    margin-left: auto;
			    width: 65px;
			    color: #be79df;
			    font-weight: bold;
			    border-left: 2px solid #f7f9fb;
			    border-radius: 0 0 20px 0;
			}
			.chat-box .type-area .button-send:hover {
			    background-color: #be79df;
			    color: #fff;
			}
		</style>

	</head>
	<body>

		<div class="chat-box">
            <div class="header">
                <div class="avatar-wrapper avatar-big">
                    <img src="https://znews-photo.zadn.vn/w660/Uploaded/pnbcuhbatgunb/2020_03_23/i13863960814_1.jpg" alt="avatar" />
                </div>
                <span class="name">Crush</span>
                <span class="options">
			    	<i class="fas fa-ellipsis-h"></i>
			    </span>
            </div>
            <div class="chat-room">

                <!-- chat -->

               	

            </div>
            <div class="type-area">
                <div class="input-wrapper">
                    <input type="text" id="inputText" placeholder="Type messages here..." />
                </div>
                <span class="button-add">
					<i class="fas fa-plus-circle"></i>
					<div class="others">
				        <span class="emoji-button">
							<i class="far fa-laugh"></i>
							<div class="emoji-box">
								<span>&#x1f604;</span>
								<span>😀</span>
								<span>😂</span>
								<span>😭</span>
								<span>😍</span>
								<span>🤮</span>
								<span>🤑</span>
								<span>😖</span>
								<span>😷</span>
							</div>
				        </span>
				        <span class="image-button">
				        	<i class="far fa-image"></i>
				        </span>
				        <span>
				        	<i class="fas fa-paperclip"></i>
				        </span>
				    </div>
			    </span>
                <button class="button-send">Send</button>
            </div>

        </div>


			
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


	<!-- online chat -->
	<script type="text/javascript">
		$(document).ready(function() {
			$(function($){
				// Websocket
				var websocket_server = new WebSocket("ws://localhost:8080/");
				websocket_server.onopen = function(e) {
					websocket_server.send(
						JSON.stringify({
							'type':'socket',
							'user_id':<?php echo $profil[0]["id"]; ?>,
						})
					);
				};
				websocket_server.onerror = function(e) {
					// Errorhandling
				}
				websocket_server.onmessage = function(e) {
					var json = JSON.parse(e.data);

					// ajax chati tvyalnere baza uxarkelu hamar 

						let	user_id = json.msg.split('=');
							user_id = user_id[2][0];
							user_id = Number(user_id)
						// let text = json.msg.split('>');
						// 	text = text[1].split('<');
						// 	text = text[0];
						// $.ajax({
						//     url: 'http://localhost/game_hub/server.php',
						//     type: 'post',
						//     data: {online_chat_new: 'online_chat_new',user_id,text_l},
						//     success: function(r){
						// 		r = JSON.parse(r);
						// 		switch(json.type) {
						// 			case 'chat':								
						// 				r.forEach(function(element, index){



						if (user_id == <?php echo $profil[0]["id"]; ?>) {

							$('.chat-room').append(`
								<div class="message message-right">
				                    <div class="avatar-wrapper avatar-small">
				                        <img src="https://znews-photo.zadn.vn/w660/Uploaded/pnbcuhbatgunb/2020_03_23/i13863960814_1.jpg" alt="avatar" />
				                    </div>
				                    <div class="bubble bubble-dark">
				                        ${json.msg}
				                    </div>
				                </div>
		                    `);

						} else {
							
							$('.chat-room').append(`
								<div class="message message-left">
					                <div class="avatar-wrapper avatar-small">
					                    <img src="https://znews-photo.zadn.vn/w660/Uploaded/pnbcuhbatgunb/2020_03_23/i13863960814_1.jpg" alt="avatar" />
					                </div>
					                <div class="bubble bubble-light">
					                     ${json.msg}
					                </div>
				            	</div>
							`);
						}




						// 				})
						// 			break;
						//     	}
						//     }
						// })
				}
				// Events
				$('#inputText').on('keyup',function(e){
					if(e.keyCode == 13 && !e.shiftKey) {
						var chat_msg = $(this).val();
						websocket_server.send(
							JSON.stringify({
								'type': 'chat',
								'user_id': <?php echo $profil[0]["id"]; ?>,
								'chat_msg': chat_msg
							})
						);
						let scrollCount = $('.chat-room')[0].scrollHeight;
							$('.chat-room').stop().animate({scrollTop : scrollCount});
						e.preventDefault();
						$(this).val('');
					}
				});
			});
		});
	</script>

</html>
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

	</head>
	<body>
		<section class="hollow">
		    <header>
		        <h1>ОНЛАЙН ЧАТ</h1>
		    </header>
		    <div id="chatbro" class="is-loading is-loaded is-loaded-finish">
		        <div class="chatbro_chat chatbro_unmovable_chat chatbro_opacity" style="height: 238px; width: 290px; top: 0px; left: 0px; display: block;">
		            <div class="chatbro_header chatbro_maximized_header" style="background: rgb(31, 35, 38); color: rgb(130, 184, 69);">
		                <table class="chatbro_header_table">
		                    <tbody>
		                        <tr>
		                            <td></td>
		                            <td class="chatbro_header_caption_td">
		                                <div class="chatbro_caption chatbro_maximized_caption">
		                                    <div class="chatbro_title chatbro_maximized_title" style="color: rgb(130, 184, 69);">
		                                        <div class="chatbro_chat_name" style="width: 0px;"></div>
		                                        <div class="chatbro_notifications"><span class="chatbro_bell_ico"></span></div>
		                                    </div>
		                                </div>
		                            </td>
		                            <td>
		                                <button class="chatbro_header_button chatbro_minimize_button" title="Свернуть" style="color: rgb(130, 184, 69); background: rgb(31, 35, 38);"></button>
		                            </td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>
		            <div class="chatbro_body" style="border-color: rgb(31, 35, 38);">
		                <div class="chatbro_system_messages_block" style="border-color: rgb(31, 35, 38);">
		                    <div class="chatbro_system_messages_wrapper" style="max-height: 231px; height: auto;">
		                        <div class="chatbro_system_messages"></div>
		                    </div>
		                </div>
		                <div class="chatbro_messages_wrapper" style="height: 442px; background: rgb(47, 53, 57);">
		                    <div class="chatbro_messages_block" style="width: 303px; background: rgb(31, 35, 38);">
		                        <table class="chatbro_messages" style="display: table-cell;">
		                            <tbody class="chat_output">
		                               <!--  <tr id="chatbroMessageRadial1581526878758" style="display: table-row;" class="chatbro_message chatbro_message_radial">
		                                    <td colspan="4">
		                                        <div style="padding: 8px 2px;">
		                                            <div style="border-color: #383f44; border-left-color: #515b63; " class="chatbro_messages_load_progress_radial"></div>
		                                        </div>
		                                    </td>
		                                </tr> -->

		                            </tbody>
		                        </table>
		                    </div>
		                </div>
		                <div class="chatbro_send" style="background: rgb(29, 33, 36);">
		                    <div class="chatbro_send_input_preview" style="border-color: rgb(37, 42, 46); background: rgb(29, 33, 36);"></div>
		                    <div class="chatbro_send_input_block" style="border-color: rgb(37, 42, 46);">
		                        <div class="chatbro_send_input_wrapper">
		                            <textarea class="chat_input" class="chatbro_file_select_input"></textarea>
		                            <div class="chatbro_send_button" style="background-color: rgb(29, 33, 36); color: rgb(238, 238, 238);">
		                            	
		                            </div>
			                        <div class="chatbro_open_smiles_button" style="background-color: rgb(29, 33, 36); color: rgb(238, 238, 238);">

			                        </div>
			                        <div class="chatbro_smiles_menu" style="background-color: rgb(34, 39, 42); display: none;">

			                        </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="chatbro_bottom_border" style="border-color: rgb(31, 35, 38);"></div>
		            </div>
		        </div>
		    </div>
		</section>
			
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
					let user_id = 0;
						user_id = json.msg.split('=');
						user_id = user_id[2][0];
						user_id = Number(user_id)
					let text_l = json.msg.split('>');
						text_l = text_l[1].split('<');
						text_l = text_l[0];
						$.ajax({
						    url: 'http://localhost/game_hub/server.php',
						    type: 'post',
						    data: {online_chat_new: 'online_chat_new',user_id,text_l},
						    success: function(r){
								r = JSON.parse(r);
								switch(json.type) {
									case 'chat':								
										r.forEach(function(element, index){
											$('.chat_output').append(`<tr class="chatbro_message" style="color: rgb(221, 221, 221);"> 
						                    	<td class="chatbro_message_empty_block"></td> 
						                    	<td class="chatbro_message_avatar_block"> 
						                    		<a style="color: rgb(43, 109, 173);"> 
						                    			<img class="chatbro_message_image" src_attr="//sun9-44.userapi.com/c627617/v627617513/652db/AcIEVaQuiqI.jpg?ava=1" width="32" height="32px" data-id="4301255" data-name="${element.name} ${element.surname}" src="../${element.user_img}" style="border-radius: 3px;">
						                    		</a>
						                    	</td> 
						                    	<td class="chatbro_message_td_message" style="border-top: 1px solid rgb(34, 39, 42);">
						                    		<div class="chatbro_message_wrapped">
						                    			<div class="chatbro_message_auth_name" style="color: rgb(243, 243, 243);">
						                    				<span class="chatbro_message_name" data-color=""> 
						                    					<a class=" chatbro_message_name_color_5" style="color: rgb(43, 109, 173);">
						                    						${element.name} ${element.surname}
						                    					</a>
						                    				</span>
						                    				<span class="chatbro_message_info">    
						                    					<div class="chatbro_message_date" style="color: rgb(177, 177, 177); visibility: visible; opacity: 1; text-align: right;"><?php echo date("Y-m-d").'<br>'.date("h:i:s"); ?>
						                    					<div class="chatbro_message_actions" style="line-height: 15px; color: rgb(255, 255, 255); border-color: rgb(37, 42, 46); background-color: rgb(40, 46, 49); visibility: hidden; opacity: 0;">
						                    					</div>
						                    				</span>
						                    			</div> 
						                    			<div class="chatbro_message_text" style="color: rgb(221, 221, 221);">
						                    				<div>${json.msg}</div>
						                    				<div class="chatbro_message_attachments"></div>
						                    			</div>
						                    		</div>
						                    	</td> 
						                    	<td class="chatbro_message_empty_block"></td>
						                    </tr>`);
										})
									break;
						    	}
						    }
						})
				}
				// Events
				$('.chat_input').on('keyup',function(e){
					if(e.keyCode == 13 && !e.shiftKey) {
						var chat_msg = $(this).val();
						websocket_server.send(
							JSON.stringify({
								'type': 'chat',
								'user_id': <?php echo $profil[0]["id"]; ?>,
								'chat_msg': chat_msg
							})
						);
						let scrollCount = $('.chatbro_messages_wrapper')[0].scrollHeight;
							$('.chatbro_messages_wrapper').stop().animate({scrollTop : scrollCount});
						e.preventDefault();
						$(this).val('');
					}
				});
			});
		});
	</script>

</html>
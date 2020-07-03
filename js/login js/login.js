// Login review
function Key(){
	$('.errors').remove();
	$('.error').remove();
	let email = $('.u_email').val();
	let password = $('.u_password').val();
	$.ajax({
		url: 'server.php',
		type: 'post',
		data: {s_login: "s_login", email, password},
		success: function(r){
			if (!r) {
				location.href = "http://localhost/game_hub/profil/profil.php";
			}else {
				$('.u_email').before(`<p class="error" style="color: #E10000; font-size: 1.1em; font-weight: 200; letter-spacing: 0.5px;">${r}</p`);
			}
		}
	})
}

$('.u_login').click(function(){
	Key();
})

$('.login_box').keydown(function(e) {
	if(e.key == "Enter"){
		Key();
	}
})

$('.u_registrations').click(function(){
	$('.errors').remove();
	$('.error').remove();
	$('.login_box').slideUp(1000,function(){
		$('.box').slideDown(1000);
	});
})
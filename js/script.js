
// Validation 
$('#name').on('input', function(){
	$.ajax({
		url: 'server.php',
		type: 'post',
		data: {valid_name: "valid_name", name: $('#name').val()},
		success: function(r){
			if (r == 0) {
				$('#name').css({
					borderBottom: "1.3px solid red",
				})
			}else if (r == 1) {
				$('#name').css({
					borderBottom: "1.3px solid green",
				})
			}
		}
	})
})
$('#surname').on('input', function(){
	$.ajax({
		url: 'server.php',
		type: 'post',
		data: {valid_surname: "valid_surname", surname: $('#surname').val()},
		success: function(r){
			if (r == 0) {
				$('#surname').css({
					borderBottom: "1.3px solid red",
				})
			}else if (r == 1) {
				$('#surname').css({
					borderBottom: "1.3px solid green",
				})
			}
		}
	})
})
$('#email').on('input', function(){
	$.ajax({
		url: 'server.php',
		type: 'post',
		data: {valid_email: "valid_email", email: $('#email').val()},
		success: function(r){
			if (r == 0) {
				$('#email').css({
					borderBottom: "1.3px solid red",
				})
			}else if (r == 1) {
				$('#email').css({
					borderBottom: "1.3px solid green",
				})
			}
		}
	})
})
$('#age').on('input', function(){
	$.ajax({
		url: 'server.php',
		type: 'post',
		data: {valid_age: "valid_age", age: $('#age').val()},
		success: function(r){
			if (r == 0) {
				$('#age').css({
					borderBottom: "1.3px solid red",
				})
			}else if (r == 1) {
				$('#age').css({
					borderBottom: "1.3px solid green",
				})
			}
		}
	})
})
$('#password').on('input', function(){
	$.ajax({
		url: 'server.php',
		type: 'post',
		data: {valid_password: "valid_password", password: $('#password').val()},
		success: function(r){
			if (r == 0) {
				$('#password').css({
					borderBottom: "1.3px solid red",
				})
			}else if (r == 1) {
				$('#password').css({
					borderBottom: "1.3px solid green",
				})
			}
		}
	})
})
$('#password_confirm').on('input', function(){
	$.ajax({
		url: 'server.php',
		type: 'post',
		data: {valid_password_confirm: "valid_password_confirm", password_confirm: $('#password_confirm').val(), password: $('#password').val()},
		success: function(r){
			if (r == 0) {
				$('#password_confirm').css({
					borderBottom: "1.3px solid white",
				})
			}else if (r == 1) {
				$('#password_confirm').css({
					borderBottom: "1.3px solid green",
				})
			}
		}
	})
})


// Registrations validation
function Save(){
	let name = $('#name').val();
	let surname = $('#surname').val();
	let email = $('#email').val();
	let age = $('#age').val();
	let password = $('#password').val();
	let password_confirm = $('#password_confirm').val();
	$('.error').remove();
	$('.errors').remove();
	$.ajax({
		url: 'server.php',
		type: 'post',
		data: {siynup: "siynup", name, surname, email, age, password, password_confirm},
		success: function(r){
			if(r) {
				r = JSON.parse(r);
				for(i in r) {
					$('#'+i).css({
						borderBottom: "1.3px solid red",
					})
					$('#'+i).before(`<span class="errors" style="width: 100%; display: inline-block; color: #fff;">${r[i]}</span>`);
				}
			}else{
				$('.box').slideUp(1000);
				$('.login_box').css({
					bottom: '4%',
				})
				$('.login_box').slideDown(1000);
			}
		}
	})
}

$('.save').click(function() {
	Save();
});

$('.box').keydown(function(e) {
	if(e.key == "Enter"){
		Save();
	}
})

$('.u_log').click(function() {
	$('.error').remove();
	$('.errors').remove();
	$('.inputBox :input').css({
		borderBottom: "1.3px solid #fff",
	})
	$('.box').slideUp(1000,function(){
		$('.login_box').slideDown(1000);
	});
});
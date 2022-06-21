function check_contactform() {
	var name = $('input[name="name"]').val();
	var email = $('input[name="email"]').val();
	var contens = $('textarea[name="contens"]').val();
	var errmsg = "";
	if(name == "") {
		errmsg = "お名前を入力して下さい\n";
	}
	if(email == "") {
		errmsg = errmsg + "メールアドレスを入力して下さい\n";
	}
	if(!email.match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)) {
		errmsg = errmsg + "メールアドレスをご確認下さい\n";
	}
	if(contents == "") {
		errmsg = errmsg + "お問い合わせ内容を入力して下さい\n";
	}
	if(errmsg != "") {
		alert(errmsg);
		return false;
	}
	$('form[name="myform"]').submit();
}
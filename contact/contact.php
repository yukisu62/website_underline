<?php

	// 変数の初期化
	$page_flag = 0;
	$clean = array();
	$error = array();

	// サニタイズ
	if (!empty($_POST)) {
		foreach ($_POST as $key => $value) {
			$clean[$key] = htmlspecialchars($value, ENT_QUOTES);
		}
	}

	if (!empty($clean['confirm'])) {

		$page_flag = 1;
		// セッションの書き込み
		session_start();
		$_SESSION['page'] = true;


	} elseif (!empty($clean['submit'])) {

		session_start();
		$page_flag = 2;
		print_r($page_flag);


		// if (!empty($_SESSION['page']) && $_SESSION['page'] === true) {


		// 変数とタイムゾーンを初期化
		$header = null;
		$auto_reply_subject = null;
		$auto_reply_text = null;
		$admin_reply_subject = null;
		$admin_reply_text = null;
		date_default_timezone_set('Asia/Tokyo');

		// ヘッダー情報を設定
		$header = "MIME-Version: 1.0\n";
		$header .= "From: 株式会社UNDER LINE<info@under-line.net>\n";
		$header .= "Reply-To:株式会社UNDER LINE<info@under-line.net>\n";

		// 件名を設定
		$auto_reply_subject = 'お問い合わせありがとうございます。';

		// 本文を設定
		$auto_reply_text = "この度は、お問い合わせ頂き誠にありがとうございます。\n
		下記の内容でお問い合わせを受け付けました。\n\n";
		$auto_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
		$auto_reply_text .= "お問い合わせ種別：" . $clean['typeSelect'] . "\n";
		$auto_reply_text .= "会社名：" . $clean['company_name'] . "\n";
		$auto_reply_text .= "お名前：" . $clean['name'] . "\n";
		$auto_reply_text .= "メールアドレス：" . $clean['email'] . "\n";
		$auto_reply_text .= "お問い合わせ内容：\n" . $clean['details'] . "\n\n";
		$auto_reply_text .= "株式会社UNDER LINE";

		// メール送信
		mb_send_mail($clean['email'], $auto_reply_subject, $auto_reply_text, $header);

		// 運営側へ送るメールの件名
		$admin_reply_subject = "お問い合わせを受け付けました";

		// 本文を設定
		$admin_reply_text = "下記の内容でお問い合わせがありました。\n\n";
		$admin_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
		$admin_reply_text .= "お問い合わせ種別 :" . $clean['typeSelect'] . "\n";
		$admin_reply_text .= "会社名：" . $clean['company_name'] . "\n";
		$admin_reply_text .= "お名前：" . $clean['name'] . "\n";
		$admin_reply_text .= "メールアドレス：" . $clean['email'] . "\n";
		$admin_reply_text .= "お問い合わせ内容：\n" . $clean['details']  . "\n\n";

		// 運営側へメール送信
		mb_send_mail('yuzuyokan6@gmail.com', $admin_reply_subject, $admin_reply_text, $header);
		mb_send_mail('info@under-line.net', $admin_reply_subject, $admin_reply_text, $header);

			// セッションの削除
			unset($_SESSION['page']);

	// } else {
	// 	$page_flag = 0;
	// }

}

?>
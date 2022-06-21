<?php include("contact.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-KVBE1QHF4D"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-KVBE1QHF4D');
	</script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<title>CONTACT | UNDERLINE</title>
	<meta name="keywords" content="">
	<meta name="description" content="お問い合わせ | 東京・大田区の軽貨物配送会社UNDER LINE。求人ドライバー募集中。">

	<!-- ogp -->
	<meta property="og:title" content="">
	<meta property="og:type" content="">
	<meta property="og:description" content="東京・大田区の軽貨物配送会社UNDER LINE。求人ドライバー募集中。">
	<meta property="og:url" content="https://under-line.net/">
	<meta property="og:image" content="/ogp.jpg">
	<meta property="og:site_name" content="UNDERLINE | 東京・大田区の軽貨物配送会社 ドライバー募集中">
	<!-- //ogp -->

	<link rel="apple-touch-icon-precomposed" href="../webclip.png" />
	<link rel="icon" type="image/x-icon" href="../favicon.png">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body class="body">
	<?php include("../header.php"); ?>
	<main class='contact'>
		<div class="contact__top-area">
			<div class="underLayer-top-wave">
				<img src="../image/wave_white_bottom.svg" alt="">
				<div class="contact__ttl">
					<img src="/image/ttl-icon.svg" alt="">
					<h2>CONTACT</h2>
				</div>
			</div>
		</div>
		<div class="contact__inner">
			<div class="contact__disc">
				<h3 class="contact__disc__ttl">お問い合わせ</h3>
				<p class="contact__disc__lead">配達案件のご相談やドライバー求人のご応募、<br class='pc'>その他ご質問等ございましたら以下のフォームからお問い合わせください。</p>
				<p class='contact__disc__line'>公式LINEからの求人ご応募がおすすめです。<a href='https://lin.ee/ZAQbr6t'>公式LINEはこちら</a></p>
			</div>
			<div class="contact-content">

				<?php if ($page_flag === 1) : ?>
					<div class="comform-attr">
						<p>お問い合わせ内容をご確認の上送信してください。</p>
					</div>
					<form class="form h-adr comfirm-area" method="post" action="" name="myform">
						<dl>
							<dt class="required">お問い合わせ種別</dt>
							<dd>
								<p><?php echo $clean['typeSelect']; ?></p>
							</dd>
						</dl>
						<dl>
							<dt class="required">会社名</dt>
							<dd>
								<p><?php echo $clean['company_name']; ?></p>
							</dd>
						</dl>
						<dl>
							<dt class="required">お名前</dt>
							<dd>
								<p><?php echo $clean['name']; ?></p>
							</dd>
						</dl>
						<dl>
							<dt class="required">メールアドレス</dt>
							<dd>
								<p><?php echo $clean['email']; ?></p>
							</dd>
						</dl>
						<dl class="flex-dl">
							<dt class="">お問い合わせ内容</dt>
							<dd><p><?php echo nl2br($clean['details'] ); ?></p></dd>
						</dl>
						<div class="submit-btn-area">
							<input type="submit" class="prev-btn" name="btn_prev" onclick="history.back()" value="戻る">
							<input type="submit" class="submit-btn" name="submit" value="送信">
						</div>

						<input type="hidden" name="typeSelect" value="<?php echo $clean['typeSelect']; ?>">
						<input type="hidden" name="company_name" value="<?php echo $clean['company_name']; ?>">
						<input type="hidden" name="name" value="<?php echo $clean['name']; ?>">
						<input type="hidden" name="email" value="<?php echo $clean['email']; ?>">
						<input type="hidden" name="details" value="<?php echo $clean['details'] ; ?>">

					</form>

				<?php elseif ($page_flag === 2) : ?>
					<!-- thanks -->
					<div class="">
						<p class="thanks-txt">お問い合わせを受け付けました。<br>
							ご入力いただきましたメールアドレスへ、<br>自動返信メールを送信しておりますのでご確認ください。</p>
					</div>
				<?php else : ?>
					<!-- 入力 -->
					<form class="form h-adr" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'); ?>" name="myform">
						<dl>
							<dt>
								<div class="form-label">
									<p class="required">必須</p>
									<p class="name">お問い合わせ種別</p>
								</div>
							</dt>
							<dd class='select-dd'>
								<select name="typeSelect" id="typeSelect">
									<option value="">お問い合わせの種類を選択</option>
									<option value="株式会社UNDER LINEについて" <?php if (isset($clean['typeSelect']) && $clean['typeSelect'] === "株式会社UNDER LINEについて") {	echo $clean['typeSelect'];} ?>>株式会社UNDER LINEについて</option>
									<option value="求人募集について" <?php if (isset($clean['typeSelect']) && $clean['typeSelect'] === "求人募集について") {	echo $clean['typeSelect'];} ?> >求人募集について</option>
									<option value="その他" <?php if (isset($clean['typeSelect']) && $clean['typeSelect'] === "その他") {	echo $clean['typeSelect'];} ?>>その他</option>
								</select>
							</dd>
						</dl>
						<dl>
							<dt>
								<div class="form-label">
									<p class="required any">任意</p>
									<p class="name">会社名</p>
								</div>
							</dt>
							<dd><input type="text" name="company_name" placeholder="株式会社〇〇" value="<?php if (isset($clean['company_name'])) {	echo $clean['company_name'];} ?>"></dd>
						</dl>
						<dl>
							<dt>
								<div class="form-label">
									<p class="required">必須</p>
									<p class="name">お名前</p>
								</div>
							</dt>
							<dd><input type="text" name="name" placeholder="お名前を入力してください。" required value="<?php if (isset($clean['name'])) {	echo ($clean['name']);} ?>"></dd>
						</dl>
						<dl>
							<dt>
								<div class="form-label">
									<p class="required">必須</p>
									<p class="name">メールアドレス</p>
								</div>
							</dt>
							<dd><input type="email" name="email" placeholder="info@under-line.net" required value="<?php if (isset($clean['email'])) {echo $clean['email'];} ?>"></dd>
						</dl>
						<dl class="flex-dl">
							<dt>
								<div class="form-label">
									<p class="required">必須</p>
									<p class="name">お問い合わせ内容</p>
								</div>
							</dt>
							<dd class="dd__textarea"><textarea type="text" name="details" placeholder="例：求人についての質問をさせていただきたいです。"><?php if (isset($clean['details'] )) {
						echo $clean['details'] ;	} ?></textarea></dd>
						</dl>
						<div class="confirm-area">
							<input type="submit" name="confirm" id="confirm" class="confirm-btn" value="内容を確認する"></input>

						</div>
					</form>
					<a href='/privacy' class="privacy-sp">プライバシーポリシー</a>
				<?php endif; ?>
			</div>
		</div>
	</main>
	<?php include("../footer.php"); ?>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="../js/jquery.inview.min.js"></script>
	<script src="../js/main.js"></script>
</body>

</html>
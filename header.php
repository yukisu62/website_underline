<header id ="header" class="header">
		<div class="header-inner">
			<div class="logo-area">
				<h1 class="logo">
					<a href="/">
						<img src="/image/underline-logo.svg" alt="UNDERLINE">
					</a>
				</h1>
			</div>
			<div class="nav-area">
				<ul>
					<li class="AnimeTop fadeIn_left_nav ani_delay_nav"><a href="/#about">ABOUT US</a></li>
					<li class="AnimeTop fadeIn_left_nav ani_delay_nav"><a href="/#service">SERVICE</a></li>
					<li class="AnimeTop fadeIn_left_nav ani_delay_nav"><a href="/#partner">PARTNER</a></li>
					<li class="AnimeTop fadeIn_left_nav ani_delay_nav"><a href="/#works">WORKS</a></li>
					<li class="AnimeTop fadeIn_left_nav ani_delay_nav"><a href="/company">COMPANY</a></li>
					<li class="AnimeTop fadeIn_left_nav ani_delay_nav"><a href="/contact">CONTACT</a></li>
				</ul>
			</div>
			<div id="hamApp">
				<div class="hamburger sp tablet">
					<button class="hbg_btn hbg_active" v-on:click="hbg_active=!hbg_active" >
						<span class="hbg_btn-line" v-bind:class="{'close' : hbg_active }"></span>
					</button>
				</div>
				<transition name="global-nav">
					<div class="global-nav sp tablet" v-show="hbg_active">
						<div class="global-nav-contents">
							<div class="nav-contents">
								<ul>
									<li><a href="/">TOP</a></li>
									<li><a href="/#about">About Us</a></li>
									<li><a href="/#service">SERVICE</a></li>
									<li><a href="/#partner">PARTNER</a></li>
									<li><a href="/#works">WORKS</a></li>
									<li><a href="/company">COMPANY</a></li>
									<li><a href="/contact">CONTACT</a></li>
								</ul>
							</div>
							<div class="gloval-nav-contents__bottom">
								<img src="/image/footer-logo.svg" alt="ロゴ">
							</div>
							<!-- <div class="gnav-sns-block">
								<ul>
									<li><a href="" target="_blank" rel="noopener noreferrer"><img src="/image/icon_twitter.svg" alt="twitter"></a></li>
									<li><a href="" target="_blank" rel="noopener noreferrer"><img src="/image/icon_instagram.svg" alt="instagram"></a></li>
									<li><a href="" target="_blank" rel="noopener noreferrer"><img src="/image/icon_facebook.svg" alt="facebook"></a></li>
								</ul>
							</div> -->
						</div>
					</div>
				</transition>

			</div>
		</div>
	</header>
jQuery(window).on('load', function($){
	pageLoad();
});

function pageLoad() {

  $('.body').addClass('is-show');

  let windowWidth = $(window).width();
  let windowSm = 640;
  if (windowWidth <= windowSm) {
      // スムーススクロール
      $(function () {
        $('a[href^="#"]').click(function () {
          var speed = 600;
          var href = decodeURI($(this).attr("href"));
          var target = $(href == "#" || href == "" ? 'html' : href);
          var position = target.offset().top - 200;
          $('body,html').animate({ scrollTop: position }, speed, 'swing');
          return false;
        });
      });
    // 遷移先リンク位置調整
		$(window).on('load', function() {
			$(function() {
				let url = location.href;
				if (url.indexOf("#") != -1) {
					let id = url.split("#");
					let $target = $('#' + id[id.length - 1]);
					if ($target.length) {
						let position = $target.offset().top - 100 + "px";
						$("html, body").animate({
							scrollTop: position
						}, 1);
					}
				}
			});
		});
  } else {
      // スムーススクロール
      $(function () {
        $('a[href^="#"]').click(function () {
          var speed = 600;
          var href = decodeURI($(this).attr("href"));
          var target = $(href == "#" || href == "" ? 'html' : href);
          var position = target.offset().top - 400;
          $('body,html').animate({ scrollTop: position }, speed, 'swing');
          return false;
        });
      });
    // 遷移先リンク位置調整
		$(window).on('load', function() {
			$(function() {
				let url = location.href;
				if (url.indexOf("#") != -1) {
					let id = url.split("#");
					let $target = $('#' + id[id.length - 1]);
					if ($target.length) {
						let position = $target.offset().top - 100 + "px";
						$("html, body").animate({
							scrollTop: position
						}, 1);
					}
				}
			});
		});
  }
  



  // ハンバーガーメニュー
    let ham = '.hamburger'
    let open = 'open';
    let close = 'close';
    let navArea = '.global-nav';
  
    // $(ham).on('click','.open' ,function () {
    //   $(this).addClass(close);   
		// 	$(this).removeClass(open);
		// 	$(navArea).stop().fadeIn(400);
		// 	$('.body').addClass('scroll-stop');
    // });
  
    // $(ham).on('click','.close',function(){
		// 	$(this).addClass(open);
		// 	$(this).removeClass(close);
		// 	$(navArea).stop().fadeOut(400);
		// 	$('.body').removeClass('scroll-stop');
		// });

  // アンカーリンククリック時メニューをとじる
  $(function(){
    $('.global-nav a').on('click',function(){
      $('.global-nav').fadeOut(200);
      $('.body').removeClass('scroll-stop');
          $('.hbg_btn').addClass(open);
          $('.hbg_btn').removeClass(close);
    });
    });

    
        
    
    
  	// inview
	$(function () {
		$(".inview").on("inview", function (event,isInView) {
			if (isInView) {
				$(this).addClass("isActive");
			} else {
				$(this).removeClass("isActive");
			}
		});
	});


    /* アニメーション
		-----------------------------------------------------------------*/
    $(window).scroll(function () {
      $(".Anime").each(function () {
        var hit = $(this).offset().top;
        var scrollTopAnime = $(window).scrollTop();
        var scrollmidTopAnime = scrollTopAnime + $(window).height() * 0.95;
    
        if (scrollmidTopAnime >= hit) {
          $(this).addClass("is-show");
        }
      });
    });
  
  // トップアニメーション
  const AnimeTop = $('.AnimeTop');
  $(AnimeTop).addClass('is-show');
}

if (window.document.body.id === 'top') {
  function topTxtFade() {
    const topTxt = $('.main-inner-txt');
    const header = $('#header');
    const headerChange = 600;
    const scroll = $(window).scrollTop();
    if (scroll > 1000) {
      $(topTxt).addClass('is-none');
    } else {
      $(topTxt).removeClass('is-none');
    }
  
    if (scroll < 600) {
      $(header).css('background-color','rgba(0,0,0,0)');
      $(header).css('box-shadow','none');
    } else {
      $(header).css('background-color', '#354F74');
      $(header).css('box-shadow','0px 2px 2px 0px #333333');
    }
  
  }
  
  $(window).scroll(function () {
    topTxtFade();
  });
  

}

// スマホLINEボタン
function lineFade() {
  const elem = $('.footer__fixed');
  const scroll = $(window).scrollTop();
  if (scroll > 1000) {
    $(elem).addClass('is-show');
  } else {
    $(elem).removeClass('is-show');
  }


}

$(window).scroll(function () {
  lineFade();
});


/* その他
		-----------------------------------------------------------------*/
		let vh = window.innerHeight * 0.01;
		document.documentElement.style.setProperty('--vh', `${vh}px`);



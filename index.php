<?php

/*
require_once "./inc/db.php";
require_once "./inc/function.php";
*/


?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>K'sJAPAN</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="keywords" content="KsJapan,カーラッピング,車,">
<meta name="description" content="常識を張り替えるKsJapanのカーラッピング">

<!--▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△-->
<meta name="robots" content="noindex,nofollow"><!-- 本アップ前に必ず外す -->
<!--▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△-->

<!-- OGP -->
<meta property="og:type" content="website"><!-- トップページであれば「website」-->
<meta property="og:title" content="K'sJAPAN"><!-- titleと文字数も揃える -->
<meta property="og:site_name" content="K'sJAPAN"><!-- サイト名 -->
<meta property="og:url" content="">
<meta property="og:image" content=""><!-- 1200x630推奨 -->
<meta property="og:description" content="常識を張り替えるKsJapanのカーラッピング">


<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="./css/slick-theme.css" media="screen,print">
<link rel="stylesheet" href="./css/slick.css" media="screen,print">
<link rel="stylesheet" href="./css/default.css">
<link rel="stylesheet" href="./css/style.css" media="screen,print">
<link rel="stylesheet" href="./css/lightbox.css">

<link rel="apple-touch-icon" sizes="60x60" href="../img/favicon_package_v0.16/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./img/favicon_package_v0.16/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./img/favicon_package_v0.16/favicon-16x16.png">
<link rel="manifest" href="../img/favicon_package_v0.16/site.webmanifest">
<link rel="mask-icon" href="../img/favicon_package_v0.16/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./js/response.min.js"> </script>
<script src="./js/pageTop.js"></script>
<script src="./js/slip.js"></script>
<script src="./js/over.js"></script>
<script src="./js/slick.min.js"></script>
<script src="./js/script.js"></script>
<script src="./js/lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
<script src="./js/jquery.mousewheel.js"></script><!-- マウスホイール用 -->
<script src="./js/jquery.jscrollpane.min.js"></script><!-- スクロールバー用 -->

<script src="./js/jquery-1.11.0.min.js"></script>
<script src="./js/jquery.autoKana.js"></script>
<script src="./js/jquery.jpostal.js"></script>
<script src="./js/jquery.validationEngine.js"></script>
<script src="./js/jquery.validationEngine-ja.js"></script>
<script src="./plugin/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
<script src="./js/mail_send.js"></script>

<!-- 
<link rel="stylesheet" href="./plugin/jquery-ui-1.11.4.custom/jquery-ui.min.css"> -->
<script src="./js/response.min.js"> </script>
<!-- <script src="./js/pageTop.js"></script> -->
<!-- <script src="./js/slip.js"></script> -->
<script src="./js/over.js"></script>
<link rel="stylesheet" href="./css/validationEngine.jquery.css">
<link rel="stylesheet" href="./plugin/jquery-ui-1.11.4.custom/jquery-ui.min.css">


<script>

	//スクロールバー
	$(document).ready(function(){
		$('.scroll-pane').jScrollPane({
        showArrows : true // 矢印の有無
	    });
	});

</script>


<!--[if lt IE 9]>
<script src="./js/html5.js"></script>
<script src="./js/css3-mediaqueries.js"></script>
<![endif]-->

</head>



<body id="pTop" class="website" data-responsejs='{ "create": [ { "prop": "width", "prefix": "src", "lazy": true, "breakpoints": [0,592,1001] } ]}'>




<?php if ($_REQUEST['sendFlg'] == 1) { ?>

<div class="sendArea">
			<!-- header -->

	
	<div class="inner">
	        <p  style="text-align:center;margin-top:50px;">お問い合わせありがとうございます。<br>
	        内容などにより回答に時間がかかる場合がございますので、予めご了承ください。</p>
	        <a href="./" class="toHome">HOMEへ戻る</a>
	    </div>
	</div>
	
	
</div>
<?php } else { ?>


	<!-- header -->
<header>
	<div class="flex">
		<div class="flex">
			<h1 class="hLogo"><img src="./img/logo.png" alt="ロゴ"></h1>
		</div>
	</div>

</header><!-- /header -->

<!-- cover -->
<div id="cover">
	<p class="Image"><img src="./img/cover.png" alt="常識を貼り替える、K's JAPANのカーラッピング"></p>

	<div class="scroll-downs">
		<span>Scroll</span>
		<div class="mousey">
		  <div class="scroller"></div>
		</div>
	  </div>

</div>
<!-- /cover -->


<div class="btnArea">
	<ul class="flex">
		<li><a href=""><img src="./img/btn01.png" alt="お気軽にご相談ください TEL:078-203-3255"></a></li>
		<li><a href="#contact"><img src="./img/btn02.png" alt="お問い合わせはこちら"></a></li>
	</ul>
  </div>



<div id="main">
	
	<section class="content01">
		<div class="inner">
			<h2 class="mainTit">
				CHARM OF <br class="pc">CAR WRAPPING
				<span>The Quality Of Our Product Is Guaranteed.</span>
			</h2>
			<h3>カーラッピングの魅力</h3>
			<ul class="flex">
				<li>
					<dl>
						<dt><span>01</span>魅せる</dt>
						<dd>カラー・デザインも思いのまま。細部までこだわったラッピングで、どこを走ってもオンリーワンの魅力を発揮させます。</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt><span>02</span>スピード</dt>
						<dd>お預かりはたったの２日間。塗装では不可能なスピード引き渡しが可能になります。</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt><span>03</span>戻せる</dt>
						<dd>元の塗装をはがさないので、元の状態へ復帰が可能です。愛車を傷つけないので、安心してイメージチェンジをお楽しみいただけます。</dd>
					</dl>
				</li>
			</ul>
		</div>
		<img class="img01" src="./img/img01.png" alt="">
		<img class="img02" src="./img/img02.png" alt="">
		<img class="img03" src="./img/img03.png" alt="">
	</section>

	<section class="content02">
		<div class="inner">
			<h2 class="mainTit">
				WORKS
				<span>実績</span>
			</h2>
			<ul>
				<li><img src="./img/car01.png" alt="ラッピングイメージ"></li>
				<li><img src="./img/car02.png" alt="ラッピングイメージ"></li>
				<li><img src="./img/car03.png" alt="ラッピングイメージ"></li>
			</ul>
		</div>
	</section>

	<section class="content03">
		<div class="inner">
		<h2 class="mainTit">
			STRENGTH
				<span>K's JANANの強み</span>
		</h2>
		<ul class="flex">
			<li>
				<span>01</span>
				<p class="Image"><img src="./img/strengh01.png" alt="高品質"></p>
				<dl>
					<dt>高品質</dt>
					<dd>他社では見落としがちな細かなディテールまでしっかりカバー。オーナー様の叶えたいを叶えます。</dd>
				</dl>
			</li>
			<li>
				<span>02</span>
				<p class="Image"><img src="./img/strengh02.png" alt="親切・丁寧"></p>
				<dl>
					<dt>親切・丁寧</dt>
					<dd>プロのスタッフが丁寧にご案内・お預かり致します。ご不明な点があればお気軽にご相談ください。</dd>
				</dl>
			</li>
			<li>
				<span>03</span>
				<p class="Image"><img src="./img/strengh03.png" alt="高品質"></p>
				<dl>
					<dt>安心</dt>
					<dd>高級車を取り扱うディーラーが運営するラッピング事業なので、どんな愛車も安心してお預けいただけます。</dd>
				</dl>
			</li>
		</ul>
		<p class="contact_btn"><a href="#contact"><img src="./img/btn03.png" alt="CONTACT お見積り・ご相談はこちらから"></a></p>
		</div>
	</section>

	<section class="content04">
		<div class="inner">
		<h2 class="mainTit center">
			FLOW
				<span>ご依頼～仕上がりまでの流れ</span>
		</h2>
		<ul class="flex">
			<li>
				<span>01</span>
				<dl>
					<dt>お問い合わせ</dt>
					<dd>お問い合わせフォーム、またはお電話(078-203-3255)にてご連絡ください。</dd>
				</dl>
			</li>
			<li>
				<span>02</span>
				<dl>
					<dt>ヒアリング</dt>
					<dd>オーナー様のご希望を伺います。伺った内容をもとに最適なプランをご提案させていただきます。</dd>
				</dl>
			</li>
			<li>
				<span>03</span>
				<dl>
					<dt>ご契約</dt>
					<dd>ご提案内容にご納得いただいた後、契約させていただきます。</dd>
				</dl>
			</li>
			<li>
				<span>04</span>
				<dl>
					<dt>デザイン</dt>
					<dd>ヒアリングをもとに、細部のデザインを行っていきます。</dd>
				</dl>
			</li>
			<li>
				<span>05</span>
				<dl>
					<dt>ラッピング</dt>
					<dd>出来上がったデザインを基に、印刷・ラッピングを行います。</dd>
				</dl>
			</li>
			<li>
				<span>06</span>
				<dl>
					<dt>引き渡し</dt>
					<dd>ラッピング完了後、スタッフの検品後お引渡しとなります。</dd>
				</dl>
			</li>
		</ul>
		</div>
	</section>

	<section class="content05">
		<div class="inner">
		<h2 class="mainTit center">
			VOICE
				<span>お客様の声</span>
		</h2>
		<ul class="">
			<li>
				<span class="NS fuki">クオリティが高い！</span>
				<dl>
					<dt>オーナーS様　車種：○○○○○</dt>
					<dd>ラッピングに興味はありましたが、正直品質に不安がありました。相談だけでもしてみようと連絡したところ、打ち合わせの際に実際に見たラッピングのクオリティの高さに即決しました。スタッフの対応も丁寧でとても安心できました。出来上がりもきれいで大満足です。</dd>
				</dl>
			</li>
			<li>
				<span class="NS fuki">クオリティが高い！</span>
				<dl>
					<dt>オーナーS様　車種：○○○○○</dt>
					<dd>ラッピングに興味はありましたが、正直品質に不安がありました。相談だけでもしてみようと連絡したところ、打ち合わせの際に実際に見たラッピングのクオリティの高さに即決しました。スタッフの対応も丁寧でとても安心できました。出来上がりもきれいで大満足です。</dd>
				</dl>
			</li>
			<li>
				<span class="NS fuki">クオリティが高い！</span>
				<dl>
					<dt>オーナーS様　車種：○○○○○</dt>
					<dd>ラッピングに興味はありましたが、正直品質に不安がありました。相談だけでもしてみようと連絡したところ、打ち合わせの際に実際に見たラッピングのクオリティの高さに即決しました。スタッフの対応も丁寧でとても安心できました。出来上がりもきれいで大満足です。</dd>
				</dl>
			</li>
		</ul>
		</div>
	</section>

	<section class="content06">
		<div class="inner">
		<h2 class="mainTit center">
			FAQ
				<span>よくある質問</span>
		</h2>
		<div class="accordion-box">

			<ul>
				<li>
					<input type="checkbox" id="tab1" />
					<label for="tab1"><span>質問が入ります。質問が入ります。質問が入ります。質問が入ります。質問が入ります。</span></label>
					<div>
					   <p>回答内容が入ります。回答内容が入ります。回答内容が入ります。回答内容が入ります。回答内容が入ります。</p>
					</div>
				</li><!--//ラベル1ここまで-->

				<li>
					<input type="checkbox" id="tab2" />
					<label for="tab2"><span>質問が入ります。質問が入ります。質問が入ります。質問が入ります。質問が入ります。</span></label>
					<div>
					   <p>回答内容が入ります。回答内容が入ります。回答内容が入ります。回答内容が入ります。回答内容が入ります。</p>
					</div>
				</li><!--//ラベル2ここまで-->

				<li>
					<input type="checkbox" id="tab3" />
					<label for="tab3"><span>質問が入ります。質問が入ります。質問が入ります。質問が入ります。質問が入ります。</span></label>
					<div>
					   <p>回答内容が入ります。回答内容が入ります。回答内容が入ります。回答内容が入ります。回答内容が入ります。</p>
					</div>
				</li><!--//ラベル3ここまで-->
			</ul>
		  </div><!--//accordion-box-->
		</div>
	</section>

	<div class="btnArea line1">
		<ul class="flex">
			<li><a href=""><img src="./img/btn01.png" alt="お気軽にご相談ください TEL:078-203-3255"></a></li>
			<li><a href="#contact"><img src="./img/btn02.png" alt="お問い合わせはこちら"></a></li>
		</ul>
	  </div>



	  <section class="content07">
		<div class="inner">
		<h2 class="mainTit">
			COMPANY
				<span>会社概要</span>
		</h2>
		<div class="flex">
			<ul>
				<li>
					<dl>
						<dt>法人名</dt>
						<dd>合同会社K.K</dd>
					</dl>
					<dl>
						<dt>住所</dt>
						<dd>〒651-2101<br>
							兵庫県神戸市西区伊川谷町布施畑834-6 2F</dd>
					</dl>
					<dl>
						<dt>TEL/FAX</dt>
						<dd>078-203-3255 / 078-202-4331</dd>
					</dl>
					<dl>
						<dt>定休日</dt>
						<dd>火曜日</dd>
					</dl>
				</li>
			</ul>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.306639028999!2d135.0940324!3d34.697445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600086e9cd3aef77%3A0xdc0baa0cc618f420!2z44CSNjUxLTIxMDEg5YW15bqr55yM56We5oi45biC6KW_5Yy65LyK5bed6LC355S65biD5pa955WR77yY77yT77yU4oiS77yWIDJm!5e0!3m2!1sja!2sjp!4v1680485427898!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div >
		</div>
	</section>

	<section class="content08">
		<div class="inner">


		<h2 class="mainTit center" id="contact">
			CONTACT
				<span>お問い合わせ・相談フォーム</span>
		</h2>
		<form id="contactForm" method="POST">
			<div class="customerBox">
				<h3>お客様の情報</h3>
				<dl>
					<dt><label for="name">お名前<em>必須</em></label></dt>
					<dd><input type="text" name="name" value="" id="name" class="validate[required]"></dd>
				</dl>
				<dl>
					<dt><label for="tel">お電話番号<em>必須</em></label></dt>
					<dd><input id="tel" type="text" name="tel" value="" class="validate[required,custom[phone]]"></dd>
				</dl>
				<dl>
					<dt><label for="zip1">郵便番号<em>必須</em></label></dt>
					<dd><input type="text" name="zip1" maxlength="7" id="zip1" class="validate[required,custom[integer]]"></dd>
				</dl>
				<dl>
					<dt><label for="mail">メールアドレス<em>必須</em></label></dt>
					<dd><input id="mail" type="text" name="mail" value="" class="validate[required,custom[email]]"></dd>
				</dl>
			</div>
			<div class="carBox">
				<h3>お車の情報</h3>
				<dl>
					<dt><label for="maker">メーカー名<em>必須</em></label></dt>
					<dd><input type="text" name="maker" value="" id="maker" class="validate[required]"></dd>
				</dl>
				<dl>
					<dt><label for="car">車種<em>必須</em></label></dt>
					<dd><input id="car" type="text" name="car" value="" class="validate[required]"></dd>
				</dl>
				<dl>
					<dt><label for="msg">お問い合わせ<br class="pc">ご相談内容<em>必須</em></label></dt>
					<dd><textarea name="msg" id="msg" class="txtfiled validate[required]"></textarea></dd>
				</dl>
			</div>
			<div class="privacypolicy">
				<div class="p_inner">
					<h4>プライバシーポリシー</h4>
					<p>
						合同会社K.Kのプライバシーに関する方針は以下のとおりです。
						プライバシー情報のうち「個人情報」とは、個人情報保護法にいう「個人情報」を指すものとし、生存する個人に関する情報であって、当該情報に含まれる氏名、生年月日、住所、電話番号、連絡先その他の記述等により特定の個人を識別できる情報を指します。
					</p>
		
					<dl>
						<dt>個人情報の管理</dt>
							<dd>当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。</dd>
			
						<dt>個人情報の利用目的</dt>
							<dd>お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</dd>
			
						<dt>個人情報の第三者への開示・提供の禁止</dt>
							<dd>当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。
							<ul>
								<li>お客さまの同意がある場合</li>
								<li>お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合</li>
								<li>法令に基づき開示することが必要である場合</li>
							</ul>
						</dd>
			
						<dt>個人情報の安全対策</dt>
							<dd>当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</dd>
			
						<dt>ご本人の照会</dt>
							<dd>お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。</dd>
			
						<dt>法令、規範の遵守と見直し</dt>
							<dd>当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</dd>
			
						<dt>お問い合わせ</dt>
							<dd>
							当社の個人情報の取扱に関するお問い合わせは下記までご連絡ください。<br>
							合同会社K.K<br>
							&#12306;651-2101　兵庫県神戸市西区伊川谷町布施畑834-6 2F<br>
							TEL: 078-203-3255</dd>
							<!-- 本アップ時はメールアドレスはエンティティ化すること -->
					</dl>
				</div>
			</div>
			<div class="privacypolicycheck">
				<input type="checkbox" id="check1">
				<label for="check1">プライバシーポリシーに同意する</label>
			</div>
			<input type="hidden" name="upflg" value="1">
			<p class="cBtn"><input class="clearForm2" type="submit" name="send" value="確認画面へ"></p>
		</form>

		<?php } ?>

	</div>
	</section>


</div><!-- /#main -->



<!--<p id="pageTop"><a href="#pTop"><img src="./img/pagetop_off.png" alt="ページトップへ"></a></p>-->


<!-- footer -->
<footer>
	<div class="inner">
		<p class="logo"><img src="./img/logo.png" alt=""></p>
	</div>
	<p class="copyright"><small>©K's JAPAN 2023</small></p>
</footer>
<!-- /footer -->


<script src="./js/data-img.js"></script>
<script src="./js/script.js"></script>
<!-- /slide_menu -->
<script src="./js/flickity-docs.min.js"></script>


</body>
</html>
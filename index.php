<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>興味を持ってくださった方はこちら！</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:18px;}
  	.main-visual {
		left: 50%;
  	  	text-align: center;
  	}

	.layout-about {
		left: 50%;
  	  	text-align: center;
	}

	.layout-course {
		left: 50%;
  	  	text-align: center;
	}

	.course-box__inner {
		left: 50%;
  	  	text-align: center;
	}

	.layout-contact {
		left: 50%;
  	  	text-align: center;
	}

	</style>
</head>
<body>

<!--header-->
<header class="header">


	<!-- main visual -->
	<div class="main-visual">
		<h1 class="site-title">鍋で簡単に栄養管理をしよう<p>
		<span class="site-title__sub">SOUP WITH EASE</span></h1>
		<img src="nabe.jpg" alt="鍋の画像" style="width: 200px; transform-origin: center; transition: transform 0.5s";>
	</div>

</header>
<!--//header-->

<!--about-->
<section id="about">
	<div class="layout-about">
		<h2 class="section-title section-title__yellow"><span class="section-title__ja">SOUP WITH EASE</span></h2>
		<div class="section-sentence">
			<p class="section-paragraph">SOUP WITH EASEはパーソナル鍋で、食事管理をより簡単にします。</p>
			<p class="section-paragraph">食事管理アプリを使っていると、この栄養素が足りない、ということがよくありませんか...？<br>
			<p class="section-paragraph">夜ご飯に何を作ればいいのかわからない！<br>
			<p class="section-paragraph">そんなお悩みを解決します。<br>
		</div>
	</div>
</section>
<!--// about-->

<!--course-->
<section id="course">
	<div class="layout-course">
		<h2 class="section-title section-title__modifier-primary">ご利用方法<span class="section-title__ja"></span></h2>
		<p class="text-center section-paragraph">ステップ０：まず、お申し込みいただくと、アプリと減塩の一人鍋の素が届きます。<br>
	</div>

	<div class="bg-gray" style="display: flex; justify-content: center;">
		<section id="course01" style="flex: 0 0 33.33%; margin: 20px;">
			<div class="course-box">
				<div class="course-box__info">
					<div class="course-box__inner">
						<h3 class="course-box__title">ステップ１</h3>
						<p class="course-box__paragraph">自分の食事の写真を撮影し、登録します。</p>
					</div>
				</div>
				<div class="course-box__img"><img src="step1.jpeg" style="width: 500px; transform-origin: center;"></div>
			</div>
		</section>

		<!--	-->
		<section id="course02" style="flex: 0 0 33.33%; margin: 20px;">
			<div class="course-box course-box__reverse">
				<div class="course-box__info course-box__info-reverse">
					<div class="course-box__inner">
						<h3 class="course-box__title">ステップ２</h3>
						<p class="course-box__paragraph">夜ご飯で足りない栄養素を負担できる鍋の具材と量を提案します。</p>
					</div>
				</div>
				<div class="course-box__img"><img src="step2.jpeg" style="width: 600px; transform-origin: center;"></div>
			</div>
		</section>

		<!--	-->
		<section id="course03" style="flex: 0 0 33.33%; margin: 20px;">
			<div class="course-box">
				<div class="course-box__info">
					<div class="course-box__inner">
						<h3 class="course-box__title">ステップ３</h3>
						<p class="course-box__paragraph">具材と量に沿って調理します。</p>
						</div>
					</div>
					<div class="course-box__img"><img src="step3.jpeg" style="width: 550px; transform-origin: center;"></div>
			</div>
		</section>
	</div>
</section>
<!--//course-->

<!--news-->
<section id="news">
	<div class="layout-news">
		<h2 class="section-title section-title__yellow">こんな課題を解決します！ <span class="section-title__ja"></span></h2>
		<div class="wrapper">
			<ul class="news-list">
				<li class="news-list__item" style="flex: 0 0 33.33%; margin: 20px;">
						<div class="news-list__excerpt">
							<h3 class="news-list__title">食事管理のアプリが続かない...</h3>
						</div>
				</li>
				<li class="news-list__item" style="flex: 0 0 33.33%; margin: 20px;">
						<div class="news-list__excerpt">
							<h3 class="news-list__title">毎日メニューを考えるのが面倒...</h3>
						</div>
				</li>
				<li class="news-list__item" style="flex: 0 0 33.33%; margin: 20px;">
						<div class="news-list__excerpt">
							<h3 class="news-list__title">でも健康的な食事を摂りたい...</h3>
						</div>
				</li>
			</ul>
		</div>
	</div>
</section>
<!--//news-->

<!--contact-->
<section id="contact">
 <div class="layout-contact">
	<h2 class="section-title section-title__modifer-thirdy">まずは無料体験！<span class="section-title__ja"></span></h2>
	<div class="section-sentence sentence-lead">
		<p class="section-paragraph section-paragraph__lite">減塩一人鍋のもとを4日分と、アプリの1ヶ月無料プランをお使いいただけます。<br></p>
	</div>

  <form method="POST" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>無料体験お申し込みはこちらから</legend>
     <label>お名前：<input type="text" name="name"></label><br>
     <label>年齢：<input type="text" name="age"></label><br>    
     <label>目的：<textArea name="purpose" rows="1" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="login.php">管理者画面一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!--footer-->
<footer class="footer text-center">
	<div class="wrapper">
		<small class="copyrights">copyrights 2024 SOUP WITH EASE All RIghts Reserved.
		</small>
	</div>
</footer>
<!--// footer-->

</body>
</html>
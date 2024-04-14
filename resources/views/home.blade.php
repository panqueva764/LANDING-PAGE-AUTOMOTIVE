<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Source X SRT</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css\home\app.css')}}" />
</head>
<body id="home">
		<div id="wrapper">
		
			<!--__--__--__--__--__--  L O G O  &   N A V    B A R --__--___--__--__--__-->
			<header>
				<div id="logo">
				<h1>Automotriz<span id="iisrt"><span id="ii"> /// </span>  <span id="srt">Bogotá</span></span></h1>
				</div>
				<nav>
					<ul>
						<li><a href="index.html" id="homenav">Home</a></li>
						<li><a href="blog.html" id="blognav">Blog</a></li>
						<li><a href="fullwidth.html" id="fullwidthnav">Full width</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="#">About</a></li>
					</ul>
				</nav>
			</header>
			
			<!--__--__--__--__--  T H E    S L I D E R --__--__--__--___--__--__--__-->
			<div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider">
                    <section class="registration">
                    <h2>¡Regístrate ahora para participar por un gran descuento!</h2>
                    <p>Descubre todas nuestras ofertas especiales y encuentra el auto de tus sueños.</p>
                    <a href="{{ route('register.form') }}">Registrarse</a>
                    </section>
				</div>
			</div>

			<!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
            <br>
			<section>
				<div id="line">
					<div class="dline"></div>
					<h1>Compra tu Auto</h1>
					<div class="dline"></div>
				</div>
				<div id="ourserv">
					<article>
						<h1>LOREM IPSUM DOLOR SIT</h1>
						<img src="{{ asset('https://http2.mlstatic.com/D_NQ_NP_798668-MCO75782364569_042024-O.webp')}}" alt="" />
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet.</p>
					</article>
					<article>
						<h1>LOREM IPSUM DOLOR SIT</h1>
						<img src="{{ asset('https://http2.mlstatic.com/D_NQ_NP_914917-MCO75619371836_042024-O.webp')}}" alt="" />
						<p>Consectetuer adipiscing elit. Suspendisse enim elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit.</p>
					</article>
					<article class="lastarticle">
						<h1>Web Development</h1>
						<img src="{{ asset('https://http2.mlstatic.com/D_NQ_NP_2X_742002-MCO75782416443_042024-F.webp')}}" alt="" />
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit enim.</p>
					</article>
				</div>
				<div id="sline">
					<div class="sdline"></div>
					<h1>Alquila tu auto</h1>
					<div class="sdline"></div>
				</div>
				<div id="latestp">
					<article>
						<h1>Lorem Ipsum Dolor Sit</h1>
						<img src="{{ asset('https://http2.mlstatic.com/D_NQ_NP_2X_780077-MCO75618614210_042024-F.webp')}}" alt="" />
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque.</p>
					</article>
					<article>
						<h1>Lorem Ipsum Dolor Sit</h1>
						<img src="{{ asset('https://http2.mlstatic.com/D_NQ_NP_2X_720199-MCO75617874344_042024-F.webp')}}" alt="" />
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque.</p>
					</article>
					<article>
						<h1>Lorem Ipsum Dolor Sit</h1>
						<img src="{{ asset('https://http2.mlstatic.com/D_NQ_NP_960166-MCO75780665173_042024-O.webp')}}" alt="" />
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque.</p>
					</article>
				</div>
			</section>				
			<!--__--__--__--__--  T H E    F O O T E R --__--__--__--___--__--__--__-->
			<footer>
				<p>Copyright &copy 2024 Automotriz Bogotá D.C
			</footer>
		</div>			
	</body>
</html>

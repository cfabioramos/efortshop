<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
<!-- meta character set -->
<meta charset="iso-8859-1">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta http-equiv="content-language" content="pt-br">
<http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<!-- Always force latest IE rendering engine or request Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>EfortShop, a sua melhor parceira em TI.</title>
<link rel="icon" type="image/png" href="img/EforteShop_LOGOMARCA.png">
<!-- Meta Description -->
<meta name="author" content="EfortShop - Carlos F�bio">
<meta name="reply-to" content="framos@efortshop.com.br">
<meta name="description" content="EfortShop Page. Para venda de equipamentos de inform�tica e desenvolvimento de sites e e-commerce ">
<meta name="keywords"
	content="e-commerce, ecommerce, sistemas, software, parallax, desenvolvimento, business, sistemas">
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS
		================================================== -->

<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700'
	rel='stylesheet' type='text/css'>

<!-- Fontawesome Icon font -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- bootstrap.min -->
<link rel="stylesheet" href="css/jquery.fancybox.css">
<!-- bootstrap.min -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- bootstrap.min -->
<link rel="stylesheet" href="css/owl.carousel.css">
<!-- bootstrap.min -->
<link rel="stylesheet" href="css/slit-slider.css">
<!-- bootstrap.min -->
<link rel="stylesheet" href="css/animate.css">
<!-- Main Stylesheet -->
<link rel="stylesheet" href="css/main.css">

<!-- Modernizer Script for old Browsers -->
<script src="js/modernizr-2.6.2.min.js"></script>

<!-- Piwik -->
<!--
	<script type="text/javascript">
		var _paq = _paq || [];
	  	_paq.push(['trackPageView']);
	  	_paq.push(['enableLinkTracking']);
	  	(function() {
	    	var u="//cluster-piwik.locaweb.com.br/";
	    	_paq.push(['setTrackerUrl', u+'piwik.php']);
	    	_paq.push(['setSiteId', 8149]);
	    	var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
	    	g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	  	})();
	</script>
	<noscript><p><img src="//cluster-piwik.locaweb.com.br/piwik.php?idsite=8149" style="border:0;" alt="" /></p></noscript>
-->
<!-- End Piwik Code -->

<?php
	$msgNews= 0;
	@$msgNews= $_REQUEST['msgNews'];
?>

</head>

<body id="body">

	<!-- preloader -->
	<div id="preloader">
		<div class="loder-box">
			<div class="battery"></div>
		</div>
	</div>
	<!-- end preloader -->

	<!--
        Fixed Navigation
        ==================================== -->
	<header id="navigation"
		class="navbar-inverse navbar-fixed-top animated-header">
		<div class="container">
			<div class="navbar-header">
				<!-- responsive nav button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<!-- /responsive nav button -->

				<!-- logo -->
				<h1 class="navbar-brand">
					<a href="#body"> <!--img alt="EfortShop"
						src="img/EforteShop.com.br_LOGO.png"
						style="width: 180px; height: 60px;"></img --> efortshop
					</a>
				</h1>
				<!-- /logo -->
			</div>

			<!-- main nav -->
			<nav class="collapse navbar-collapse navbar-right" role="navigation">
				<ul id="nav" class="nav navbar-nav">
					<li><a href="#body">In�cio</a></li>
					<!-- li><a href="#price">Vendas</a></li> -->
					<li><a href="#service">Servi�os</a></li>
					<li><a href="#sale">Vendas</a></li>
					<li><a href="#testimonials">Depoimentos</a></li>
					<li><a href="#contact">Contato</a></li>
				</ul>
			</nav>
			<!-- /main nav -->
		</div>
	</header>
	<!--
        End Fixed Navigation
        ==================================== -->

	<main class="site-content" role="main"> <!--
        Home Slider
        ==================================== -->

	<section id="home-slider">
		<div id="slider" class="sl-slider-wrapper">

			<div class="sl-slider">

				<div class="sl-slide" data-orientation="horizontal"
					data-slice1-rotation="-25" data-slice2-rotation="-25"
					data-slice1-scale="2" data-slice2-scale="2">

					<div class="bg-img bg-img-1"></div>

					<div class="slide-caption">
						<div class="caption-content">
							<h2 class="animated fadeInDown">autenticidade</h2>
							<span class="animated fadeInDown">Conhece alguma outra
								empresa de TI com esse estilo?</span> <a href="#contact"
								class="btn btn-blue btn-effect">Contate-nos</a>
						</div>
					</div>

				</div>

				<div class="sl-slide" data-orientation="vertical"
					data-slice1-rotation="10" data-slice2-rotation="-15"
					data-slice1-scale="1.5" data-slice2-scale="1.5">

					<div class="bg-img bg-img-2"></div>
					<div class="slide-caption">
						<div class="caption-content">
							<h2>Sustentabilidade</h2>
							<span> Em parceria com a JJ Lixo Eletr�nico, lutamos para
								melhorar o meio ambiente por meio do tratamento do nosso lixo
								eletr�nico.</span> <a href="#contact" class="btn btn-blue btn-effect">Contate-nos</a>
						</div>
					</div>

				</div>

				<div class="sl-slide" data-orientation="horizontal"
					data-slice1-rotation="3" data-slice2-rotation="3"
					data-slice1-scale="2" data-slice2-scale="1">

					<div class="bg-img bg-img-3"></div>
					<div class="slide-caption">
						<div class="caption-content">
							<h2>Trabalho com comprometimento em uni�o</h2>
							<span>Nossa for�a vem da nossa capacidade de perceber e
								trabalhar com os anseios de cada colaborador.</span> <a href="#contact"
								class="btn btn-blue btn-effect">Contate-nos</a>
						</div>
					</div>

				</div>

			</div>
			<!-- /sl-slider -->

			<!-- 
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                -->

			<nav id="nav-arrows"
				class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
				<a href="javascript:;" class="sl-prev"> <i
					class="fa fa-angle-left fa-3x"></i>
				</a> <a href="javascript:;" class="sl-next"> <i
					class="fa fa-angle-right fa-3x"></i>
				</a>
			</nav>


			<nav id="nav-dots"
				class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
				<span class="nav-dot-current"></span> <span></span> <span></span>
			</nav>

		</div>
		<!-- /slider-wrapper -->
	</section>

	<!--
        End Home SliderEnd
        ==================================== --> <!-- about section -->
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-4 wow animated fadeInLeft">
					<div class="recent-works">
						<h3>Quem Somos</h3>
						<div id="works">
							<div class="work-item">
								Miss�o <br> <br> Oferecer produtos e servi�os de
								qualidade com pre�os justos, visando conquistar, fidelizar e
								satisfazer as expectativas dos nossos clientes.
							</div>
							<div class="work-item">
								<p>
									Vis�o <br> <br> Ser reconhecida no mercado como uma
									empresa refer�ncia no segmento de tecnologia da informa��o e
									solu��es relacionadas.
								</p>
							</div>
							<div class="work-item">
								<p>
									Valores <br> <br> Buscamos ter uma equipe unida que
									trabalha em prol da satisfa��o do cliente. <br> Buscamos
									solucionar o problema da melhor maneira poss�vel.<br>
									Procuramos ser sempre objetivos e eficientes.<br> Somos
									�ticos e transparentes.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-md-offset-1 wow animated fadeInRight">
					<div class="welcome-block">
						<h3>Sobre a EfortShop</h3>
						<div class="message-body">
							<img src="img/EforteShop_LOGOMARCA.png" class="pull-left" alt="member">
							<p>
								Fundada no ano de 1992, a Moura & Mascarenhas LTDA iniciou suas atividades no segmento de vendas nas �reas de papelaria, livraria e suprimentos de inform�tica. 
Ap�s alguns anos iniciamos uma filial para atuar com maior foco na �rea de TI, pois percebemos que este era, e continua sendo, um mercado muito carente na Bahia.
A partir de ent�o, iniciamos as atividades com a �EfortShop�, que iniciaria com uma base s�lida, herdando muita experi�ncia de atendimento e comprometimento com os seus clientes, com uma filosofia de trabalho de uni�o e respeito.
No nosso espa�o f�sico, localizado no bairro de Brotas, estudamos as novas tecnologias de mercado, testamos e entendemos as funcionalidades de cada equipamento antes das instala��es, orientamos nossos clientes e executamos os servi�os conforme o combinado. A qualidade do servi�o junto com um bom atendimento � a nossa prioridade.
Ah! No nome, a palavra Efort vem da palavra Effort (esfor�o em ingl�s). Apenas retiramos um "f" para facilitar o entendimento.
							</p>
						</div>
						<!--a href="#" class="btn btn-border btn-effect pull-right">Read
							More</a-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end about section --> <!-- Service section -->
	<section id="service">
		<div class="container">
			<div class="row">

				<div class="sec-title text-center">
					<h2 class="wow animated bounceInLeft">Servi�os</h2>
					<p class="wow animated bounceInRight">Nossas principais
						atividades</p>
				</div>

				<div
					class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-wrench fa-3x"></i>
						</div>
						<h3>Suporte</h3>
						<p>Em nossa loja, localizada no bairro de Brotas, conseguimos
							atender aos nossos clientes realizando manuten��es preventivas e
							corretivas em seus computadores, notebooks, tablets e celulares.</p>
					</div>
				</div>

				<div
					class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn"
					data-wow-delay="0.3s">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-file-code-o fa-3x"></i>
						</div>
						<h3>Desenvolvimento de Sites e Sistemas</h3>
						<p>Somos especialistas em desenvolvimento de sites, 
						e-commerce e sistemas de grande porte.</p>
					</div>
				</div>

				<div
					class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn"
					data-wow-delay="0.6s">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-wifi fa-3x"></i>
						</div>
						<h3>Redes de Computadores</h3>
						<p>Atuamos com montagem e configura��o de redes de
							computadores, principalmente com (i) Cabeamento Estruturado, (ii)
							Montagem e Configura��o de Servidores e (iii) Gerenciamento de
							Rede.</p>
					</div>
				</div>

				<div
					class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn"
					data-wow-delay="0.9s">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-recycle fa-3x"></i>
						</div>

						<h3>Sustentabilidade</h3>
						<p>
							Preocupados com o meio ambiente, decidimos nos tornar um centro
							de coleta de lixo eletr�nico. Esse � um trabalho feito em
							parceria com a <a href="http://www.ecycle.com.br/postos/cooperativa/ba/salvador/jj-lixo-eletronico/20625" 
								target="#">JJ Lixo Eletr�nico</a>. <a
								href="https://www.youtube.com/watch?v=ubfeKEe9gjg" target="#">Se
								conscientize S2</a> 
						</p>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- end Service section --> <!-- sale section -->
	<section id="sale">
		<div class="container">
			<div class="row">

				<div class="sec-title text-center wow animated fadeInDown">
					<h2>VENDAS</h2>
					<p>Em nosso estoque conseguimos concentrar uma grande variedade de
						equipamentos de inform�tica e materiais de escrit�rio.</p>
				</div>


				<ul class="project-wrapper wow animated fadeInUp">
					<li class="portfolio-item"><img src="img/portfolio/item.jpg"
						class="img-responsive"
						alt="Em nossa loja, localizada no bairro de Brotas, conseguimos oferecer o que h� de mais avan�ado em termos de tecnologia com um pre�o diferenciado. E fazemos a entrega em domic�lio.
						">
						<figcaption class="mask">
							<h3>Nossa Loja</h3>
							<p>
								Em nossa loja oferecemos um ambiente agrad�vel para te atender
								nas suas necessidades. <a href="#contact">Veja a localiza��o</a>
							</p>
						</figcaption>
						<ul class="external">
							<li><a class="fancybox" title="Nossa Loja"
								data-fancybox-group="works" href="img/portfolio/item.jpg"><i
									class="fa fa-search"></i></a></li>
							<li><a href=""><i class="fa fa-link"></i></a></li>
						</ul></li>

					<li class="portfolio-item"><img src="img/portfolio/item2.jpg"
						class="img-responsive"
						alt="Inform�tica � o nosso carro chefe. Nesta �rea, estamos sempre nos esfor�ando para ter os produtos mais avan�ados com os melhores pre�os do mercado.">
						<figcaption class="mask">
							<h3>Inform�tica</h3>
							<p>
								No nosso estoque concentramos uma grande variedade de
								equipamentos de inform�tica. <a
									href="docs/catalogo_informatica.xlsx" target="#">Confira o
									nosso cat�logo.</a>
							</p>
						</figcaption>
						<ul class="external">
							<li><a class="fancybox" title="Inform�tica"
								href="img/slider/banner.jpg" data-fancybox-group="works"><i
									class="fa fa-search"></i></a></li>
							<li><a href=""><i class="fa fa-link"></i></a></li>
						</ul></li>

					<li class="portfolio-item"><img src="img/portfolio/item3.jpg"
						class="img-responsive"
						alt="Em tempos dif�ceis, as empresas que tem bons relacionamentos e conseguem 
							atender aos seus clientes em um escopo maior de necessidades,
							s�o as que conseguem se manter firmes e ultrapassar bem os obst�culos.
							">
						<figcaption class="mask">
							<h3>Materiais de Escrit�rio</h3>
							<p>Estabelecendo parcerias, conseguimos nos tornar
								competitivos em vendas de materias de escrit�rio.</p>
						</figcaption>
						<ul class="external">
							<li><a class="fancybox" title="Materiais de Escrit�rio"
								data-fancybox-group="works" href="img/portfolio/item3.jpg"><i
									class="fa fa-search"></i></a></li>
							<li><a href=""><i class="fa fa-link"></i></a></li>
						</ul></li>

					<li class="portfolio-item"><img src="img/portfolio/item4.jpg"
						class="img-responsive"
						alt="Englobando a venda de materiais de escrit�rio, conseguimos suprir as necessidades
							das empresas em um conjunto mais amplo de necessidades, fazendo do pre�o
							um diferencial.">
						<figcaption class="mask">
							<h3>Venda Casada</h3>
							<p>Com a venda casada, englobando materiais de escrit�rio e
								inform�tica, conseguimos atingir pre�os imbat�veis.</p>
						</figcaption>
						<ul class="external">
							<li><a class="fancybox" title="Venda Casada"
								data-fancybox-group="works" href="img/portfolio/item4.jpg"><i
									class="fa fa-search"></i></a></li>
							<li><a href=""><i class="fa fa-link"></i></a></li>
						</ul></li>

					<li class="portfolio-item"><img src="img/portfolio/item5.jpg"
						class="img-responsive"
						alt="De PC Gamers a Video Games, estamos preparados para atender as suas necessidades.">
						<figcaption class="mask">
							<h3>Games</h3>
							<p>Gosta de jogar? <a href="#contact">Contate-nos</a> e escolha a configura��o preferida do seu PC Gamer.</p>
						</figcaption>
						<ul class="external">
							<li><a class="fancybox"
								title="Games"
								data-fancybox-group="works" href="img/portfolio/item5.jpg"><i
									class="fa fa-search"></i></a></li>
							<li><a href=""><i class="fa fa-link"></i></a></li>
						</ul></li>

					<li class="portfolio-item"><img src="img/portfolio/item6.jpg"
						class="img-responsive"
						alt="Estabilizadores, nobreaks, filtros de linha, transformadores, adaptadores e at� lampadas de led.
						Confira os pre�os e as marcas dos nossos produtos.">
						<figcaption class="mask">
							<h3>Energia</h3>
							<p>De um simples adaptador ao mais avan�ado nobreak, 
							conseguimos suprir as suas necessidades em energia.</p>
						</figcaption>
						<ul class="external">
							<li><a class="fancybox" title="Energia"
								data-fancybox-group="works" href="img/portfolio/item6.jpg"><i
									class="fa fa-search"></i></a></li>
							<li><a href=""><i class="fa fa-link"></i></a></li>
						</ul></li>
				</ul>

			</div>
		</div>
	</section>
	<!-- end portfolio section --> <!-- Testimonial section -->
	<section id="testimonials" class="parallax">
		<div class="overlay">
			<div class="container">
				<div class="row">

					<div class="sec-title text-center white wow animated fadeInDown">
						<h2>O que os nossos clientes dizem</h2>
					</div>

					<div id="testimonial" class=" wow animated fadeInUp">
						<div class="testimonial-item text-center">
							<img src="img/member-1.jpg" alt="Our Clients">
							<div class="clearfix">
								<span>Katty Flower</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
									sed do eiusmod tempor incididunt ut labore et dolore magna
									aliqua. Ut enim ad minim veniam, quis nostrud exercitation
									ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
									aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur.</p>
							</div>
						</div>
						<div class="testimonial-item text-center">
							<img src="img/member-1.jpg" alt="Our Clients">
							<div class="clearfix">
								<span>Katty Flower</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
									sed do eiusmod tempor incididunt ut labore et dolore magna
									aliqua. Ut enim ad minim veniam, quis nostrud exercitation
									ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
									aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur.</p>
							</div>
						</div>
						<div class="testimonial-item text-center">
							<img src="img/member-1.jpg" alt="Our Clients">
							<div class="clearfix">
								<span>Katty Flower</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
									sed do eiusmod tempor incididunt ut labore et dolore magna
									aliqua. Ut enim ad minim veniam, quis nostrud exercitation
									ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
									aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- end Testimonial section --> <!-- Price section --> <!--section id="price">
		<div class="container">
			<div class="row">

				<div class="sec-title text-center wow animated fadeInDown">
					<h2>Price</h2>
					<p>Our price for your company</p>
				</div>

				<div class="col-md-4 wow animated fadeInUp">
					<div class="price-table text-center">
						<span>Silver</span>
						<div class="value">
							<span>$</span> <span>24,35</span><br> <span>month</span>
						</div>
						<ul>
							<li>No Bonus Points</li>
							<li>No Bonus Points</li>
							<li>No Bonus Points</li>
							<li>No Bonus Points</li>
							<li><a href="#">sign up</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.4s">
					<div class="price-table featured text-center">
						<span>Gold</span>
						<div class="value">
							<span>$</span> <span>50,00</span><br> <span>month</span>
						</div>
						<ul>
							<li>Free Trial</li>
							<li>Free Trial</li>
							<li>Free Trial</li>
							<li>Free Trial</li>
							<li><a href="#">sign up</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.8s">
					<div class="price-table text-center">
						<span>Diamond</span>
						<div class="value">
							<span>$</span> <span>123,12</span><br> <span>month</span>
						</div>
						<ul>
							<li>All Bonus Points</li>
							<li>All Bonus Points</li>
							<li>All Bonus Points</li>
							<li>All Bonus Points</li>
							<li><a href="#">sign up</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</section --> <!-- end Price section --> <!-- Social section -->
	<section id="social" class="parallax">
		<div class="overlay">
			<div class="container">
				<div class="row">

					<div class="sec-title text-center white wow animated fadeInDown">
						<h2>SIGA-NOS</h2>
						<p>Nossas redes sociais</p>
					</div>

					<ul class="social-button">
						<li class="wow animated zoomIn"><a href="http://www.facebook.com/efortshop" 
								target="#"><i class="fa fa-facebook fa-2x"></i></a></li>
						<li class="wow animated zoomIn" data-wow-delay="0.3s"><a
							href="http://www.twitter.com/efortshop" target="#">
							<i class="fa fa-twitter fa-2x"></i></a></li>
						<li class="wow animated zoomIn" data-wow-delay="0.6s"><a
							href="http://www.instagram.com/efortshop" target="#">
							<i class="fa fa-instagram fa-2x"></i></a></li>
					</ul>

				</div>
			</div>
		</div>
	</section>
	<!-- end Social section --> <!-- Contact section -->
	<section id="contact">
		<div class="container">
			<div class="row">

				<div class="sec-title text-center wow animated fadeInDown">
					<h2>Contato</h2>
					<p>Deixe a sua mensagem, que logo logo entraremos em contato. ;-)</p>
				</div>

				<div class="col-md-7 contact-form wow animated fadeInLeft">
					<iframe src="formContact.php" width="100%" height="479px"></iframe>
				</div>

				<div class="col-md-5 wow animated fadeInRight">
					<address class="contact-details">
						<h3>Contate-nos</h3>
						<p>
							<i class="fa fa-pencil"></i>EfortShop � CNPJ: 42.009.506/0001-01<span>Centro Comercial 
								Campinas de Brotas</span> <span>Rua Campinas de Brotas, 209 CEP 40275-160
								</span><span>Brotas - Salvador/Ba</span>
						</p>
						<br>
						<p>
							<i class="fa fa-phone"></i>Telefone: +55 (71) 3037-4006
						</p>
						<p>
							<i class="fa fa-whatsapp"></i>Whatsapp: (71) 98780-1222
						</p>
						<p>
							<i class="fa fa-envelope"></i>Email: 
							<a href="mailto:contato@efortshop.com.br">contato@efortshop.com.br</a>
						</p>
					</address>
				</div>

			</div>
		</div>
	</section>
	<!-- end Contact section -->

	<section id="google-map">
		<div id="map-canvas" class="wow animated fadeInUp"></div>
	</section>

	</main>

	<footer id="footer">
		<div class="container">
			<div class="row text-center">
				<div class="footer-content">
					<div class="wow animated fadeInDown">
						<p>assine para newsletter</p>
						<p>E receba coisas legais. N�s n�o gostamos de spam! ;-)</p>
					</div>
					<form action="processForm.php" method="post" class="subscribe-form wow animated fadeInUp">
						<div class="input-field">
							<input type="text" id="name" name="name" 
							class="subscribe form-control" required="true" 
								maxlength="60" placeholder="Nome...">
						</div>
						<div class="input-field">
							<input type="email" id="email" name="email" 
							class="subscribe form-control" required="true"
								maxlength="60" placeholder="Email...">
						</div>
						<button type="submit" class="submit-icon">
							<i class="fa fa-paper-plane fa-lg"></i>
						</button>
					</form>
					<div class="footer-social">
						<ul>
							<li class="wow animated zoomIn"><a href="http://www.facebook.com/efortshop" target="#"><i
									class="fa fa-facebook fa-3x"></i></a></li>
							<li class="wow animated zoomIn" data-wow-delay="0.3s"><a
								href="http://www.twitter.com/efortshop" target="#">
								<i class="fa fa-twitter fa-3x"></i></a></li>
							<li class="wow animated zoomIn" data-wow-delay="0.6s"><a
								href="http://www.instagram.com/efortshop" target="#">
								<i class="fa fa-instagram fa-3x"></i></a></li>
							<li class="wow animated zoomIn" data-wow-delay="0.9s"><a
								href="skype:live:45048bec7a8de0e9?call">
								<i class="fa fa-skype fa-3x"></i></a></li>
							<li class="wow animated zoomIn" data-wow-delay="1.2s"><a
								href="https://www.youtube.com/watch?v=ubfeKEe9gjg" target="#">
								<i class="fa fa-youtube fa-3x"></i></a></li>
							<li class="wow animated zoomIn" data-wow-delay="1.5s"><a 
							href="mailto:contato@efortshop.com.br?Subject=From%20site" target="_top">
								<i class="fa fa-envelope-o fa-3x"></i></a></li>
						</ul>
					</div>

					<p>
						Copyright &copy; 2016 Designed and Developed By us :-)
						<br>
						Tags: Desenvolvimento de Software, E-Commerce, Ecommerce, Computadores, Notebooks e Equipamentos de Inform�tica
					</p>
				</div>
			</div>
		</div>
	</footer>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
          	<img alt="EfortShop"
						src="img/EforteShop.com.br_LOGO.png"
						style="width: 60px; height: 20px;"></img><br>
				Mensagem Enviada
			</h4>
        </div>
        </div>
      </div>
    </div>
  </div>

	<!-- Essential jQuery Plugins
		================================================== -->
	<!-- Main jQuery -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- Twitter Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Single Page Nav -->
	<script src="js/jquery.singlePageNav.min.js"></script>
	<!-- jquery.fancybox.pack -->
	<script src="js/jquery.fancybox.pack.js"></script>
	<!-- Google Map API -->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<!--script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAak-zws68dKTBRXfCKQ8eBI2RU38FO1cc"></script-->
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- jquery easing -->
	<script src="js/jquery.easing.min.js"></script>
	<!-- jquery mask -->
	<script type="text/javascript" src="js/jquery.mask.min.js"/></script>
	<!-- Fullscreen slider -->
	<script src="js/jquery.slitslider.js"></script>
	<script src="js/jquery.ba-cond.min.js"></script>
	<!-- onscroll animation -->
	<script src="js/wow.min.js"></script>
	<!-- Custom Functions -->
	<script src="js/main.js"></script>

	<script type="text/javascript">
		<?php if ($msgNews == 'true'): ?>
			$("#myModal").modal();
		<?php elseif ($msgNews == 'false'): ?>
			alert('Erro no envio.');
		<?php endif; ?>
	</script>
	
</body>
</html>
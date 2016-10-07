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
<meta name="author" content="EfortShop - Carlos Fábio">
<meta name="reply-to" content="framos@efortshop.com.br">
<meta name="description" content="EfortShop Page. Para venda de equipamentos de informática e desenvolvimento de sites e e-commerce ">
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
					<li><a href="#body">Início</a></li>
					<!-- li><a href="#price">Vendas</a></li> -->
					<li><a href="#service">Serviços</a></li>
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
								empresa de TI com esse estilo?</span> <a href="#service"
								class="btn btn-blue btn-effect">Nossos Serviços</a>
						</div>
					</div>

				</div>

				<div class="sl-slide" data-orientation="vertical"
					data-slice1-rotation="10" data-slice2-rotation="-15"
					data-slice1-scale="1.5" data-slice2-scale="1.5">

					<div class="bg-img bg-img-2"></div>
					<div class="slide-caption">
						<div class="caption-content">
							<h2>Consultoria e Vendas</h2>
							<span>Da união de um grupo competente e disciplinado surgiu uma grande capacidade de <br>
							atuar com excelência nas áreas de consultoria de TI e vendas de equipamentos de informática. 
							<br><br> O resultado? <br><br> Preço e qualidade</span>
						</div>
					</div>

				</div>

				<div class="sl-slide" data-orientation="horizontal"
					data-slice1-rotation="3" data-slice2-rotation="3"
					data-slice1-scale="2" data-slice2-scale="1">

					<div class="bg-img bg-img-3"></div>
					<div class="slide-caption">
						<div class="caption-content">
							<h2>Sustentabilidade</h2>
							<span>Na nossa luta para melhorar o meio ambiente, <br>
							passamos a dar tratamento a todo o lixo eletrônico que geramos ou recebemos.</span> 
								<a href="#contact" class="btn btn-blue btn-effect">Contate-nos</a>
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
								Missão <br> <br> Oferecer produtos e serviços de
								qualidade com preços justos, visando conquistar, fidelizar e
								satisfazer as expectativas dos nossos clientes.
							</div>
							<div class="work-item">
								<p>
									Visão <br> <br> Ser reconhecida no mercado como uma
									empresa referência no segmento de tecnologia da informação e
									soluções relacionadas.
								</p>
							</div>
							<div class="work-item">
								<p>
									Valores <br> <br> Buscamos ter uma equipe unida que
									trabalha em prol da satisfação do cliente. <br> Buscamos
									solucionar o problema da melhor maneira possível.<br>
									Procuramos ser sempre objetivos e eficientes.<br> Somos
									éticos e transparentes.
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
								Fundada no ano de 1992, a Moura & Mascarenhas LTDA iniciou suas atividades no segmento de vendas nas áreas de papelaria, livraria e suprimentos de informática. 
Após alguns anos iniciamos uma filial para atuar com maior foco na área de TI, pois percebemos que este era, e continua sendo, um mercado muito carente na Bahia.
A partir de então, iniciamos as atividades com a “EfortShop”, que iniciaria com uma base sólida, herdando muita experiência de atendimento e comprometimento com os seus clientes, com uma filosofia de trabalho de união e respeito.
No nosso espaço físico, localizado no bairro de Brotas, estudamos as novas tecnologias de mercado, testamos e entendemos as funcionalidades de cada equipamento antes das instalações, orientamos nossos clientes e executamos os serviços conforme o combinado. A qualidade do serviço junto com um bom atendimento é a nossa prioridade.
Ah! No nome, a palavra Efort vem da palavra Effort (esforço em inglês). Apenas retiramos um "f" para facilitar o entendimento.
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
					<h2 class="wow animated bounceInLeft">Serviços</h2>
					<p class="wow animated bounceInRight">A qualidade dos serviços que realizamos
					vem da capacidade de uma equipe comprometida, <br> unida com o proposito 
					de trabalhar com verdade. <br> Como podemos te ajudar?</p>
				</div>

				<a href="#openModalServices_web">
					<div
						class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-soundcloud fa-3x"></i>
							</div>
							<h3>Sua necessidade é na Web?</h3>
							<p> <b>Sistema corporativo? E-commerce? Serviço Web? Ou um simples site?</b><br>
							Seja qual for a sua necessidade na web,
							somos uma equipe com bastante experiencia na área pronta para te atender.</p>
						</div>
					</div>
				</a>

				<div
					class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn"
					data-wow-delay="0.3s">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-audio-description fa-3x"></i>
						</div>
						<h3>E como anda o marketing da sua empresa?</h3>
						<p> Gostou do nosso site?
						E das nossas <a href="#social">redes sociais</a>?
						Sabe, somos facilmente encontrados nos sites de busca...<br>
						Queremos te deixar bem visto na internet, <a href="#contact">contate-nos</a>.
						</p>
					</div>
				</div>

				<div
					class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn"
					data-wow-delay="0.6s">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-wifi fa-3x"></i>
						</div>
						<h3>Talvez em redes de computadores...</h3>
						<p> 
						<b>Infraestrutura ou manutenção de uma rede? Servidores?</b><br>
						Também atuamos com montagem, configuração e manutenção 
						de redes de computadores.</p>
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
							de coleta de lixo eletrônico. Esse é um trabalho feito em
							parceria com a <a href="http://www.ecycle.com.br/postos/cooperativa/ba/salvador/jj-lixo-eletronico/20625" 
								target="#">JJ Lixo Eletrônico</a>. Participe conosco! 
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
					<p>
					Com a venda de equipamentos de informática, nos tornamos uma empresa com maior capacidade 
					<br>em atender às suas necessidades em TI. </p>
				</div>


				<ul class="project-wrapper wow animated fadeInUp">
					<li class="portfolio-item"><img src="img/portfolio/item.jpg"
						class="img-responsive"
						alt="Em nossa loja, localizada no bairro de Brotas, conseguimos oferecer o que há de mais avançado em termos de tecnologia com um preço diferenciado. E em Salvador fazemos a entrega em domicílio.">
						<figcaption class="mask">
							<h3>Nosso Estoque</h3>
							<p>
								No nosso estoque concentramos uma grande variedade de
								equipamentos de informática. Confira o
									nosso <a href="docs/catalogo_informatica.xlsx" 
									target="#">catálogo</a>.
							</p>
						</figcaption>
						<ul class="external">
							<li><a class="fancybox" title="Nossa Loja"
								data-fancybox-group="works" href="img/portfolio/item.jpg"><i
									class="fa fa-search"></i></a></li>
							</a></li>
						</ul></li>

					<li class="portfolio-item"><img src="img/portfolio/item2.jpg"
						class="img-responsive"
						alt="dar mais informacoes sobre o produto... ???">
						<figcaption class="mask">
							<h3>Destaque da semana</h3>
							<p>
								Confira o nosso produto destaque da semana.
							</p>
						</figcaption>
						<ul class="external">
							<li><a class="fancybox" title="Informática"
								href="img/slider/banner.jpg" data-fancybox-group="works"><i
									class="fa fa-search"></i></a></li>
							<!--li><a href=""><i class="fa fa-link"></i></a></li-->
						</ul></li>

					<li class="portfolio-item"><img src="img/portfolio/item3.jpg"
						class="img-responsive"
						alt="Em tempos difíceis, as empresas que tem bons relacionamentos e conseguem 
							atender aos seus clientes em um escopo maior de necessidades,
							são as que conseguem se manter firmes e ultrapassar bem os obstáculos.
							">
						<figcaption class="mask">
							<h3>Preços especiais para PJ</h3>
							<p><a href="#contact">Contate-nos</a> e confira as condições especiais para a sua empresa.</p>
						</figcaption>
						<ul class="external">
							<li><a class="fancybox" title="Materiais de Escritório"
								data-fancybox-group="works" href="img/portfolio/item3.jpg"><i
									class="fa fa-search"></i></a></li>
							<li><a href=""><i class="fa fa-link"></i></a></li>
						</ul></li>

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
							<i class="fa fa-pencil"></i>EfortShop – CNPJ: 42.009.506/0001-01<span>Centro Comercial 
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
						<p>E receba coisas legais. Nós não gostamos de spam! ;-)</p>
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
						Tags: Desenvolvimento de Software, E-Commerce, Ecommerce, Computadores, Notebooks e Equipamentos de Informática
					</p>
				</div>
			</div>
		</div>
	</footer>

  <!-- Modal NewsLetter-->
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

    <!-- Modal NewsLetter-->
  <div class="modal fade" id="modalServicos1" role="dialog">
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

<div id="openModalServices_web" class="modalWindow">
	<div>
		<div class="modalHeader">
			<h2>Seu negócio na Web</h2>
			<a href="#close" title="Close" class="close">X</a>
		</div>
		
		<div class="modalContent">
		<br>
		<p>
			Se você já percebeu que a primeira impressão de boa parde dos
			seus clientes vem da apresentação do seu negócio na web e está preocupado
			em apresenta-lo bem tanto em desktops quanto
			dispositivos móveis, conte conosco. Queremos te entregar 
			um site bem feito, leve, com design responsivo...
		</p><br>
		<p>
			Mas, se você quer potencializar as suas vendas, 
			disponibilizando um bom e-commerce para os seus clientes,
			conseguimos sugerir uma solução que, com certeza, irá atender
			às suas necessidades.
		</p><br>
		<p>
			Ou a sua necessidade é desenvolver sistemas corporativos? <br>
			Já sabe se em Java, Php, Python, Ruby... ou prefere que a gente faça essa análise para você?
		</p>

			<!--p>This is a sample modal window that can be created using CSS3 and HTML5.</p>
			<p>Modal windows are used, among many others, to display login/register forms; advertisements; or just notifications to the user. They frequently contain critical information, that user must attend in order to return to the page.</p-->
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

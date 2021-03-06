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
					<a href="#body">efortshop
					</a>
				</h1>
				<!-- /logo -->
			</div>

			<!-- main nav -->
			<nav class="collapse navbar-collapse navbar-right" role="navigation">
				<ul id="nav" class="nav navbar-nav">
					<li><a href="#body">In�cio</a></li>
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

				<div class="sl-slide" data-orientation="vertical"
					data-slice1-rotation="10" data-slice2-rotation="-15"
					data-slice1-scale="1.5" data-slice2-scale="1.5">

					<div class="bg-img bg-img-2"></div>
					<div class="slide-caption">
						<div class="caption-content">
							<h2>Consultoria e Vendas</h2>
							<span>Da uni�o de um grupo competente e disciplinado surgiu uma grande capacidade de <br>
							atuar com excel�ncia nas �reas de desenvolvimento de software e vendas de equipamentos de inform�tica. 
							<br><br> O resultado? <br><br> Pre�o e qualidade</span>
							<a href="#service"
								class="btn btn-blue btn-effect">Servi�os</a>&nbsp;&nbsp;&nbsp;
							<a href="#sale"
								class="btn btn-blue btn-effect">Vendas</a>
						</div>
					</div>

				</div>

				<div class="sl-slide" data-orientation="horizontal"
					data-slice1-rotation="-25" data-slice2-rotation="-25"
					data-slice1-scale="2" data-slice2-scale="2">

					<div class="bg-img bg-img-1"></div>

					<div class="slide-caption">
						<div class="caption-content">
							<h2 class="animated fadeInDown">autenticidade</h2>
							<span class="animated fadeInDown">Conhece alguma outra
								empresa de TI com esse estilo?</span> <a href="#service"
								class="btn btn-blue btn-effect">Nossos Servi�os</a>
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
							passamos a dar tratamento a todo o lixo eletr�nico que geramos ou recebemos.</span> 
								<a href="#contact" class="btn btn-blue btn-effect">Contate-nos</a>
						</div>
					</div>

				</div>

			</div>

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
								Fundada no ano de 1992, a Moura & Mascarenhas LTDA iniciou suas atividades no segmento de vendas nas �reas de papelaria, livraria, materiais de escrit�rio e suprimentos de inform�tica. Ap�s alguns anos iniciamos uma filial para atuar com maior foco na �rea de inform�tica, pois percebemos que este era, e continua sendo, um mercado muito carente no nordeste do Brasil. A partir de ent�o, demos in�cio �s atividades com a �EfortShop�, que iniciaria com uma base s�lida, recebendo uma heran�a muito valiosa, al�m de material, de experi�ncia no atendimento e comprometimento com os seus clientes, com uma filosofia de trabalho de uni�o e respeito.
<br>No nosso espa�o f�sico, localizado no bairro de Brotas, al�m de concentrarmos um estoque com uma grande variedade de equipamentos de inform�tica, � onde estudamos as novas tecnologias de mercado, testamos e entendemos as funcionalidades de cada equipamento antes das instala��es. Feito isso, orientamos nossos clientes e executamos os servi�os conforme o combinado. A qualidade do servi�o junto com um bom atendimento � a nossa prioridade. 
<br><br>Ah! No nome, a palavra Efort vem da palavra Effort (esfor�o em ingl�s). Apenas retiramos um "f" para facilitar na comunica��o.
<br><br> Obrigado pela visita!
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
					<p class="wow animated bounceInRight">A qualidade dos servi�os que realizamos
					vem da capacidade de uma equipe comprometida, <br> unida com o proposito 
					de trabalhar com verdade. <br><br> <b>Como podemos te ajudar?</b></p>
				</div>

				<!--a href="#openModalReparoCelular_web"-->
				<div
					class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn"
					data-wow-delay="0.3s">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-mobile fa-3x"></i>
						</div>
						<h3>Troca de Tela ou Display de aparelho Celular</h3>
						<p>Realizamos servi�os de troca de tela e display de aparelhos celulares.<br>
						</p>
					</div>
				</div>
				<!--/a-->

				<div
					class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn"
					data-wow-delay="0.6s">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-desktop fa-3x"></i>
						</div>
						<h3>Manuten��o em computadores e notebooks</h3>
						<p> Realizamos manuten��es corretivas e preventivas em computadores e notebooks.
						Al�m disso, conte conosco caso o seu computador esteja precisando de um upgrade.
						</p>
					</div>
				</div>

				<a href="#openModalServices_web">
					<div
						class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-soundcloud fa-3x"></i>
							</div>
							<h3>Ou a sua necessidade � na Web?</h3>
							<p> <b>Sistema corporativo? E-commerce? Servi�o Web? Ou um simples site?</b><br>
							Seja qual for a sua necessidade na web,
							somos uma equipe com bastante experiencia na �rea pronta para te atender.</p>
						</div>
					</div>
				</a>

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
								target="#">JJ Lixo Eletr�nico</a>. Participe conosco! 
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
					Com a venda de equipamentos de inform�tica, nos tornamos uma empresa com maior capacidade 
					<br>em atender �s suas necessidades em TI. </p>
				</div>


				<ul class="project-wrapper wow animated fadeInUp">
					<li class="portfolio-item"><img src="img/sale/estoque_equipamentos_informatica.jpg"
						class="img-responsive"
						alt="Em nossa loja, localizada no bairro de Brotas, conseguimos oferecer o que h� de mais avan�ado em termos de tecnologia com um pre�o diferenciado. E em Salvador fazemos a entrega em domic�lio.">
						<figcaption class="mask">
							<h3>Nosso Estoque</h3>
							<p>
								Aqui concentramos uma grande variedade de produtos. 
								Confira o nosso <a href="docs/catalogo_informatica.xlsx" 
									target="#">cat�logo</a> para vendas a varejo com pagamento � vista.
							</p>
						</figcaption>
						<ul class="external">
							<li><a class="fancybox" title="Nossa Loja"
								data-fancybox-group="works" href="img/sale/estoque_equipamentos_informatica.jpg"><i
									class="fa fa-search"></i></a></li>
							</a></li>
						</ul></li>

					<li class="portfolio-item"><img src="img/sale/google_chromecast.jpg"
						class="img-responsive"
						alt="Transmita seu entretenimento preferido do smartphone diretamente para sua TV">
						<figcaption class="mask">
							<h3>Destaque da semana</h3>
							<p>
								<br> Confira os nossos produtos em destaque no momento.
							</p>
						</figcaption>
						<ul class="external">
							<li><a class="fancybox" title=" Google Chromecast 2"
								href="img/sale/google_chromecast.jpg" data-fancybox-group="works"><i
									class="fa fa-search"></i></a></li>
							<!--li><a href=""><i class="fa fa-link"></i></a></li-->
						</ul></li>

					<li class="portfolio-item"><img src="img/sale/desconto_para_empresas_informatica.jpg"
						class="img-responsive"
						alt="Em tempos dif�ceis, as empresas que tem bons relacionamentos e conseguem 
							atender aos seus clientes em um escopo maior de necessidades,
							s�o as que conseguem se manter firmes e ultrapassar bem os obst�culos.
							Entre em contato com os nossos consultores de vendas e analise as 
							condi��es e pre�os que podemos oferecer em nossas mercadorias.
							">
						<figcaption class="mask">
							<h3>Pre�os especiais para PJ</h3>
							<p><a href="#contact">Contate-nos</a> e confira as condi��es, as promo��es 
							e os pre�os diferenciados para empresas.</p>
						</figcaption>
						<ul class="external">
							<li><a class="fancybox" title="Pre�os e Condi��es Especiais para Pessoa Jur�dica"
								data-fancybox-group="works" href="img/sale/desconto_para_empresas_informatica.jpg"><i
									class="fa fa-search"></i></a></li>
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
							<img src="img/testimonials/rosane.png" alt="Our Clients">
							<div class="clearfix">
								<span>Rosane Pereira</span>, Lacerda e Mesquita - Assessoria Jur�dica
								<p>Recomendo o trabalho da EFORT! 
								O atendimento � �timo, r�pido e de qualidade! 
								Al�m de tudo, o trabalho � desempenhado com muita seriedade. 
								Confio e indico! Parab�ns!.</p>
							</div>
						</div>
						<div class="testimonial-item text-center">
							<img src="img/testimonials/priscila.jpg" alt="Nossos clientes">
							<div class="clearfix">
								<span>Priscila Carvalho</span>
								<p>Empresa s�ria que utiliza a tecnologia da informa��o
								a favor da satisfa��o do cliente, sempre mantendo a qualidade
								dos servi�os. Sendo assim, � v�lido contratar os servi�os
								dessa empresa, que, com compet�ncia e transpar�ncia,
								executam os trabalhos com qualidade.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- end Testimonial section --> <!-- Partnership section --> 
	<!--section id="partnership">
		<div class="container">
			<div class="row">

				<div class="sec-title text-center wow animated fadeInDown">
					<h2>Parceria especial</h2>
					<p>Em tempos dif�ceis, as empresas que conseguem estabelecer parcerias 
					s�o aquelas que conseguem enfrentar as barreiras e se manter firmes.</p>
					<p>O Basar livraria e papelaria que .</p>
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
	</section--> <!-- end Partnership section --> <!-- Social section -->
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
							<i class="fa fa-whatsapp"></i>Whatsapp: (71) 99206-2036
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

<div id="openModalReparoCelular_web" class="modalWindow">
	<div>
		<div class="modalHeader text-center">
			<h2>CONFIRA O MODELO E O VALOR DA TELA DO SEU APARELHO</h2>
			<a href="#close" title="Close" class="close">X</a>
		</div>
		
		<div class="modalContent">
		<p><b>Sansung Duos:</b></p>
		
		<p>R$ 450,00</p>

		<p>(ii) Ou, se voc� quer potencializar as suas vendas, 
			disponibilizando um bom e-commerce para os seus clientes,
			conseguimos sugerir uma solu��o que, com certeza, ir� atender
			�s suas necessidades.
		</p>
		<p>(iii) Ou a sua necessidade � desenvolver sistemas corporativos? <br>
			J� decidiu a linguagem de programa��o? Em Java, Php, Python, Ruby..?
			E o banco de dados? Oracle, SQL Server, DB2, PostgreSQL, MySQL ou est� 
			com foco em escalabilidade e prefere usar outro paradigma, como o No-Sql?
			<br>Se preferir, podemos te ajudar a fazer estas an�lises.
		</p><br>
		<p><b>O NOSSO DIFERENCIAL</b><br>
			Entre em contato conosco caso o modelo desejado n�o esteja relacionado.
		</p><br>

		</div>
	</div>
</div>

<div id="openModalServices_web" class="modalWindow">
	<div>
		<div class="modalHeader text-center">
			<h2>SEU NEG�CIO NA WEB</h2>
			<a href="#close" title="Close" class="close">X</a>
		</div>
		
		<div class="modalContent">
		<p><b>Em rela��o � web, destacamos os seguintes aspectos:</b></p>
		
		<p>(i) Conte conosco se voc� j� percebeu que a primeira impress�o de boa parde dos
			seus clientes sobre o seu neg�cio vem da apresenta��o deste 
			na web e est� preocupado em apresenta-lo bem, tanto em desktops quanto
			dispositivos m�veis. Iremos apresentar o seu neg�cio em
			um site com um belo design, leve e adaptado para dispositivos m�veis.
		</p>
		<p>(ii) Ou, se voc� quer potencializar as suas vendas, 
			disponibilizando um bom e-commerce para os seus clientes,
			conseguimos sugerir uma solu��o que, com certeza, ir� atender
			�s suas necessidades.
		</p>
		<p>(iii) Ou a sua necessidade � desenvolver sistemas corporativos? <br>
			J� decidiu a linguagem de programa��o? Em Java, Php, Python, Ruby..?
			E o banco de dados? Oracle, SQL Server, DB2, PostgreSQL, MySQL ou est� 
			com foco em escalabilidade e prefere usar outro paradigma, como o No-Sql?
			<br>Se preferir, podemos te ajudar a fazer estas an�lises.
		</p><br>
		<p><b>O NOSSO DIFERENCIAL</b><br>
			O nosso diferencial est� no modelo de gerenciamento que 
			adotamos para os nossos projetos, baseado no modelo definido
			pelo <a href="http://www.pmi.org" target="#">PMI</a> e um vislumbre para adequa��o ao 
			<a href="http://www.dragondreamingbr.org/portal/" target="#"> Dragon Dreaming </a>.
			<br>Mas o que isso significa?<br>
			Signigica que nos preocupamos em adotar para os nossos projetos um sistema integrado e um 
			m�todo completo para a realiza��o de projetos criativos, colaborativos e sustent�veis.
		</p><br>

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
	<script>
		
	// When the window has finished loading create our google map below
	//google.maps.event.addDomListener(window, 'load', initMap);

      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
          center: {lat: -12.986138, lng: -38.478608},
          // Set mapTypeId to SATELLITE in order
          // to activate satellite imagery.
          mapTypeId: 'satellite',
          scrollwheel: false,
          zoom: 15
        });

        // Let's also add a marker while we're at it
	    var marker = new google.maps.Marker({
	        position: new google.maps.LatLng(-12.986138, -38.478608),
	        map: map,
			icon: 'img/icons/map-marker.png',
	    });
      }

    </script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdDPkmPhzulallNzvcJ1BEHyhOub6Bh7g&callback=initMap" async defer></script>
	<!--script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyADpCv8MmBLpBtvoyrBzVikvhWvwZdmFtI"> </script-->

	
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

<head>
  <title>Envio de dados do contato</title>

<meta charset="iso-8859-1">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<!-- Always force latest IE rendering engine or request Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Meta Description -->
<meta name="description" content="EfortShop Page">
<meta name="keywords"
	content="e-commerce, ecommerce, sistemas, software, parallax, creative, business, sistemas">
<meta name="author" content="EfortShop - Carlos Fábio">

<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS
		================================================== -->
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<?php
	$msgNews= 0;
	@$msgNews= $_REQUEST['msg'];
?>


	<form action="processForm.php" method="post" name="form">
		<div class="input-field">
			<input type="text" id="name" name="name" class="form-control" required="true" 
				maxlength="60" placeholder="Nome...">
		</div>
		<div class="input-field">
			<input type="email" id="email" name="email" class="form-control" required="true"
				maxlength="60" placeholder="Email...">
		</div>
		<div class="input-field">
			<input type="num" id="whatsapp" name="whatsapp" class="form-control" required="true"
				maxlength="30" placeholder="Celular...">
		</div>
		<div class="input-field">
			<input type="text" id="subject" name="subject" class="form-control" required="true"
				maxlength="40" placeholder="Assunto...">
		</div>
		<div class="input-field">
			<textarea id="message" name="message" class="form-control" required="true"
				maxlength="300" placeholder="Mensagem..."></textarea>
		</div>
		<button type="submit" id="submit" class="btn btn-blue btn-effect">Enviar</button>
	</form>

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
        <div class="modal-body">
			<p>Obrigado! <br> Logo logo entraremos em contato.</p>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

<!-- Custom Functions -->
<script src="js/main.js"></script>

<script type="text/javascript">

	mascaraTelefone( form.whatsapp );

	<?php if ($msgNews == 'true'): ?>
		$("#myModal").modal();
	<?php elseif ($msgNews == 'false'): ?>
		alert('Erro no envio.');
	<?php endif; ?>

</script>

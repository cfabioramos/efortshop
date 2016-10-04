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
	@$msgNews= $_REQUEST['msgNews'];
?>

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

<script type="text/javascript">
	<?php if ($msgNews == 'true'): ?>
		$("#myModal").modal();
	<?php elseif ($msgNews == 'false'): ?>
		alert('Erro no envio.');
	<?php endif; ?>

</script>
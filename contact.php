<!doctype html>
<html lang="en">
  <?php
include("menu.php");
?>
<!-- Header Close -->

<!-- main wrapper start -->
<div class="main-wrapper">

<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Contáctenos</span>
          <h1 class="text-capitalize mb-4 text-lg">Haga sus consultas</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.php" class="text-white">Inicio</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Contáctenos</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- contact form start -->
<section class="contact-form-wrap section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<form id="contact-form" class="contact__form" method="post" action="mail.php">
					<!-- form message -->
					<div class="row">
						<div class="col-12">
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Your message was sent successfully.
							</div>
						</div>
					</div>
					<!-- end message -->
					<span class="text-color">Envía un comentario</span>
					<h3 class="text-md mb-4">Completar la siguiente información.</h3>
					<div class="form-group">
						<input name="name" type="text" class="form-control" placeholder="Nombre Completo:">
					</div>
					<div class="form-group">
						<input name="email" type="email" class="form-control" placeholder="Correo Electronico:">
					</div>
					<div class="form-group-2 mb-4">
						<textarea name="message" class="form-control" rows="4" placeholder="Agregar Comentario"></textarea>
					</div>
					<button class="btn btn-main" name="submit" type="submit">Enviar</button>
				</form>
			</div>

			<div class="col-lg-5 col-sm-12">
				<div class="contact-content pl-lg-5 mt-5 mt-lg-0">
					<span class="text-muted">Para cualquier consulta o sugerencia</span>
					<h2 class="mb-5 mt-2">No dude en comunicarse con el área de soporte</h2>

					<ul class="address-block list-unstyled">
						<li>
							<i class="ti-direction mr-3"></i>Limón,Costa Rica.
						</li>
						<li>
							<i class="ti-email mr-3"></i>Email: bs_capital@hotmail.com
						</li>
						<li>
							<i class="ti-mobile mr-3"></i>Teléfono:+506 6203-4896
						</li>
					</ul>

					<ul class="social-icons list-inline mt-5">
						<li class="list-inline-item">
							<a href="http://www.themefisher.com"><i class="fab fa-facebook-f"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="http://www.themefisher.com"><i class="fab fa-twitter"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="http://www.themefisher.com"><i class="fab fa-linkedin-in"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
	include("footer.php");
?>

</html>
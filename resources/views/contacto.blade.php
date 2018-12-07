@extends('layouts.site')

@section('content')
<div class="pad-60">
				<div class="container">
					<div class="row is-flex">
						<div class="col-md-6">
							<div class="map">
								<!-- <img src="img/bg-about.png" alt=""> -->
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.7380363426787!2d-64.17968758536027!3d-31.421342881402513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9432a29a0193185f%3A0xb6b5064ff3f6c670!2sBalcarce+268%2C+X5000HWF+C%C3%B3rdoba!5e0!3m2!1ses!2sar!4v1541630080797" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>	
							</div>
						</div>
						<div class="col-md-6">
							<div class="content pad-60">
									<h2 class="color-primario ">Contacto</h2>
									<div class="separator-left m-b-30"></div>
									<ul class="contacto m-b-60">
										<li class=""><i><img width="20px" src="img/telefono.svg" alt=""></i> 351 553-8500</li>
										<li class=""><i><img width="20px" src="img/mail.svg" alt=""></i> ventas@freiberg.com.ar</li>
									</ul>
									<h2 class="color-primario ">Formulario</h2>
									<div class="separator-left m-b-30"></div>
									<form method="post">
										@csrf
										<div class="row">
											<div class="col-md-6">
												<input type="text" name="name" placeholder="Nombre y apellido">
											</div>
											<div class="col-md-6">
												<input type="email" name="email" placeholder="Correo electrónico">
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<input type="tel" name="phone" placeholder="Teléfono">
											</div>
											<div class="col-md-6">
												<input type="text" name="subject" placeholder="Asunto">
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<textarea name="message" id="" placeholder="Mensaje"></textarea>
											</div>
										</div>
										<button class="btn btn-default btn-lg " type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Enviar</button>
									</form>
							</div>

						</div>
					</div>
				</div>
			</div>
@endsection
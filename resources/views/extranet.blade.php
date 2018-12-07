@extends('layouts.site')

@section('content')
			<!-- upcoming-product-area start -->
		<div class="upcoming-product-area pad-60">
				<div class="container">		
					<div class="row">
						<div class="col-md-12">
							<div class="upcoming-product text-center">
								<h2>EXTRANET</h2>
								<div class="separator"></div>
							</div>
						</div>
					</div>
					<div class="row">
						<dir class="col-md-2"></dir>
						<div class="col-md-4 m-b-30">
							<div class="card-hero">
								<img src="img/proveedores.svg" class="card-img" alt="">
								<div class="h1 m-b-30">PROVEEDORES</div>
								<a href="http://reporting.freiberg.com.ar:8787/ReportServer?%2fProyecto+de+informe2%2fpermisos&rs:Command=Render" target="_blank">
									<button><p>Ingresar</p> <i class="material-icons">exit_to_app</i></button>
								</a>
							</div>
						</div>
						<div class="col-md-4 m-b-30">
							<div class="card-hero">
								<img src="img/clientes.svg" class="card-img" alt="">
								<div class="h1 m-b-30">CLIENTES</div>
								<a href="http://reporting.freiberg.com.ar:8787/ReportServer/Pages/ReportViewer.aspx?%2fProyecto+de+informe2%2fpermisos_cli&rs%3aCommand=Render" target="_blank">
									<button><p>Ingresar</p> <i class="material-icons">exit_to_app</i></button>
								</a>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
			</div>
			<!-- upcoming-product-area end -->
@endsection
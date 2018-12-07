@extends('layouts.site')

@section('content')
	<!-- header end -->

		<!-- upcoming-product-area start -->
		<div class="catalogos pad-60">
			<div class="container">		
				<div class="row">
					<div class="col-md-12">
						<div class="text-center">
							<h2>Catálogos</h2>
							<div class="separator"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- upcoming-product-area end -->

		<div class="pad-60">
			<div class="container">
				<div class="row">
					@php
						$i=0;
					@endphp
					@foreach ($catalogues as $catalogue)
						@php
							$date = new DateTime($catalogue->date);
						@endphp
						
						<div class="col-md-3 text-center">
							<div class="single-banner banner-item1 m-b-30">
								<a class="banner-thumb" href="#">
									<img src="{{ Storage::disk('public')->url($catalogue->url_image) }}" alt="" />						
								</a>
								<div class="banner-caption">
									<!-- <a href="">
										<i class="material-icons middle">search</i>
									</a> -->
									<!-- <span class="shop-cat-subtitle">'.$date->format('Y').'</span> -->
									<h2><a href="{{$catalogue->url_download}}">{{$catalogue->name}}</a></h2>
									<span class="shop-cat-sale">{{$date->format('Y')}}</span>
								</div>								
							</div>	

							<a href="{{$catalogue->url_download}}" class="btn btn-default btn-lg text-center">			
								<p class="m-0 left"> Descargar</p>
								<i class="material-icons right"style="margin:0 0 0 9px">cloud_download</i>
							</a>
						</div>
					@endforeach
				</div>
			</div>	
		</div>

@endsection
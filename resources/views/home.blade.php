@extends('layouts.site')

@section('content')

        <!-- header end -->

        <!-- upcoming-product-area start -->
        <div class="upcoming-product-area pad-60">
                <div class="container">     
                    <div class="row">
                        <div class="col-md-12">
                            <div class="upcoming-product text-center">
                                <h2>FREIBERG 70 AÑOS</h2>
                                <h3 class="white">Importador y Distribuidor Mayorista</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <dir class="col-md-2"></dir>
                        <div class="col-md-4 m-b-30">
                            <div class="card-hero">
                                <img src="img/empresa.svg" class="card-img" alt="">
                                <div class="h1">EMPRESAS</div>
                                <div class="h4">COMPRAS COORPORATIVAS</div>
                                <a href="http://empresas.freiberg.com.ar/" target="_blank">
                                    <button><p>Ingresar</p> <i class="material-icons">exit_to_app</i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 m-b-30">
                            <div class="card-hero">
                                <img src="img/librerias.svg" class="card-img" alt="">
                                <div class="h1">LIBRERÍAS</div>
                                <div class="h4">COMERCIOS MINORISTAS</div>
                                <a href="http://minoristas.freiberg.com.ar/" target="_blank">
                                    <button><p>Ingresar</p> <i class="material-icons">exit_to_app</i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row text-center pad-60">
                        <i class="material-icons color-primario">keyboard_arrow_down</i>
                    </div>
                </div>
            </div>
            <!-- upcoming-product-area end -->

            <div class="pad-60" id="nosotros">
                <div class="container">
                    <div class="row is-flex">
                        <div class="col-md-6">
                            <div class="bg-about"></div>
                            <!-- <img src="img/bg-about.png" alt=""> -->
                            <img src="img/logo-blanco.png" class="logo-blanco" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="content pad-60">
                                <h5 class="color-primario subtitle underline text-center">HISTORIA</h5>
                                <h2 class="color-primario title text-center">FEIBERG SACI</h2>
                                <h4 class="text-center m-b-30">Freiberg, el importador y distribuidor mayorista con 70 años de trayectoria</h4>
                                <p>Freiberg, el importador y distribuidor mayorista con 70 años de trayectoria, le da la bienvenida y lo invita a conocer sus distintas unidades de negocio en las que Ud. encontrará la más completa línea de papelería escolar, insumos de oficina, papeles en resmas, insumos informáticos de todas las marcas, embalajes, marroquinería, juguetes, regalería y bazar.</p>
                                <p>
                                Desde Córdoba atendemos con vendedores exclusivos radicados en toda la geografía del país a librerías, jugueterías, marroquinerías y polirrubros instalados en más de 500 localidades en las 23 provincias argentinas y Capital Federal con un servicio integral, dinámico y con la firme vocación de satisfacer las exigencias de nuestros clientes.</p>
                                <p>      
                                Como distribuidor de las más afamadas marcas nacionales e internacionales e importación de sus propias marcas, en Freiberg encontrará 15.000 productos con precios de fábrica y en las mejores condiciones de comercialización que el negocio minorista requiere.</p>
                                <p>              
                                Desde nuestra división atención a empresas contamos con los más importantes clientes de la industria, el comercio, bancos, corporaciones profesionales, colegios, universidades, gobierno e instituciones públicas y privadas.</p>
                                <div class="marcas">
                                    <h3 class="color-primario text-center">Nuestras Marcas</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="img/everlight.png" alt="" class="img-responsive center-block">
                                        </div>
                                        <div class="col-md-4">
                                                <img src="img/general.png" alt="" class="img-responsive center-block">
                                        </div>
                                        <div class="col-md-4">
                                                <img src="img/college.png" alt="" class="img-responsive center-block">
                                        </div>
                                        <div class="col-md-4">
                                                <img src="img/newtape.png" alt="" class="img-responsive center-block newtape">
                                        </div>
                                        <div class="col-md-4">
                                                <img src="img/lxyz.png" alt="" class="img-responsive center-block">
                                        </div>
                                        <div class="col-md-4">
                                                <img src="img/trazos.png" alt="" class="img-responsive center-block">
                                        </div>
    
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="pad-60" style="position:relative;" id="novedades">
                <div class="container">
                    <div class="text-center">
                        <h3 class="title-underline color-primario">Novedades</h3>
                        <div class="separator"></div>
                    </div>
                </div>
                <div class="product-slider">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
            
                            
                               @php
                                  $c = 0;
                               @endphp
                                @foreach ($novelties as $novelty) 
                                    @php
                                    if ($c==0) {
                                        $active="active";
                                    }
                                    else{
                                        $active="";
                                    }
                                    $c++;

                                    $info = pathinfo($novelty->url_image);
                                    $ext = $info['extension'];
                                    @endphp
                                    @if ($ext == "mp4" || $ext == "webm")
                                    
                                        <div class="item {{$active}}">
                                            <div align="center">
                                               <video style="width:100%;" muted autoplay loop>
                                                 <source src="{{ Storage::disk('public')->url($novelty->url_image) }}" type="video/{{$ext}}">
                                                 Your browser does not support the video tag.
                                              </video>
                                            </div>
                                        </div>
                                    
                                    @else
                                        
                                        <div class="item {{$active}}"> 
                                            <img src="{{ Storage::disk('public')->url($novelty->url_image) }}"> 
                                        </div>
                                    @endif
                                    
                                @endforeach
                                  
                            
                            
                            <!-- <div class="item"> <img src="http://placehold.it/1600x700?text=Product+04"> </div>
                            <div class="item"> <img src="http://placehold.it/1600x700?text=Product+05"> </div>
                            <div class="item"> <img src="http://placehold.it/1600x700?text=Product+06"> </div> -->
                        </div>
                        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> </a> <a class="right carousel-control" href="#carousel" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                    </div>
                    <div class="clearfix">
                        <div id="thumbcarousel" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <div class="item active">
                                @php 
                                $i=0;
                                @endphp
                                @foreach ($novelties as $novelty)
                                    @php
                                    $info = pathinfo($novelty->url_image);
                                    $ext = $info['extension'];
                                    @endphp

                                    @if ($ext == "mp4" || $ext == "webm")
                                
                                        <div data-target="#carousel" data-slide-to="{{$i++}}" class="thumb">
                                               <video style="width:100%;" muted>
                                                 <source src="{{ Storage::disk('public')->url($novelty->url_image) }}" type="video/{{$ext}}">
                                                 Your browser does not support the video tag.
                                              </video>
                                        </div>
                                        
                                    
                                    @else
                                        
                                        <div data-target="#carousel" data-slide-to="{{$i++}}" class="thumb">
                                            <img src="{{ Storage::disk('public')->url($novelty->url_image) }}">
                                        </div>
                                    @endif
                                    
                                @endforeach
                                
                                
                                <!-- <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+04"></div>
                                <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+05"></div>
                                <div data-target="#carousel" data-slide-to="5" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+06"></div>
                                </div> -->
                                
                            </div>
                        <!-- /carousel-inner --> 
                            
                        </div>
                        <!-- /thumbcarousel --> 
                        
                    </div>
                </div>
            </div>
</div>

    
        <!-- banner-area start -->
        <div class="banner-area bg-color pad-60" style="position:relative;" id="productos">
            <div class="container">
                <div class="row">           
                        <div class="text-center" >
                            <h3 class="title-underline color-primario ">Productos</h3>
                            <div class="separator m-b-60"></div>
                        </div>
                        <div class="col-md-12">
                                <div class="product-tab">
                                    <!-- Nav tabs -->
                                    <ul class="product-nav text-center m-b-30" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Ofertas</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Destacados</a></li>
                                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Novedades</a></li>
                                    </ul>
        
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                            <div class="row">
                                                <div class="product-curosel">
                                    
                                                    

                                                    @foreach ($products as $product) 
                                                        @if ($product->categories->name == "ofertas") 
                                                                                                                    
                                                            <!-- single-product start -->
                                                            <div class="col-md-12">
                                                                <div class="single-product">
                                                                    <div class="product-img">
                                                                         
                                                                            <img src="{{ Storage::disk('public')->url($product->url_image) }}" alt="" />
                                                                            <!-- <img class="secondary-img" src="'.$AppUrl.$rows['url_image'].'" alt="" /> -->
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                            <!-- single-product end -->
                                                        @endif
                                                    @endforeach                  
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="profile">
                                            <div class="row">
                                                <div class="product-curosel">
                                                   
                                                        @foreach ($products as $product) 
                                                            @if ($product->categories->name == "destacados") 
                                                                <!-- single-product start -->
                                                                <div class="col-md-12">
                                                                    <div class="single-product">
                                                                        <div class="product-img">
                                                                             
                                                                                <img src="{{ Storage::disk('public')->url($product->url_image) }}" alt="" />
                                                                                <!-- <img class="secondary-img" src="'.$AppUrl.$rows['url_image'].'" alt="" /> -->
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <!-- single-product end -->
                                                            @endif
                                                        @endforeach         
                                                </div>
                                            </div>                              
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="messages">
                                            <div class="row">
                                                <div class="product-curosel">
                                                    
                                                        @foreach ($products as $product) 
                                                            @if ($product->categories->name == "novedades") 
                                                                <!-- single-product start -->
                                                                <div class="col-md-12">
                                                                    <div class="single-product">
                                                                        <div class="product-img">
                                                                             
                                                                                <img src="{{ Storage::disk('public')->url($product->url_image) }}" alt="" />
                                                                                <!-- <img class="secondary-img" src="'.$AppUrl.$rows['url_image'].'" alt="" /> -->
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach           <!-- single-product end -->
                                                 
                                                </div>
                                            </div>                              
                                        </div>
                                    </div>
                                </div>                      
                            </div>              
                </div>  
            </div>
        </div>
        <!-- banner-area end -->
        <!-- featured-area start -->
        <div class="featured-area pad-60" style="position:relative;">
            <div class="container">
                <div class="row">
                        <div class="text-center m-b-60">
                            <h3 class="title-underline color-primario">Trabajamos con estas marcas</h3>
                            <div class="separator"></div>
                        </div>
                        <div class="brand-curosel">
                                <div class="col-md-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/pelikan.png" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/faber.png" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/sharpie.png" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/parker.png" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/maped.png" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/paper.png" alt="" /></a>
                                    </div>
                                </div>
                            
                            </div>
                </div>
            </div>
        </div>
        <!-- featured-area end -->
        
        <!-- upcoming-product-area start -->
        <div class="catalogo pad-60">
            <div class="container">     
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 relative">
                        <div class="upcoming-product bg-catalogo text-center">
                            <h3 class="title-underline white">CATÁLOGOS FREIBERG</h3>
                            <div class="separator"></div>                               
                            <a href="{{ route('catalogo') }}" class="shop_now">Descargar <i class="material-icons right" style="margin-left:10px;margin-top:4px;">save_alt</i></a>
                            <img src="img/colores.svg" alt="" style="position: absolute;left: 0px;bottom: 0;width: 100%;padding: 0 13px;" >
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <!-- upcoming-product-area end -->
        
        
@endsection


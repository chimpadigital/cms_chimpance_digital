@extends('layouts.app')
@section('css')
<style>
  .filter-button
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #42B32F;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #42B32F;

}
.btn-default:active .filter-button:active
{
    background-color: #42B32F;
    color: white;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}

.pointer:hover{
    cursor: pointer;
  }

</style>
@endsection
@section('content')
<div id="card-show-all" class="box box-default">

  <div class="box-header with-border">
  

    <h3 class="box-title"> Productos </h3>
    <div class="pull-right">
      <a href="{{ route('product-create') }}" class="btn btn-success"><i class="fa fa-upload"></i> Agregar Productos</a>
      <button id="btn-reorder" class="btn btn-success"><i class="fa fa-retweet"></i> Editar</button>
    </div>
  </div>

  <div class="box-body">

    <div class="row">

        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">Todos</button>
            @foreach($categories as $category)
              <button class="btn btn-default filter-button" data-filter="{{$category->name}}">{{$category->name}}</button>
            @endforeach
        </div>
        <br/>

      <div class="row">
          @forelse($productsAll as $product)
            <div class="gallery_product col-md-4 filter {{ $product->categories->name }} destroy-{{ $product->id }}">
                <img src="{{ Storage::disk('public')->url($product->url_image)  }}" class="img-responsive">
            </div>
          @empty
          <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">
            <h3>No hay productos registrados</h3>
            </div>
          @endforelse
      </div>
    </div>


  </div>

</div>

<div id="card-select-category-reorder" class="box box-default" style="display:none;">

  <div class="box-header with-border">
  

    <h3 class="box-title"> Selecciona la categoria a editar </h3>
    <div class="pull-right">
      <button id="show-all-rollack" class="btn btn-success"><i class="fa fa-arrow-left"></i> atras</button>
    </div>
  </div>

  <div class="box-body">
    @php
      $color = [
        0=>'green',
        1=>'aqua',
        2=>'yellow',
      ];
      $i=0;
    @endphp
    <div class="row">
      @foreach($categories as $category)      
      <a href="#" class="btn-category-{{$category->name}}" style="color:white;">
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-{{ $color[$i++] }}">
            <div class="inner">
              <p>categoria</p>
              <h3>{{$category->name}}</h3>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer btn-category-{{$category->name}}">Reordenar <i class="fa fa-retweet"></i></a>
          </div>
        </div>
      </a>
      @endforeach
    </div>

  </div>

</div>

@foreach($categories as $category)

<div id="card-select-category-{{$category->name}}" class="box box-default" style="display:none;">

  <div class="box-header with-border">
  

    <h3 class="box-title"> Categoria {{$category->name}} </h3>
    <div class="pull-right">
      <button class="btn btn-warning select-category-rollack"><i class="fa fa-arrow-left"></i> atras</button>
      <button class="btn btn-success btn-save-{{$category->name}}"><i class="fa fa-save"></i> Guardar</button>
    </div>
  </div>

  <div class="box-body">
    <div class="table-responsive">

      <table id="table-{{$category->name}}" class="grid table" title="Kurt Vonnegut novels">

        <thead>
            <tr>
              <th>No.</th>
              <th>Archivo</th>
              <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
          @php
            $i=1;
          @endphp
          @forelse($productsAll as $product)
          @if($product->categories->name == $category->name)
            <tr class="table-values pointer destroy-{{ $product->id }}">
              <td class="index">{{$i++}}</td>
              <td>
               
                <img style="max-width: 300px; max-height: 150px;" src="{{ Storage::disk('public')->url($product->url_image) }}" class="img-responsive img-show">
                     
              </td>
              
              <td class="product-id  hidden">{{$product->id}}</td>
              
              <td>
                
                <button class="btn btn-danger btn-destroy-{{$category->name}}" id="{{ $product->id }}"  ><i class="fa fa-trash"></i></button>
    
              </td>
            </tr>
            @endif
          @empty
            <p>
            No hay productos por los momentos
            </p>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

</div>
@endforeach

@endsection
@section('js')
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous">
</script>
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous">
</script>
<script type="text/javascript">
  $(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>

<script type="text/javascript">
  
    var fixHelperModified = function(e, tr) {
      var $originals = tr.children();
      var $helper = tr.clone();
      $helper.children().each(function(index) {
          $(this).width($originals.eq(index).width())
      });
      return $helper;
    },
    updateIndex = function(e, ui) {
        $('td.index', ui.item.parent()).each(function (i) {
            $(this).text(i + 1);
        });
    };

  $("#btn-reorder").click(function(){
    $('#card-show-all').hide('3000');
    $('#card-select-category-reorder').show('3000');

  });
  $("#show-all-rollack").click(function(){
    $('#card-show-all').show('3000');
    $('#card-select-category-reorder').hide('3000');

  });
  @foreach ($categories as $category)
    $(".btn-category-{{$category->name}}").click(function(){
      $('#card-select-category-{{$category->name}}').show('3000');
      $('#card-select-category-reorder').hide('3000');

    });

    $(".select-category-rollack").click(function(){
      $('#card-select-category-{{$category->name}}').hide('3000');
      $('#card-select-category-reorder').show('3000');

    });

  $("#table-{{$category->name}} tbody").sortable({
      helper: fixHelperModified,
      stop: updateIndex
  }).disableSelection();

  $( document ).ready(function() {
    $(".btn-save-{{$category->name}}").click(function(){
      var array = [];
      var index = "";
      var id = "";
      $("#table-{{$category->name}} > tbody > tr ").each(function() 
      {

        array[$(this).find(".index").text()] = $(this).find(".product-id").text();
      });

      $.ajax({
        type: "POST",
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ route('product-order') }}",
        data: {// change data to this object
           order : array,
           category:"{{$category->name}}",
        },
        dataType: "text",
        success: function(response,status)
        {
          console.log(response);
          alert('Guardado Exitosamente');
        }
      });
      
    });
  });
  //ELiminar roducto
   $( document ).ready(function() {
    $(".btn-destroy-{{$category->name}}").click(function(){
      var valueId = $(this).attr('id');
      var element = $(this);
    
      $.ajax({
        type: "POST",
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ route('product-destroy') }}",
        data: {// change data to this object
           id : valueId,
           category:"{{$category->name}}",
        },
        dataType: "text",
        success: function(response,status)
        {
          $('.destroy-'+valueId).remove();
          console.log(response);
          
        }
      });
      
    });
  });
  @endforeach
  
</script>

@endsection

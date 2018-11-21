@extends('layouts.app')
@section('css')
<style type="text/css">
  
  .pointer:hover{
    cursor: pointer;
  }


.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}

.box-body { 
border-top-left-radius: 0; 
border-top-right-radius: 0; 
border-bottom-right-radius: 3px; 
border-bottom-left-radius: 3px; 
padding: 10px; 
width: 100%; 
overflow-x: scroll; 
} 


</style>
@endsection
@section('content')
<div class="box box-default">

  <div class="box-header with-border">
  
    <i class="fa fa-retweet"></i>

    <h3 class="box-title">Reordenar Catálogos</h3>
    <div class="pull-right">
      <button id="btn-save" class="btn btn-success">Guardar</button>
    </div>
  </div>

  <div class="box-body">

    <div class="table-reponsive">

      <table id="sort" class="grid table" title="Kurt Vonnegut novels">

        <thead>
            <tr>
              <th>No.</th>
              <th>Archivo</th>
              <th>Nombre</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
          @php
            $i=1;
          @endphp
          @forelse($catalogues as $catalogue)
            <tr class="table-values">
              <td class="index">{{$i++}}</td>
              <td> 
                <img style="max-width: 300px; max-height: 150px;" src="{{ Storage::disk('public')->url($catalogue->url_image) }}" class="img-responsive img-show">   
              </td>
              <td>{{$catalogue->name}}</td>
              
              <td class="img-id  hidden">{{$catalogue->id}}</td>
              <td>
                <form action="{{ route('catalogue-edit') }}" method="post">

                  <input name="id" type="hidden" value="{{ $catalogue->id }}">

                  @csrf
                        
                  <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                </form>
              </td>
              <td>
                <form action="{{ route('catalogue-destroy') }}" method="post">

                  <input name="id" type="hidden" value="{{ $catalogue->id }}">

                  @csrf
                        
                  <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </form>
              </td>
            </tr>
          @empty
            <p>
            No hay Slides por los momentos
            </p>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

</div>

@endsection
@section('js')
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous">
</script>
<script>
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

  $("#sort tbody").sortable({
      helper: fixHelperModified,
      stop: updateIndex
  }).disableSelection();

  $( document ).ready(function() {
    $("#btn-save").click(function(){
      var array = [];
      var index = "";
      var id = "";
      $("#sort > tbody > tr ").each(function() 
      {

        array[$(this).find(".index").text()] = $(this).find(".img-id").text();
      });

      $.ajax({
        type: "POST",
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ route('catalogue-order') }}",
        data: {// change data to this object
           order : array,
        },
        dataType: "text",
        success: function(response,status)
        {
          console.log(response);
          location.reload();
        }
      });
      
    });
  });

  $(document).ready(function(){
    var width = $("img.img-show").width();
    var height = $("img.img-show").height();
    $('.video-show').width(width).height(height)
  });
</script>
@endsection

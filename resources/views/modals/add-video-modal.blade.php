<!-- Modal -->
<div class="modal fade" id="ModalVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">
    
    <div class="modal-content">
      
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          
          <span aria-hidden="true">&times;</span>
        
        </button>

        <h5 class="modal-title" id="exampleModalLabel">Añadir Video</h5>
      
      </div>
      
      <div class="modal-body">
       
        <form action="">
          
          @csrf

          <div class="form-group">
            
            <label for="">Link</label>

            <input class="form-control" type="text" name="url">

          </div>
          
          <div class="pull-right">

            <button class="btn btn-primary mt-4" type="submit">Guardar</button>

          </div>

        </form>
      
      </div>
      
      <div class="modal-footer">
        
      
      </div>
    
    </div>
  
  </div>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Share to...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="share-button">
            <a href="{{route('media.share' , [ 'name' =>$post->name , 'platform' => 'facebook' ])}}" target="blank" class=""><i class="fa fa-facebook"></i></a>
            <a href="{{route('media.share' , [ 'name' =>$post->name , 'platform' => 'facebook' ])}}" class=""><i class="fa fa-instagram"></i></a>
            <a href="{{route('media.share' , [ 'name' =>$post->name , 'platform' => 'facebook' ])}}" class=""><i class="fa fa-whatsapp"></i></a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
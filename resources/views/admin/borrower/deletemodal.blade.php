<!-- Add Equipment Modal -->


<div class="modal fade" id="bdeleteModal{{ $borrower->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

    <div class="modal-content">

    <div class="modal-header">
     <h5 class="modal-title"> {{__('Delete User') }}</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <form action=""  enctype="multipart/form-data">
    @method('delete')
    {{ csrf_field() }}
    <div class="modal-body">Are you sure you want to delete <b>( {{ $borrower->name}}  )</b> ? </div>

    <div class="modal-footer">
    <button type="button"  class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
    <form action=""  method="POST">
        @csrf
        @method('DELETE')
    <button type="submit" class="btn btn-outline-danger" data-dismiss="modal">Delete</button>
    </form>
    </div>

</div>
</div>
</div>


<!-- End of add Equipment Modal -->

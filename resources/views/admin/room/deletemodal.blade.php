<!-- Add Equipment Modal -->

<form action="{{route ('admin.room.destroy', $eqproom->id)}}" method="POST" >
    @method('DELETE')
    @csrf

<div class="modal fade" id="deleteModal{{ $eqproom->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
            <h5 class="modal-title"> {{__('Delete Room') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>

            <div class="modal-body">
                Are you sure you want to delete this room <b>( {{ $eqproom->e_roomname }} )</b> ?
            </div>

            <div class="modal-footer">
            <button type="button"  class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-outline-danger">Delete</button>
            </div>

        </div>

    </div>
</div>
</form>

<!-- End of add Equipment Modal -->

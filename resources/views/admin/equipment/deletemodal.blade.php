<!-- Add Equipment Modal -->

<form action="{{route ('admin.equipment.destroy', $eqpdata->id)}}" method="POST" >
    @method('DELETE')
    @csrf

<div class="modal fade" id="deleteModal{{ $eqpdata->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
            <h5 class="modal-title"> {{__('Delete Equipment') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>

            <div class="modal-body">
                Are you sure you want to delete this equipment <b>( {{ $eqpdata->e_model }} / {{ $eqpdata->e_brand }} )</b> ?
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

<!-- Add Equipment Modal -->

<form action="{{route ('dashboard.user-profile.destroy', Auth::user()->id) }}" method="POST" >
    @method('DELETE')
    @csrf

<div class="modal fade" id="udeleteModal{{ Auth::user()->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">
            <h5 class="modal-title"> {{__('Delete Account') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>

            <div class="modal-body">
                Do you want to delete your account permanently <b>( {{Auth::user()->name }} )</b> ?
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

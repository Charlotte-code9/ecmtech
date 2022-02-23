
 <!-- Edit Modal -->
<form action="{{route ('admin.room.update', $eqproom->id)}}" method="POST" enctype="multipart/form-data">
 {{method_field('patch')}}
 {{ csrf_field() }}

 <div class="modal fade" id="editModal{{ $eqproom->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

    <div class="modal-content">

    <div class="modal-header">
     <h5 class="modal-title"> {{__('Update Room') }}</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>

        <div class="modal-body">

            <div class="form-group">
                <label for="">Room Name</label>
                <input type="text" name="e_roomname" id="e_roomname" class="form-control" placeholder="Roomname" value="{{ $eqproom->e_roomname}}">
            </div>


        </div>




        <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary" value="Save/Insert Data">Update</button>
        </div>


</div>
</div>
</div>
</div>
</form>

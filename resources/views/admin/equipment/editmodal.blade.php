
 <!-- Edit Modal -->
<form action="{{route ('admin.equipment.update', $eqpdata->id)}}" method="POST" enctype="multipart/form-data">
 {{method_field('patch')}}
 {{ csrf_field() }}

 <div class="modal fade" id="editModal{{ $eqpdata->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

    <div class="modal-content">

    <div class="modal-header">
     <h5 class="modal-title"> {{__('Update Equipment') }}</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>

        <div class="modal-body">

            <div class="form-group">
                <label>Category</label>
                <input type="text" class="form-control" name="e_category" id="e_category" placeholder="Category" value="{{ $eqpdata->e_category}}">
              </div>

            <label>Image</label>
            <div class="input-group">
                <input type="file" name="e_image" id="e_image" class="custom-file-input" value="{{ $eqpdata->e_image}}" >
                <label class="custom-file-label">Choose file</label>
                <br><br>
                <img src="{{ asset('storage/public/e_img/'.$eqpdata->e_image) }}" alt="Image" width="70px" height="70px">
            </div>
            <br>
            <div class="form-group">
                <label for="">Brand</label>
                <input type="text" name="e_model" id="e_model" class="form-control" placeholder="Model" value="{{ $eqpdata->e_model}}">
            </div>

            <div class="form-group">
                <label>Type</label>
                <input type="text" class="form-control" name="e_brand" id="e_brand"placeholder="Brand"value="{{ $eqpdata->e_brand}}">
            </div>

            <div class="form-group">
                <label>Quantity</label>
                <input type="text" class="form-control" name="e_quantity" id="e_quantity" placeholder="Quantity" value="{{ $eqpdata->e_quantity}}">
            </div>


            <div class="form-group">
                <label>Status</label>
                <div class="">
                <select class="form-control" name="e_status">
                <option value="" selected disabled>Select status</option>
                <option value="New" {{ $eqpdata->e_status =="New" ? 'selected' : ''}}> New </option>
                <option value="Old" {{ $eqpdata->e_status =="Old" ? 'selected' : ''}}> Old </option>
                <option value="Lost" {{ $eqpdata->e_status =="Lost" ? 'selected' : ''}}> Lost</option>
                </select>
            </div>
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

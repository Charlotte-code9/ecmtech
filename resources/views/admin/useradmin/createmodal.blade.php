
<!-- Add Equipment Modal -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" integrity="sha512-fRVSQp1g2M/EqDBL+UFSams+aw2qk12Pl/REApotuUVK1qEXERk3nrCFChouag/PdDsPk387HJuetJ1HBx8qAg=="
 crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

    <div class="modal-content">

    <div class="modal-header">
     <h5 class="modal-title"> {{__('Add Equipment') }}</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>

        <div class="modal-body">


            {{ csrf_field() }}

             <!-- VALIDATION ERRORS OUTPUT -->
             @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <label>Image</label>
            <div class="input-group">
                <div class="custom-file">
                <input type="file" name="e_image" id="" class="custom-file-input" required>
                <label class="custom-file-label">Choose file</label>
            </div>
            </div>

            <div class="form-group">
                <label for="">Model</label>
                <input type="text" name="e_model" id="" class="form-control" placeholder="Model" required>
            </div>

            <div class="form-group">
              <label>Category</label>
              <input type="text" class="form-control" name="e_category" placeholder="Category" required>
            </div>

            <div class="form-group">
                <label>Brand</label>
                <input type="text" class="form-control" name="e_brand" placeholder="Brand" required>
            </div>

            <div class="form-group">
                <label>Quantity</label>
                <input type="text" class="form-control" name="e_quantity" placeholder="Quantity" required>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="e_status" id="e_status" value="{{old('e_status')}}" required>
                  <option selected disabled>Select Status</option>
                  <option value="New">New</option>
                  <option value="Old">Old</option>
                </select>
              </div>
        </div>

        <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary" value="Save/Insert Data">Add</button>
        </div>

    {!! Form::close() !!}
</div>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- End of add Equipment Modal -->

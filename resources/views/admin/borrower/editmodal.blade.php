
 <!-- Edit Modal -->
 <div class="modal fade" id="beditModal{{ $borrower->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

    <div class="modal-content">

    <div class="modal-header">
     <h5 class="modal-title"> {{__('Update Equipment') }}</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>

        <div class="modal-body">

            {!! Form::open(['method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
            {{ csrf_field() }}

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ $borrower->name}}">
            </div>

            <div class="form-group">
                <label>Type</label>
                <input type="text" class="form-control" name="category" id="category "placeholder="Type"value="{{ $borrower->category}}">
            </div>

            <div class="form-group">
                <label>Year</label>
                <input type="text" class="form-control" name="uyear" id="uyear" placeholder="Department" value="{{ $borrower->uyear}}">
            </div>

            <div class="form-group">
                <label>Section</label>
                <input type="text" class="form-control" name="usec" id="usec" placeholder="Year/Section" value="{{ $borrower->usec}}">
            </div>



        </form>
        </div>

        <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary" value="Save/Insert Data">Update</button>
        </div>
    </form>
</div>
</div>
</div>
</div-->


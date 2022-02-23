<form action="{{route ('dashboard.user-profile.update', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
 {{method_field('patch')}}
 {{ csrf_field() }}
 
 
 <!-- Edit Modal -->
 <div class="modal fade" id="ueditModal{{ Auth::user()->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

    <div class="modal-content">

    <div class="modal-header">
     <h5 class="modal-title"> {{__('Update User Info') }}</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>

        <div class="modal-body">

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ Auth::user()->name}}">
            </div>

             <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Type"value="{{ Auth::user()->email}}">
            </div>

            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" name="mobile" id="mobile "placeholder="Type"value="{{ Auth::user()->mobile}}">
            </div>

            <div class="form-group">
                <label>Category</label>
                <input type="text" class="form-control" name="category" id="category "placeholder="Type"value="{{ Auth::user()->category}}">
            </div>

            <div class="form-group">
                <label>Year</label>
                <select class="form-control" name="uyear" id="uyear">
                <option selected disabled>Year</option>
                <option value="First Year"{{Auth::user()->uyear =="First Year" ? 'selected' :''}}>First Year</option>
                <option value="Second Year"{{Auth::user()->uyear =="Second Year" ? 'selected' :''}}>Second Year</option>
                <option value="Third Year"{{Auth::user()->uyear =="Third Year" ? 'selected' :''}}>Third Year</option>
                <option value="Fourth Year"{{Auth::user()->uyear =="Fourth Year" ? 'selected' :''}}>Fourth Year</option>
                </select>
            </div>

            <div class="form-group">
                <label>Section</label>
                <input type="text" class="form-control" name="usec" id="usec" placeholder="Year/Section" value="{{ Auth::user()->usec}}">
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


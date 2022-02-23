
 <!-- Edit Modal -->
 <div class="modal custom-modal fade" id="bviewModal{{ $borrower->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

    <div class="modal-content">

    <div class="modal-header">
     <h5 class="modal-title"> {{__('Borrower Profile Information') }}</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>

    <div class="modal-body">
        <div class="container-xl px-2 mt-2">
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2" src="{{ asset('-admin/img/icon.jpg')}}" alt="" width="80px" height="80px" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Borrower Details</div>
                        <div class="card-body">
                            <form>
                                <!-- Form Row-->

                                <div class="mb-3">
                                   <label class="small mb-1" for="category">Name</label>
                                    <input class="form-control" id="e_category" type="e_category" value="{{$borrower->name}}" />
                                </div>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="category">Email</label>
                                        <input class="form-control" id="e_category" type="e_category" value="{{$borrower->email}}" />
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="brand">Type</label>
                                        <input class="form-control" id="e_brand" type="e_brandt" value="{{$borrower->category}}" />
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="quantity">Year</label>
                                        <input class="form-control" id="e_category" type="e_category" value="{{$borrower->uyear}}">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="status">Section</label>
                                        <input class="form-control" id="e_status" type="e_status" value="{{$borrower->usec}}" >
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
        </div>
    </div>


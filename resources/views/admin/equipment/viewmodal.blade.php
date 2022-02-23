
 <!-- View Modal -->
 <div class="modal fade" id="viewModal{{ $eqpdata->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

    <div class="modal-content">

    <div class="modal-header">
     <h5 class="modal-title"> {{__('Equipment Information') }}</h5>
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
                            <div class="card-header">Image</div>
                            <div class="card-body text-center">
                                <!-- Profile picture image-->
                                <img class="img-account-profile rounded-circle mb-2" src="{{ asset('storage/public/e_img/'.$eqpdata->e_image) }}" alt="" width="80px" height="80px" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Equipment Details</div>
                            <div class="card-body">
                                <form>
                                    <!-- Form Row-->
 
                                    <div class="mb-3">
                                        <label class="small mb-1" for="category">Category</label>
                                        <input class="form-control" id="e_category" type="e_category" value="{{$eqpdata->e_category}}" />
                                    </div>
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                           <label class="small mb-1" for="model">Model</label>
                                        <input class="form-control" id="e_model" type="e_model" value="{{$eqpdata->e_model}}" />
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="brand">Brand</label>
                                            <input class="form-control" id="e_brand" type="e_brandt" value="{{$eqpdata->e_brand}}" />
                                        </div>
                                    </div>
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="quantity">Quantity</label>
                                            <input class="form-control" id="e_category" type="e_category" value="{{$eqpdata->e_quantity}}" />
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="status">Status</label>
                                            <input class="form-control" id="e_status" type="e_status" value="{{$eqpdata->e_status}}" />
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



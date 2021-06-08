<!-- @php $active = 'department' @endphp -->
@extends('layout.main')
@section('title','Create Deliveries')
@section('content')

<div class="row align-items-center">
    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
                    <br>
                    <h4>Create Deliveries</h4>

                </div>


                <br><br>
                <hr>
                <div class="col-12">
                    <form action="{{ URL::route('distribution.create.save') }}" method="post" class="row g-3">
                        @csrf
                      
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Requestor Name</label>
                                <input type="text" class="form-control" name="requestor_name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Requestor Contact</label>
                                <input type="number" class="form-control" name="requestor_contact" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Purpose</label>
                                <input type="text" class="form-control" name="purpose" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Asset ID</label>
                                <input type="number" class="form-control" name="asset_id" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Quantity</label>
                                <input type="number" class="form-control" name="quantity" required>
                            </div>

                            
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Status</label>
                                <select class="form-control" name="status" required>

                                    <option>processing</option>
                                    <option>declined</option>
                                    <option>distributed</option>
                                  
                                </select>
                            </div>
                            
    
                        

                        <div class="col-12">
                            <button type="submit" class="btn btn-dark">Save</button>
                            <a href="{{ URL::route('distribution') }}" class="btn btn-dark">Cancel</a>
                        </div>
                    </form>

                </div>



            </div>
        </div>
    </div>
</div>
@endsection
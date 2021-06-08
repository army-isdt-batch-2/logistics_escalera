<!-- @php $active = 'employees' @endphp -->
@extends('layout.main')
@section('title','Create Transportation')
@section('content')

<div class="row align-items-center">
    <div class="col-12 mt-4"> 
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
            
                    <h4>Create Transportation</h4>

                </div>
                <hr>
                <div class="col-12">
                    <form action="{{ URL::route('transportation.create.save') }}" method="post" class="row g-3">
                                @csrf
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Plate Number</label>
                                <input type="text" class="form-control" name="plate_number" required>
                            </div>
                            
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Driver Name</label>
                                <input type="text" class="form-control" name="driver_name" required>
                            </div>

                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Driver Contact</label>
                                <input type="text" class="form-control" name="driver_contact" required>
                            </div>
                    
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Notes</label>
                                
                                <textarea rows="7" class="form-control" name="notes"></textarea>

                            </div>
                        
                        
                        </div>

                        <br><br>
                        <hr>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark">Save</button>
                            <a href="{{ URL::route('transportation') }}" class="btn btn-dark">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection
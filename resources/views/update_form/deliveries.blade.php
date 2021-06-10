<!-- @php $active = 'department' @endphp -->
@extends('layout.main')
@section('title','Create Delivery')
@section('content')

<div class="row align-items-center">
    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
                    <br>
                    <h4>Create Delivery</h4>

                </div>


                <br><br>
                <hr>
                <div class="col-12">
                    <form action="{{ URL::route('deliveries.update.save' , $data->id) }}" method="post" class="row g-3">
                        @csrf
                      
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Distribution ID</label>
                                <input type="number" class="form-control" name="distribution_id" value="{{ $data->distribution_id }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Transportion ID</label>
                                <input type="number" class="form-control" name="transportation_id" value="{{ $data->transportation_id }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Date Distributed</label>
                                <input type="date" class="form-control" name="date_distributed" value="{{ $data->date_distributed }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Status</label>
                                <select class="form-control" name="status" value="{{ $data->status }}" required>
                                    
                                    <option>delivered</option>
                                    <option>returned</option>
                                  
                                </select>
                            </div>
                            
    
                        

                        <div class="col-12">
                            <button type="submit" class="btn btn-dark">Save</button>
                            <a href="{{ URL::route('deliveries') }}" class="btn btn-dark">Cancel</a>
                        </div>
                    </form>

                </div>



            </div>
        </div>
    </div>
</div>
@endsection
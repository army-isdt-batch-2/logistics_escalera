<!-- @php $active = 'department' @endphp -->
@extends('layout.main')
@section('title','Supplier')
@section('content')
    <div class="row align-items-center">
        <div class="col-12 mt-5"> 
            <div class="card">
                <div class="card-body row p-5">
                    <div class="col-10">
                        <br>
                        <h4>Supplier</h4>
                        
                    </div>
                    
                    
                    <div class="col-2 text-end"> 
                        <a href="{{ URL::route('transportation.create') }}" class="btn btn-dark pull-right">Create</a>
                    </div> 
                    
                    
                    
                    
                    <br><br>
                    <hr>

                    <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-muted" scope="col">#</th>
                                <th class="text-muted" scope="col">Plate Number</th>
                                <th class="text-muted" scope="col">Driver Name</th>
                                <th class="text-muted" scope="col">Driver Contact</th>
                                <th class="text-muted" scope="col">Notes</th>
                                <th class="text-muted" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($data as $x)
                            <tr>
                                <th scope="row">{{ $x->id }}</th> 
                                <th scope="row">{{ $x->plate_number }}</th>  
                                <th scope="row">{{ $x->driver_name }}</th>   
                                <th scope="row">{{ $x->driver_contact }}</th>  
                                <th scope="row">{{ $x->notes }}</th>   
                                           

                                <th scope="row">
                                    <div class="dropdown">          
                                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="{{ URL::route('transportation.update' , $x->id) }}">Update</a></li>
                                            
                                                
                                            </ul>
                                
                                    </div>
                                
                                </th>
                            </tr>
                         @endforeach
                           
                          
                           
                           
                        </tbody>
                    </table>

                </div>
            </div> 
        </div>
    </div>  
@endsection                
@php $active = 'deliveries' @endphp
@extends('layout.main')
@section('title','Deliveries')
@section('content')
    <div class="row align-items-center">
        <div class="col-12 mt-5"> 
            <div class="card">
                <div class="card-body row p-5">
                    <div class="col-10">
                        <br>
                        <h4>Deliveries</h4>
                        
                    </div>
                    
                    
                    <div class="col-2 text-end"> 
                        <a href="{{ URL::route('deliveries.create') }}" class="btn btn-dark pull-right">Create</a>
                    </div> 
                    
                    
                    
                    
                    <br><br>
                    <hr>


                    
                    <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-muted" scope="col">#</th>
                                <th class="text-muted" scope="col">Distribution</th>
                                <th class="text-muted" scope="col">Transportation</th>
                                <th class="text-muted" scope="col">Date Distributed</th>
                                <th class="text-muted" scope="col">Status</th>
                                <th class="text-muted" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        @foreach($data as $x)
                            <tr>
                                <th scope="row">{{ $x->id }}</th> 
                                <th scope="row">{{ App\Models\Distribution::find($x->distribution_id)->requestor_name }}</th>
                                <th scope="row">{{ App\Models\Transportation::find($x->transportation_id)->driver_name }}</th>
                                <th scope="row">{{ $x->date_distributed }}</th>  
                                <th scope="row">{{ $x->status }}</th>   
                          
                                <th scope="row">
                                    <div class="dropdown">          
                                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="{{ URL::route('deliveries.update' , $x->id) }}">Update</a></li>
                                                <li><a class="dropdown-item" href="{{ URL::route('deliveries.delete' , $x->id) }}">Delete</a></li>
                                                
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
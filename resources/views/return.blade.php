@php $active = 'return' @endphp
@extends('layout.main')
@section('title','Return')
@section('content')
    <div class="row align-items-center">
        <div class="col-12 mt-5"> 
            <div class="card">
                <div class="card-body row p-5">
                    <div class="col-10">
                        <br>
                        <h4>Returns</h4>
                        
                    </div>
                    
                    
                    <div class="col-2 text-end"> 
                        <a href="{{ URL::route('return.create') }}" class="btn btn-dark pull-right">Create</a>
                    </div> 
                    
                    
                    
                    
                    <br><br>
                    <hr>


                    
                    <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-muted" scope="col">#</th>
                                <th class="text-muted" scope="col">Asset</th>
                                <th class="text-muted" scope="col">Returned by</th>
                                <th class="text-muted" scope="col">Returned by Contact</th>
                                <th class="text-muted" scope="col">Quantity</th>
                                <th class="text-muted" scope="col">Reason</th>
                                <th class="text-muted" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $x)
                            <tr>
                                <th scope="row">{{ $x->id }}</th> 
                                <th scope="row">{{ App\Models\Asset::find($x->asset_id)->name }}</th>  
                                <th scope="row">{{ $x->returned_by }}</th>  
                                <th scope="row">{{ $x->returned_by_contact }}</th>   
                                <th scope="row">{{ $x->quantity }}</th>  
                                <th scope="row">{{ $x->reason }}</th>   
                                     

                                <th scope="row">
                                    <div class="dropdown">          
                                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="{{ URL::route('return.update' , $x->id) }}">Update</a></li>
                                                    <li><a class="dropdown-item" href="{{ URL::route('return.delete' , $x->id) }}">Delete</a></li>
                                                
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
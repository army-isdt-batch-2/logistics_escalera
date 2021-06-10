@php $active = 'storage' @endphp
@extends('layout.main')
@section('title','Storage')
@section('content')
    <div class="row align-items-center">
        <div class="col-12 mt-5"> 
            <div class="card">
                <div class="card-body row p-5">
                    <div class="col-10">
                        <br>
                        <h4>Storage</h4>
                        
                    </div>
                    
                    
                    <div class="col-2 text-end"> 
                        <a href="{{ URL::route('storage.create') }}" class="btn btn-dark pull-right">Create</a>
                    </div> 
                    
                    
                    
                    
                    <br><br>
                    <hr>



                    
                    <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-muted" scope="col">#</th>
                                <th class="text-muted" scope="col">Name</th>
                                <th class="text-muted" scope="col">Building</th>
                                <th class="text-muted" scope="col">Floor</th>
                                <th class="text-muted" scope="col">Room</th>
                                <th class="text-muted" scope="col">Cabinet</th>
                                <th class="text-muted" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        @foreach($data as $x)
                            <tr>
                                <th scope="row">{{ $x->id }}</th> 
                                <th scope="row">{{ $x->name }}</th>  
                                <th scope="row">{{ $x->building }}</th>   
                                <th scope="row">{{ $x->floor }}</th>  
                                <th scope="row">{{ $x->room }}</th>  
                                <th scope="row">{{ $x->cabinet }}</th>   
                                     

                                <th scope="row">
                                    <div class="dropdown">          
                                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="{{ URL::route('storage.update' , $x->id) }}">Update</a></li>
                                                    <li><a class="dropdown-item" href="{{ URL::route('storage.delete' , $x->id) }}">Delete</a></li>
                                                
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
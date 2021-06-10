@php $active = 'supplier' @endphp
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
                        <a href="{{ URL::route('supplier.create') }}" class="btn btn-dark pull-right">Create</a>
                    </div> 
                    
                    
                    
                    
                    <br><br>
                    <hr>


                    <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-muted" scope="col">#</th>
                                <th class="text-muted" scope="col">Name</th>
                                <th class="text-muted" scope="col">Contact</th>
                                <th class="text-muted" scope="col">Address</th>
                                <th class="text-muted" scope="col">Contact Person</th>
                                <th class="text-muted" scope="col">Category</th>
                                <th class="text-muted" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr>

                            @foreach($data as $x)
                            <tr>
                                <th scope="row">{{ $x->id }}</th> 
                                <th scope="row">{{ $x->name }}</th>  
                                <th scope="row">{{ $x->contact }}</th>   
                                <th scope="row">{{ $x->address }}</th>  
                                <th scope="row">{{ $x->contact_person }}</th>   
                                <th scope="row">{{ $x->category }}</th>              

                                <th scope="row">
                                    <div class="dropdown">          
                                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="{{ URL::route('supplier.update' , $x->id) }}">Update</a></li>
                                                    <li><a class="dropdown-item" href="{{ URL::route('supplier.delete' , $x->id) }}">Delete</a></li>
                                                
                                            </ul>
                                
                                    </div>
                                
                                </th>
                            </tr>
                            @endforeach
                             
                            </tr>
                           
                           
                        </tbody>
                    </table>

                </div>
            </div> 
        </div>
    </div>  
@endsection                
<!-- @php $active = 'department' @endphp -->
@extends('layout.main')
@section('title','Assets')
@section('content')
    <div class="row align-items-center">
        <div class="col-12 mt-5"> 
            <div class="card">
                <div class="card-body row p-5">
                    <div class="col-10">
                        <br>
                        <h4>Assets</h4>
                        
                    </div>
                    
                    
                    <div class="col-2 text-end"> 
                        <a href="{{ URL::route('assets.create') }}" class="btn btn-dark pull-right">Create</a>
                    </div> 
                    
                    
                    
                    
                    <br><br>
                    <hr>

                    

                    <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-muted" scope="col">#</th>
                                <th class="text-muted" scope="col">Name</th>
                                <th class="text-muted" scope="col">Description</th>
                                <th class="text-muted" scope="col">Category</th>
                                <th class="text-muted" scope="col">Suppplier</th>
                                <th class="text-muted" scope="col">Storage</th>
                                <th class="text-muted" scope="col">Total Stocks</th>
                                <th class="text-muted" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $x)
                                <tr>
                                    <th scope="row">{{ $x->id }}</th> 
                                    <th scope="row">{{ $x->name }}</th>  
                                    <th scope="row">{{ $x->description }}</th>   
                                    <th scope="row">{{ $x->category }}</th> 
                              
                                    <th scope="row">{{ App\Models\Supplier::find($x->supplier_id)->name }}</th> 
                                    <th scope="row">{{ App\Models\Storage::find($x->storage_id)->name }}</th>  
                                     
                                     
                                    <th scope="row">{{ $x->total_stocks }}</th>  
                                
                                    <th scope="row">
                                        <div class="dropdown">          
                                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Action
                                        </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                             <li><a class="dropdown-item" href="{{ URL::route('assets.update' , $x->id) }}">Update</a></li>
                                             <li><a class="dropdown-item" href="{{ URL::route('assets.delete' , $x->id) }}">Delete</a></li>
                                                
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
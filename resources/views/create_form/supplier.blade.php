@php $active = 'supplier' @endphp
@extends('layout.main')
@section('title','Create Supply')
@section('content')

<div class="row align-items-center">
    <div class="col-12 mt-4"> 
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
            
                    <h4>Create Supply</h4>

                </div>
                <hr>
                <div class="col-12">
                    <form action="{{ URL::route('supplier.create.save') }}" method="post" class="row g-3">
                                @csrf
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Contact Number</label>
                                <input type="number" class="form-control" name="contact" required>
                            </div>

                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Contact Person</label>
                                <input type="text" class="form-control" name="contact_person" required>
                            </div>
                            
                            <div class="col-md-12">
                                <label for="inputState" class="form-label">Category</label>
                                        <select class="form-control" name="category" required>
                                            
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Address</label>
                                
                                <textarea rows="10" class="form-control" name="address"></textarea>

                            </div>
                        
                        
                        </div>

                        <br><br>
                        <hr>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark">Save</button>
                            <a href="{{ URL::route('supplier') }}" class="btn btn-dark">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection
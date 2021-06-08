<!-- @php $active = 'department' @endphp -->
@extends('layout.main')
@section('title','Create Asset')
@section('content')

<div class="row align-items-center">
    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
                    <br>
                    <h4>Create Asset</h4>

                </div>


                <br><br>
                <hr>
                <div class="col-12">
                    <form action="{{ URL::route('assets.update.save' , $data->id) }}" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $data->name }}" required>
                            </div>
                            <div class="col-md-12">
                                <label for="inputState" class="form-label">Category</label>
                                <select class="form-control" name="category" value="{{ $data->category }}" required>

                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Description</label>

                                <textarea rows="4" class="form-control" name="description">{{ $data->description }}</textarea>

                            </div>


                        </div>
                        <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Supplier ID</label>
                                <input type="number" class="form-control" name="supplier_id" value="{{ $data->supplier_id }}" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Storage ID</label>
                                <input type="number" class="form-control" name="storage_id" value="{{ $data->storage_id }}" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Total Stocks</label>
                                <input type="number" class="form-control" name="total_stocks" value="{{ $data->total_stocks }}" required>
                            </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-dark">Save</button>
                            <a href="{{ URL::route('assets') }}" class="btn btn-dark">Cancel</a>
                        </div>
                    </form>

                </div>



            </div>
        </div>
    </div>
</div>
@endsection
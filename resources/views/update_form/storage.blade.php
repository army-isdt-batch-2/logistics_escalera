<!-- @php $active = 'employees' @endphp -->
@extends('layout.main')
@section('title','Create Storage')
@section('content')

<div class="row align-items-center">
    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">

                    <h4>Create Storage</h4>

                </div>
                <hr>
                <div class="col-12">
                    <form action="{{ URL::route('storage.update.save' , $data->id) }}" method="post" class="row g-3">
                        @csrf

                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $data->name }}" required>
                        </div>
                        <div class="col-md-6"></div>

                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Building</label>
                            <input type="text" class="form-control" name="building" value="{{ $data->building }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="inputPassword4" class ="form-label">Floor</label>
                            <input type="number" class="form-control" name="floor" value="{{ $data->floor }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Room</label>
                            <input type="text" class="form-control" name="room" value="{{ $data->room }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Cabinet</label>
                            <input type="text" class="form-control" name="cabinet" value="{{ $data->cabinet }}" required>
                        </div>

                        <br><br>
                        <hr>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark">Save</button>
                            <a href="{{ URL::route('storage') }}" class="btn btn-dark">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
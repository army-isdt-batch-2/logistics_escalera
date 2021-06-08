<!-- @php $active = 'employees' @endphp -->
@extends('layout.main')
@section('title','Create Return')
@section('content')

<div class="row align-items-center">
    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">

                    <h4>Create Return</h4>

                </div>
                <hr>
                <div class="col-12">
                    <form action="{{ URL::route('return.create.save') }}" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Asset ID</label>
                            <input type="number" class="form-control" name="asset_id" required>
                        </div>
                        <div class="col-md-6"></div>

                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Returned by</label>
                            <input type="text" class="form-control" name="returned_by" required>
                        </div>

                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Returned by Contact</label>
                            <input type="text" class="form-control" name="returned_by_contact" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="quantity" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Reason</label>
                            <input type="text" class="form-control" name="reason" required>
                        </div>

                        <br><br>
                        <hr>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark">Save</button>
                            <a href="{{ URL::route('return') }}" class="btn btn-dark">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
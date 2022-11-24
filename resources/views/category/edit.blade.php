@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{ route('category.update', $category->id ) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                          <label class="form-label">Category Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Insert Category Name" value="{{ $category->name }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

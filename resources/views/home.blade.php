@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (Auth::user()->role == 'admin')
                    <a href="{{ route('article.create') }}" class="btn btn-primary mb-2">Add New Article</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Height</th>
                                <th>Weight</th>
                                <th>BMI</th>
                                <th>Status</th>
                                <th>Hobby</th>
                                <th>Age</th>
                                <th>Free Consult</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->height }}</td>
                                <td>{{ $d->weight }}</td>
                                <td>{{ $d->BMI }}</td>
                                <td>{{ $d->status }}</td>
                                <td>{{ $d->hoby }}</td>
                                <td>{{ $d->age }}</td>
                                <td>{{ $d->free_consult }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

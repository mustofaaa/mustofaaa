                    @section('content')
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">{{ __('Dashboard') }}</div>

                                    <div class="card-body">
                                        <form action="{{ route('article.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" class="form-control" name="title"
                                                    placeholder="Insert Article Title" required
                                                    value="{{ $article->title }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Image</label>
                                                <img src="{{ asset('storage/'.$article->image) }}" alt="" width="100px">
                                                <input type="file" class="form-control" name="image"
                                                    placeholder="Choose Image File" >
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Content</label>
                                                <input type="text" class="form-control" name="content"
                                                    placeholder="Insert Article Content" required
                                                    value="{{ $article->content }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Category</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="category_id">
                                                    <option selected>Open this select menu</option>
                                                    @foreach ($data as $kt)
                                                    <option value="{{ $kt->id }}" @selected($article->
                                                        category_id==$kt->id)>{{ $kt->name }}</option>
                                                    @endforeach
                                                </select>@extends('layouts.app')
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Author</label>
                                                <input type="text" class="form-control" name="author"
                                                    placeholder="Article Author" required
                                                    value="{{ $article->author }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Date</label>
                                                <input type="date" class="form-control" name="date"
                                                    placeholder="Article Date Created" required
                                                    value="{{ $article->date }}">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endsection

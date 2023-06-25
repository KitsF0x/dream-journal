@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Details of <strong>{{ $dream->title }}</strong></div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="title" class="col-md-4 text-md-end ">Title</label>

                            <div class="col-md-4 border rounded">
                                {{ $dream->title }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-md-4 text-md-end">Description</label>

                            <div class="col-md-4 border rounded">
                                {{ $dream->description }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="rating" class="col-md-4 text-md-end">Rating</label>

                            <div class="col-md-4 border rounded">
                                {{ $dream->rating }}/10
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="lucidity" class="col-md-4 text-md-end">Lucidity</label>

                            <div class="col-md-4 border rounded">
                                {{ $dream->lucidity }}/10
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="favorite" class="col-md-4 text-md-end">Favorite</label>

                            <div class="col-md-4 border rounded">
                                {{ $dream->favorite ? 'true' : 'false' }}
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4 ">
                                <a href="{{ route('dreams.index') }}">
                                    <button class="btn btn-primary">
                                        Back
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

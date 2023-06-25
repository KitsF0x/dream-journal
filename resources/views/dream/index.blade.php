@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Your dreams</div>
                    @foreach ($dreams as $dream)
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title border-bottom">
                                    <h3>{{ $dream->title }}</h3>
                                </div>
                                <p>{{ $dream->description }}</p>
                                <div class="buttons d-flex justify-content-center">
                                    <form action="{{ route('dreams.favorite', [$dream, (int) !$dream->favorite]) }}"
                                        method="POST">
                                        <button class="btn btn-success" type="submit">
                                            @csrf
                                            @if (!$dream->favorite)
                                                Favourite
                                            @else
                                                Unfavorite
                                            @endif
                                        </button>
                                    </form>
                                    <form action="{{ route('dreams.show', $dream->id) }}" method="POST">
                                        @method('GET')
                                        @csrf
                                        <button class="btn btn-primary">Show details</button>
                                    </form>
                                    <form action="{{ route('dreams.edit', $dream) }}" method="POST">
                                        @csrf
                                        @method('GET')
                                        <button class="btn btn-warning">Edit</button>
                                    </form>
                                    <form action="{{ route('dreams.destroy', $dream) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="d-flex justify-content-center mt-3">
                        <a href="{{ route('dreams.create') }}" class="btn btn-primary">Add dream</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

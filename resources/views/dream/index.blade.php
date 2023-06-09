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
                                <div class="buttons">
                                    <button class="btn btn-success">Favourite</button>
                                    <button class="btn btn-primary">Show details</button>
                                    <button class="btn btn-warning">Edit</button>
                                    <form action="{{ route('dreams.destroy', $dream->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <a href="{{ route('dreams.create') }}"><button class="btn btn-primary">Add dream</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection

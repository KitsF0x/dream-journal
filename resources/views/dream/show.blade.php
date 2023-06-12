@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Details of {{ $dream->title }}</div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
  
                                <tbody>
                                    <tr>
                                        <td>Title</td>
                                        <td scope="row">{{ $dream->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td scope="row">{{ $dream->description }}</td>
                                    </tr>
                                    <tr>
                                        <td>Rating</td>
                                        <td scope="row">{{ $dream->rating }}/10</td>
                                    </tr>
                                    <tr>
                                        <td>Lucidity</td>
                                        <td scope="row">{{ $dream->lucidity }}/10</td>
                                    </tr>
                                    <tr>
                                        <td>Favorite</td>
                                        <td scope="row">{{ $dream->favorite ? 'true' : 'false' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="{{ route('dreams.index') }}"><button class="btn btn-primary">Back</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection

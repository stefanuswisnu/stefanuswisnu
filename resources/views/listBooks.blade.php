@extends('layouts.app')

@section('title', 'Book List')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 style="text-align: center; margin-top: 50px; margin-bottom: 20px;">Book List</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Year</th>
                                <th scope="col">Author</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $books as $book )
                            <tr>
                                <th>{{ $book->title }}</th>
                                <th>{{ $book->year }}</th>
                                <th>{{ $book->author }}</th>
                                <th>
                                    @if($book->verified == 0)
                                    <form action="/book/{{ $book->id }}" method="POST">
                                        @method('patch')
                                        @csrf
                                        <input type="hidden" class="form-control" name="verified" id="verified" value="1">
                                        <button style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;" type="submit" class="btn btn-success">verify</button>
                                        @else
                                        verified
                                        @endif
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
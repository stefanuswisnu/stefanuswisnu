@extends('layouts/app')

@section('title', 'Find')

@section('content')
<div class="container" style="margin-top: 40px;">
    <div class="table-responsive">
        <form action="/findBook" method="GET" class="d-inline">
            @csrf
            <label for="gsearch">Find Book:</label>
            <input type="search" id="gsearch" name="gsearch" value="{{$keyword}}">
            <button type="submit" class="btn btn-success">Search</button>
        </form>
        <table class="table table-sm mt-4" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                @if(strpos($book->title, $keyword) !== false )
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>
                        @if ($book->price == null)
                        <strong>Free</strong>
                        @else
                        Rp. {{ $book->price }}
                        @endif
                    </td>
                    <td>
                        @guest
                        <a href="{{ route('login') }}" style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;" class="btn btn-success">See Book</a>
                        @else
                        <a href="/book/{{ $book -> id }}" style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;" class="btn btn-success">See Book</a>
                        @endguest
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
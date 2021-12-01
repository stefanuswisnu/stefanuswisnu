@extends('layouts.app')

@section('title', 'Details')

@section('content')

<div class="container" style="margin-top: 40px;">
    <h3 style="text-align: center;">Details Books</h3>
    <div class="row" style="margin-left: 300px; margin-top: 40px;">
        <div class="col-xl-4">
            <img style="width: 100%;" src='{{asset("public/$book->image")}}' alt="">
        </div>
        <div class="col-xl-8">
            <h5>{{ $book -> title }}</h5>
            <p>{{ $book -> author }}</p>
            <p>{{ $book -> year }}</p>
            <p>{{ $book -> description }}</p>

            <form action="{{route('borrowBook',$book -> id)}}" method="POST" class="d-inline">
                @csrf
                <input type="hidden" name="id_buku" value="{{$book -> id}}">
                <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                <input type="hidden" name="url_buku" value="{{$book -> file}}">
                <div class="quantity-control" data-quantity="">
                    <table>
                        <tr>
                            <td><input style="color: #000000; border: 1px solid  #cacaca; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;" type="number" class="quantity-input" data-quantity-target="" value="1" step="1" min="1" max="" name="buyer_quantity"></td>
                            <td>
                                <p style="margin-top: 13px; margin-left: 10px; font-size: large;">Days</p>
                            </td>
                        </tr>
                    </table>
                </div>

                <button style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;" type="submit" class="btn btn-danger">Borrow</button>
            </form>
            <form action="/buyBook/{{ $book -> id }}" method="POST" class="d-inline">
                @csrf
                <input type="hidden" name="id_buku" value="{{$book -> id}}">
                <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                <input type="hidden" name="url_buku" value="{{$book -> file}}">
                <button type="submit" style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;" class="btn btn-danger">Buy</button>
            </form>
            @if (Auth::user()->is_admin == 1)
            <a style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;" href="/book/{{ $book -> id }}/editBooks" class="btn btn-warning">Edit</a>
            <form action="{{ $book->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;" class="btn btn-danger">Delete</button>
            </form>
            @endif
        </div>
    </div>
</div>

@endsection
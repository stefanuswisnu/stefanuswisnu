@extends('layouts/app') 

@section('title', 'Transaction')

@section('content')
<div class="container" style="margin-top: 40px;">
    <div class="table-responsive">
        <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Book Name</th>
                    <th>Jenis Transaksi</th>
                    <th>Lama Pinjam</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Admin -->
                @if(Auth::user()->is_admin == 1)
                @foreach($transaction as $tc)
                <tr>
                    <td>
                        @foreach($books as $bk)
                        @if($bk->id == $tc->id_buku)
                        {{$bk->title}}
                        @endif
                        @endforeach
                    </td>
                    <td>{{$tc->jenis_transaksi }}</td>
                    <td>
                        @if($tc->jenis_transaksi == "beli")
                        -
                        @else
                        {{$tc->lama_pinjam}}
                        @endif
                    </td>
                    <td>
                        <a style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;" href="{{asset('public/' .$tc->url_buku)}}" class="embed-link btn btn-success">Read</a>
                        <a style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;" href="/book/{{ $bk -> id }}" class="btn btn-success">Detail</a>
                    </td>
                </tr>
                @endforeach

                <!-- User -->
                @else
                @foreach($transaction as $tc)
                @if($tc->id_user == Auth::user()->id)
                @if($tc->jenis_transaksi != "kembali")
                <tr>
                    <td>
                        @foreach($books as $bk)
                        @if($bk->id == $tc->id_buku)
                        {{$bk->title}}
                        @endif
                        @endforeach
                    </td>
                    <td>{{$tc->jenis_transaksi }}</td>
                    <td>
                        @if($tc->jenis_transaksi == "beli")
                        -
                        @else
                        {{$tc->lama_pinjam}}
                        @endif
                    </td>
                    <td>
                        <a style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;" href="{{asset('public/' .$tc->url_buku)}}" class="embed-link btn btn-success">Read</a>

                        <form action="{{route('laporanTransaksi',$tc -> id)}}" method="POST" class="d-inline">
                            @csrf
                            <input type="hidden" name="id" value="{{$tc -> id}}">
                            <button style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;" type="submit" class="btn btn-warning">Detail</button>
                        </form>
                        @if($tc->jenis_transaksi == "pinjam")
                        <form action="{{route('returnBook',$tc -> id)}}" method="POST" class="d-inline">
                            @csrf
                            <input type="hidden" name="id" value="{{$tc -> id}}">
                            <button style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;" type="submit" class="btn btn-danger">Return</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endif
                @endif
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection

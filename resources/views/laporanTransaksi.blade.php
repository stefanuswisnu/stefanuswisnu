@extends('layouts.app')

@section('title', 'Details')

@section('content')
<?php
$previous = "javascript:history.go(-1)";
if (isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}
?>
<div class="container" style="margin-top: 40px;">
    <h3 style="text-align: center;">Laporan Transaksi</h3>
    <div class="row" style="margin-left: 300px; margin-top: 40px;">
        <div class="col-xl-4">
            <img style="width: 80%;" src='{{asset("public/$book->image")}}' alt="">
        </div>
        <div class="col-xl-8">
            <h5>{{ $book -> title }}</h5>
            <p>{{ $book -> author }}</p>
            <p>{{ $book -> year }}</p>
            <p>{{ $book -> description }}</p>
        </div>
    </div>
    <center>
        <a href="<?= $previous ?>" class="btn btn-primary mt-4">Back</a>
    </center>
</div>
@endsection
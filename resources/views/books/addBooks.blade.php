@extends('layouts.app')

@section('title', 'Publication')

@section('content')

@guest
@if (Route::has('login'))

<script>
    window.location.href = '{{ route("login") }}'; //using a named route
</script>

@endif

@else
@if (session('status'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{ session('status') }}
</div>
@endif

<div class="container" style="margin-top: 40px;">
    <h3 style="text-align: center;">Input Books</h3>
    <form action="/books/addBooks" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Book Title</label>
            <input style="color: #000000; border: 1px solid  #cacaca; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;" type="text" class="form-control" name="title" id="title" placeholder="Ex: Modul Praktikum WAD 2021">
        </div>
        <div class="form-group">
            <label for="">Author</label>
            <input style="color: #000000; border: 1px solid  #cacaca; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;" type="text" class="form-control" name="author" id="author" placeholder="Ex: Lab EAD">
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <div class="input-group mb-3">
                <input style="color: #000000; border: 1px solid  #cacaca; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;" type="text" class="form-control" name="price" id="price" placeholder="500000, if free empty the price">
            </div>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea style="color: #000000; border: 1px solid  #cacaca; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;" class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="">Year</label>
            <input style="color: #000000; border: 1px solid  #cacaca; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;" type="number" class="form-control" name="year" id="year" placeholder="Ex: 2021">
        </div>
        <div class="form-group">
            <label for="">Borrow Time</label>
            <input style="color: #000000; border: 1px solid  #cacaca; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;" type="number" class="form-control" name="borrowTime" id="borrowTime" placeholder="Ex: 2, in weeks">
        </div>

        <div class="form-group">
            <label for="cars">Choose a category:</label>
            <select class="form-control" name="category" id="category" style="color: #000000; border: 1px solid  #cacaca; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px;">
                <option value="Anak-Anak">Anak-Anak</option>
                <option value="Remaja">Remaja</option>
                <option value="Dewasa">Dewasa</option>
                <option value="Teknologi">Teknologi</option>
                <option value="Non-Teknologi">Non-Teknologi</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>

        <div class="form-group">
            <label for="image">Image File Input</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>

        <div class="form-group">
            <label for="image">PDF File Input</label>
            <input type="file" class="form-control-file" id="file" name="file">
        </div>

        <button type="submit" style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;" class="btn btn-success">Submit</button>
    </form>

</div>
@endguest
@endsection
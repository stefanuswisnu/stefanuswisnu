@extends('layouts/app')

@section('title', 'About')

@section('content')


<div class="row" style="margin-left: 150px; margin-top: 100px">
    <div class="col-md-6" style="">
        <h3>What is V-Lib?</h3>
        <p style="text-align: justify;">
                    The concept of a library that provides a way for users
                    to access information electronically.
                    Virtual Library provide the concept that libraries can
                    be presented to users without the user coming to the
                    library directly. Users simply by accessing the internet
                    can read digital collections owned by the library,
                    it can even be termed "the library has our computer even
                    on a cellphone that can be taken anywhere without space
                    and time restrictions".
        </p>
        <h3>What can I search on V-Lib?</h3>
        <p style="text-align: justify;">
                    To meet the needs of our users, we subscribe to
                    various online digital library materials (e-Resources)
                    such as journals, ebooks, and other online reference works.
                    Every member of the Virtual Library and already has a member number
                    legitimate, entitled to take advantage of digital collection services
                    online that we subscribe to (e-Resources).
        </p>
    </div>
    <div class="col-md-6">
        <img style="width: 60%;" src="{{ asset('img/vlib.png') }}" alt="">
    </div>
</div>


@endsection
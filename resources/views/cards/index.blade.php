@extends('layout')

@section('content')
    <h1>All Cards List.</h1>

    :@foreach($cards as $card)
        <div>
            {{ $card->title }}
        </div>
    @endforeach
@endsection

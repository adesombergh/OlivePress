@extends('layouts.page')

@section('content')
    <ul class="artists">
        @foreach( $the_artists as $artist)
            <li><a href="{{ $artist['the_link'] }}" style="padding:{{mt_rand(0,50)}}px {{mt_rand(7,70)}}% {{mt_rand(0,50)}}px {{mt_rand(7,70)}}%;">{{$artist['the_title']}}</a></li>
        @endforeach
    </ul>
@endsection
@section('description')
Olive Noire. Eclectic Brussels based artist run label. Liste de artistes membres.
@endsection

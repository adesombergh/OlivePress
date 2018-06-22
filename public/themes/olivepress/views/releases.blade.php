@extends('layouts.page')

@section('content')
<div class="container">

    <div class="releases">
        @foreach($the_releases as $release)
        <a href="{{ $release['the_link'] }}">
            <div class="img"><img src="{{ $release['the_pochette'] }}" alt="alt"></div>
            <p class="caption">‘’{{ $release['the_title'] }}’’ <span>by {{ $release['the_artists'] }} {{ $release['the_date'] }}</span></p>
        </a>
        @endforeach
    </div>

</div>

@endsection

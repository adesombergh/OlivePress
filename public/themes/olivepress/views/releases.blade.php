@extends('layouts.page')

@section('content')
<div class="container">

    <div class="releases">
        @foreach($the_releases as $release)
        <a href="{{ $release['the_link'] }}">
            <div class="img">
                @component('picture')
                    @slot('alt')
                        {{ $release['the_title'] }} by {{ $release['the_artists'] }}
                    @endslot
                    {{ $release['the_pochette'] }}
                @endcomponent
            </div>
            <p class="caption">‘{{ $release['the_title'] }}’ <span>by {{ $release['the_artists'] }} {{ $release['the_date'] }}</span></p>
        </a>
        @endforeach
    </div>

</div>

@endsection

@section('description')
Olive Noire. Eclectic Brussels based artist run label. Tous nos releases, CDs, Albums, Vinyles etc...
@endsection

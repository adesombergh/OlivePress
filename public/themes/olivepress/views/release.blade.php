@extends('layouts.page')

@section('content')

<div class="container release">
    @if($the_pochette)
    <div class="pochette">
        @component('picture')
            @slot('alt')
                Pochette
            @endslot
            {{ $the_pochette }}
        @endcomponent
    </div>
    @endif
    <h2>{{ $the_title }} by {{ $the_artists }}</h2>
    <div class="columns">
        <div class="column is-3">
            <ul>
                <li>INDEX: {{ $the_index }}</li>
                <li>DATE: {{ $the_date }}</li>
                <li>FORMAT(s):<br>{{ $the_formats }}</li>
            </ul>
        </div>
        <div class="column is-9">{{ $the_texte }}</div>
    </div>
    @if($the_tracks)
    <div class="morceaux">
        <ol>
            @foreach($the_tracks as $track)
            <li>{{ $track }}</li>
            @endforeach
        </ol>
    </div>
    @endif
    @if($the_extras)
    <div class="extras">
        <div class="columns is-multiline">
            @foreach($the_extras as $extra)
            <div class="column is-6">
                <article class="external">
                    {!! wp_oembed_get($extra) !!}
                </article>
            </div>
            @endforeach
        </div>
    <div>
    @endif
    @if($the_links)
    <div class="buy">
        <h3>PURCHASE</h3>
        <ul>
            @foreach($the_links as $link)
            <li><a href="{{ $link['url'] }}">{{ $link['title'] }}</a></li>
            @endforeach
        </ul>
    </div>
    @endif
    @if($the_artist_link)
    <div class="big-button">
        <a href="{{ $the_artist_link }}">
            ARTIST PROFILE
        </a>
    </div>
    @endif
</div>

@endsection
@section('description')
Olive Noire. Label de musique indépendant. Release: {{ $the_title }}. Artistes: {{ $the_artists }}. Date: {{ $the_date }}. Formats:  {{ $the_formats }}
@endsection

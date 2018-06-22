@extends('layouts.page')

@section('content')

<div class="container release">
    @if($the_pochette)
    <div class="pochette">
        <img src="{{ $the_pochette }}" alt="Pochette">
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
    {{--  <div class="extras">
        <div class="tile is-ancestor">
            <div class="tile is-vertical">
                <div class="tile">
                    <div class="tile is-parent is-vertical">
                        <article class="tile is-child notification is-primary">
                            <p class="title">Je suis</p>
                            <p class="subtitle">vidéo</p>
                        </article>
                        <article class="tile is-child notification is-warning">
                            <p class="title">Je suis</p>
                            <p class="subtitle">hyperlien</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification is-info">
                            <p class="title">Je suis</p>
                            <p class="subtitle">image</p>
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/640x480.png">
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child notification is-danger">
                        <p class="title">Je suis</p>
                        <p class="subtitle">ton père</p>
                        <div class="content">
                        <!-- Content -->
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>  --}}
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

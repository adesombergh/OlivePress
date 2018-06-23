@extends('layouts.page')

@section('content')
<div class="container artist">
    <div class="description">
        {!! do_shortcode($free_zone1) !!}
        <div class="text-1-footer">
            <div class="black-bar"></div>
        </div>
    </div>
    <div class="columns details">
        <div class="column is-3">
            <div class="square">
                <h2>{{ $the_title }}</h2>
                @if($the_socials)
                <ul class="socials">
                    @foreach ($the_socials as $social)
                    <li><a href="{{ $social['url'] }}">{{ $social['title'] }}</a></li>
                    @endforeach
                </ul>
                @endif
                <div class="vertical-bar"></div>
                <div class="horizontal-bar"></div>
            </div>
            @if($the_shows)
            <h3>upcoming shows</h3>
            <ul class="shows">
                @foreach ($the_shows as $show)
                    @if ($show['too-late'])
                        <li class="too-late">{{ $show['when'] }}: {{ $show['where'] }}</li>
                    @else
                        <li>{{ $show['when'] }}: {{ $show['where'] }}</li>
                    @endif
                @endforeach
            </ul>
            @endif
            <booking-button address="{{ $the_email }}"></booking-button>

        </div>
        <div class="column is-9">
            <div class="text-2">
                {!! $free_zone2 !!}
            </div>
        </div>
    </div>
    <div class="separator">
        <div class="black-bar"></div>
    </div>
    {{-- @if($the_extras)
    <div class="extras">
        <div class="columns">
            @foreach($the_extras as $extra)
            <article class="column">
                {!! wp_oembed_get( $extra ) !!}
            </article>
            @endforeach
        </div>
    <div>
    @endif <div class="extras">
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
    @if($the_releases)
    <div class="releases-artist">
        <h3>RELEASES</h3>
        <div class="releases">
            @foreach($the_releases as $release)
            <a href="{{ $release['the_link'] }}">
                <div class="img"><img src="{{ $release['the_pochette'] }}" alt="alt"></div>
                <p class="caption">{{ $release['the_title'] }}</p>
            </a>
            @endforeach
        </div>
    </div>
    @endif
</div>
@endsection

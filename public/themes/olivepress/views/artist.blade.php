@extends('layouts.page')

@section('content')
<div class="container artist">
    <div class="description">
        {!! $free_zone1 !!}
    </div>
    <div class="columns details">
        <div class="column is-3">
            <div class="square">
                <h2>{{ $the_title }}</h2>
                <ul class="socials">
                    @foreach ($the_socials as $social)
                    <li><a href="{{ $social['url'] }}">{{ $social['title'] }}</a></li>
                    @endforeach
                </ul>
                <div class="vertical-bar"></div>
                <div class="horizontal-bar"></div>
            </div>
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
            <div class="booking">
                <a href="#">BOOKING</a>
                <p>{{ $the_email }}</p>
            </div>
        </div>
        <div class="column is-9">
            <div class="text-2" style="text-align:center;">
                {!! $free_zone2 !!}
            </div>
        </div>
    </div>
    <div class="separator">
        <div class="black-bar"></div>
    </div>
    {{-- <div class="extras">
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
    </div> --}}
    <div class="releases-artist">
        <h3>RELEASES</h3>
        <div class="releases">
            <a href="">
                <div class="img"><img src="{{ asset('images/unnamed.jpg') }}" alt="alt"></div>
                <p class="caption">unnamed</p>
            </a>
            <a href="">
                <div class="img"><img src="{{ asset('images/apex.jpg') }}" alt="alt"></div>
                <p class="caption">‘’APEX’’</p>
            </a>
            <a href="">
                <div class="img"><img src="{{ asset('images/unnamed.jpg') }}" alt="alt"></div>
                <p class="caption">unnamed</p>
            </a>
        </div>
    </div>
</div>
@endsection

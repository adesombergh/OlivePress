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
    {{-- <div class="extras">
        <div class="columns is-multiline">
            <div class="column is-4">
                <div class="iframe-wrapper">
                    <iframe src="https://player.vimeo.com/video/222163862?color=ffffff" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
            <div class="column is-4">
                <div class="iframe-wrapper">
                    <iframe src="https://www.youtube.com/embed/NUbqNxcU8cY?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>
            <div class="column is-4">
                <div class="iframe-wrapper">
                    <figure class="image">
                        <img src="http://localhost:3000/uploads/2018/06/radio_amoon_cover_240416.jpg">
                    </figure>
                </div>
            </div>
            <div class="column is-6">
                <div class="iframe-wrapper">
                    <iframe src="https://www.youtube.com/embed/NUbqNxcU8cY?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>
            <div class="column is-6">
                <div class="iframe-wrapper">
                    <iframe src="https://www.youtube.com/embed/NUbqNxcU8cY?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>
            <div class="column is-12">
                <div class="iframe-wrapper">
                    <iframe src="https://www.youtube.com/embed/NUbqNxcU8cY?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>

        </div>
    <div> --}}
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
    {{-- <div class="extras">
        <div class="tile is-ancestor">
            <div class="tile is-vertical">
                <div class="tile">
                    <div class="tile is-parent is-vertical">
                        <article class="tile is-child">
                            <div class="iframe-wrapper">
                                <iframe src="https://www.youtube.com/embed/NUbqNxcU8cY?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen"></iframe>
                            </div>
                        </article>
                        <article class="tile is-child">
                            <div class="iframe-wrapper">
                                <iframe src="https://www.youtube.com/embed/Z9IODJdi3GA?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen"></iframe>
                            </div>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child">
                            <figure class="image">
                                <img src="http://localhost:3000/uploads/2018/06/radio_amoon_cover_240416.jpg">
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child">
                        <div class="iframe-wrapper">
                            <iframe src="https://www.youtube.com/embed/JrVKSKQKO1c?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div> --}}
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

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
    @if($the_releases)
    <div class="releases-artist">
        <h3>RELEASES</h3>
        <div class="releases">
            @foreach($the_releases as $release)
            <a href="{{ $release['the_link'] }}">
                <div class="img">
                    @component('picture')
                        @slot('alt')
                            {{ $release['the_title'] }}
                        @endslot
                        {{ $release['the_pochette'] }}
                    @endcomponent
                </div>
                <p class="caption">{{ $release['the_title'] }}</p>
            </a>
            @endforeach
        </div>
    </div>
    @endif
</div>
@endsection
@section('description')
Olive Noire. Eclectic Brussels based artist run label. Artiste: {{ $the_title }}.
@endsection

@extends('layouts.page')

@section('content')
<div class="news">
    @if($the_une)
        <div class="item big">
            <a href="{{ $the_une['the_link'] }}">
                <figure>
                    @component('picture')
                        @slot('alt')
                            {{ $the_une['the_title'] }}
                        @endslot
                        {{ $the_une['the_caption'] }}
                    @endcomponent
                    <figcaption>{{ $the_une['the_title'] }}
                        <p>
                                {{ $the_une['the_subtitle'] }}
                    </figcaption>
                </figure>
            </a>
        </div>
    @endif
    @foreach($the_news as $news)
        <div class="item">
            <a href="{{ $news['the_link'] }}">
                <figure>
                    @component('picture')
                        @slot('alt')
                            {{ $news['the_title'] }}
                        @endslot
                        {{ $news['the_caption'] }}
                    @endcomponent
                    <figcaption>{{ $news['the_title'] }}
                        <p>
                                {{ $news['the_subtitle'] }}
                    </figcaption>
                </figure>
            </a>
        </div>
    @endforeach
</div>
@endsection
@section('description')
Olive Noire. Eclectic Brussels based artist run label. Dernières nouvelles!
@endsection

@extends('layouts.page')

@section('content')
<div class="news">
    @if($the_une)
        <div class="item big">
            <a href="{{ $the_une['the_link'] }}">
                <figure>
                    <img src="{{ $the_une['the_caption'] }}" alt="">
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
                    <img src="{{ $news['the_caption'] }}" alt="">
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

@extends('layouts.page')

@section('content')
<div class="container">
    <div class="content">
        <blockquote><strong>Hey Mate!</strong> Looks like you've reached the end</blockquote>
        <figure>
            <img src="{{ stylesheet_url('assets/images/theend.webp') }}" onerror="this.onerror=null;this.src='https://i.giphy.com/pwzOt07ubI0E.gif';" alt="this is the end">
            <figcaption>
            Figure 1: 404 - Page not Found
            </figcaption>
        </figure>
    </div>
</div>
@endsection
@section('description')
Olive Noire. - Eclectic Brussels based artist run label. 404 Page Not Found.
@endsection

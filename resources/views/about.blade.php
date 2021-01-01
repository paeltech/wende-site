@extends('layout.layout')
@section('title', 'Home')
@section('content')
<section class="uk-section" style="padding-top: 40px;">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-1-3@m">
                <div class="uk-card">
                    <img src="img/wende.jpg" alt="Wende Luvinga">
                    <div class="about-caption">
                        <h4 class="uk-text-bold">WENDE LUVINGA</h4>
                        <p class="uk-text-uppercase">Author</p>
                    </div>
                </div>
            </div>

            <div class="uk-width-2-3@m">
                <div class="border-top"></div>
                <h3>About me</h3>
                <div class="about-content">
                    {!! $content->body !!}
                </div>
            </div>
            <hr>
        </div>

    </div>
</section>
@endsection
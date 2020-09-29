@extends('layout.layout')
@section('title', 'Blog')
@section('content')
<section id="blog" class="uk-section" style="padding-top: 40px;">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-2-3@m">
                @foreach ($posts as $post)
                    <div class="uk-margin-large-bottom">
                        {{-- <img src="{{ Voyager::image( $post->image ) }}" alt="{{ $post->title }}" style="max-height: 400px;"> --}}
                        <h1 class="uk-text-bold"><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h1>
                        <div>
                        <p class="excerpt uk-margin-large-right">{{ $post->excerpt }}</p>
                            <a href="/blog/{{ $post->slug }}">Read more...</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="uk-width-1-3@m">
                <div>
                    <h2>Categories</h2>
                    <ul class="uk-list">
                        @foreach ($categories as $category)
                            <li><span class="uk-label">{{ $category->name }}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('layout.layout')
@section('title', '{{ $post->title }}')
@section('content')
<section id="blog" class="uk-section" style="padding-top: 40px;">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-2-3@m">
                <div class="uk-margin-large-bottom">
                    <img src="{{ Voyager::image( $post->image ) }}" alt="">
                <h1 class="uk-text-bold uk-margin-top"><a href="#">{{ $post->title }}</a></h1>
                <p class="uk-text-small uk-text-muted">Posted <b>{{ $post->created_at->diffForHumans()}}</b></p>
                    <div>
                        {!! $post->body !!}
                    </div>
                    <p><a href="/blog"><span uk-icon="arrow-left"></span> Back to all posts</a></p>
                </div>
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
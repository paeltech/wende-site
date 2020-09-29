@extends('layout.layout')
@section('title', 'Home')
@section('content')
<section class="uk-section" style="padding-top: 40px;">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-2-3@m">
                <div uk-grid>
                    <div class="uk-width-1-2@m uk-inline-clip uk-transition-toggle" tabindex="0">
                        <div class="uk-text-lead link border-remove-bottom">
                            <a href="#">BOOKS</a>
                        </div>
                        <div class="uk-background-cover uk-height-large uk-panel uk-padding" style="background-image: url('img/book-cover.jpg');">
                            <div id="caption" class="uk-transition-slide-bottom uk-position-bottom uk-overlay w-white w-text-bg-pink">
                                <h4 class="w-white uk-margin-to" style="margin-top: 2rem;">Hamisi mjusi mlalamishi
                                </h4>
                                <div class="price-buy-cap uk-margin-bottom" style="margin-top: 2rem;">
                                    <span class="uk-text-lead uk-text-middle w-text-bold w-white uk-margin-right">12USD</span>
                                    <span class="">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="#" class="white-a"><img src="img/amazon-buy.png" alt="Buy on Amazon"></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-2@m">
                        <div class="uk-text-lead link border-remove-bottom">
                            <a href="#">BLOG</a>
                        </div>
                        <div class="uk-height-large uk-background-cover uk-panel uk-padding" style="background-image: url('img/print.jpg');">
                            <div class="uk-position-bottom w-text-bg-pink">
                                <h4 class="w-text-bold w-white uk-text-uppercase" style="margin: 2rem 0 1.05rem;">Recent blog post</h4>
                                <p><a href="#" class="w-white">Realization of passion: an interview with Think Africa.</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <div class="uk-section subscribe">
                            <div class="uk-container">
                                <div class="uk-margin-large-left">
                                    <h4 class="w-white">Never miss what is happening</h4>
                                    <form action="">
                                        <input type="text" class="uk-input uk-form-width-large" placeholder="You email">
                                        <button type="button" class="uk-button w-button-primary">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-width-1-3@m">
                <div class="uk-text-lead link border-remove-bottom">
                    <a href="#">ABOUT ME</a>
                </div>
                <div class="uk-card">
                    <img src="img/wende.jpg" alt="Wende Luvinga" class="uk-height-large">
                    <div class="uk-padding about-caption">
                        <h4>Hi & Welcome</h4>
                        <p>I'm Wende Luvinga, I love telling African stories through story telling sessions and books.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, inventore aspernatur unde quo cum .</p>
                        <a href="about" class="uk-animation-toggle uk-margin-top"> More about me <span class="uk-animation-slide-left" uk-icon="icon: arrow-right;"></span></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
@extends('layout.layout')
@section('title', 'Blog')
@section('content')
<section class="uk-section" style="padding-top: 40px;">
    <div class="uk-container">
        <div class="uk-child-width-1-3@m" uk-grid>
            <div class="uk-transition-toggle" tabindex="0">
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
            <div class="uk-transition-toggle" tabindex="0">
                <div class="uk-background-cover uk-height-large uk-panel uk-padding" style="background-image: url('img/hamisi-english-book.jpg');">
                    <div id="caption" class="uk-transition-slide-bottom uk-position-bottom uk-overlay w-white w-text-bg-pink">
                        <h4 class="w-white uk-margin-to" style="margin-top: 2rem;">Hamisi the complaining lizard
                        </h4>
                        <div class="price-buy-cap uk-margin-bottom" style="margin-top: 2rem;">
                            <span class="uk-text-lead uk-text-middle w-white uk-margin-right"><span class="w-text-bold">12</span>USD</span>
                            <span class="">&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#" class="white-a"><img src="img/amazon-buy.png" alt="Buy on Amazon"></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
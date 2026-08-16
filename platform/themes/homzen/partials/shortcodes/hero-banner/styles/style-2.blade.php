@php
    $titleColor = $shortcode->title_color ?: '#000000';
    $descriptionColor = $shortcode->description_color ?: '#000000';
@endphp

<style>
.flat-slider.home-2 {
    position: relative !important;
    background-color: #161e2d !important;
    overflow: hidden !important;
}

.flat-slider.home-2 .left-backdrop-layer {
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background-size: cover;
    background-position: center;
    opacity: 0.18;
    z-index: 1;
    pointer-events: none;
}

.flat-slider.home-2 .img-banner-left {
    z-index: 2;
}

.flat-slider.home-2 .slider-content {
    position: relative;
    z-index: 5;
}

@media (max-width: 991px) {
    .flat-slider.home-2 .left-backdrop-layer {
        display: none;
    }
    .flat-slider.home-2 .img-banner-left {
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        width: 100% !important;
        height: 100% !important;
        z-index: 1 !important;
        animation: none !important;
        opacity: 0.35 !important;
        pointer-events: none !important;
    }
    .flat-slider.home-2 .img-banner-left img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
    }
    .flat-slider.home-2 .slider-content {
        position: relative !important;
        z-index: 2 !important;
        padding: 50px 0 60px !important;
    }
    .flat-slider.home-2 .slider-content .heading .title {
        font-size: clamp(24px, 6.5vw, 36px) !important;
        line-height: 1.25 !important;
        padding-right: 0 !important;
        word-break: break-word !important;
    }
    .flat-slider.home-2 .slider-content .heading .subtitle {
        font-size: 14px !important;
        line-height: 1.55 !important;
        padding-right: 0 !important;
        margin-top: 14px !important;
        word-break: break-word !important;
    }
}
</style>

<section class="flat-slider home-2">
    <div class="container relative">
        <div class="row">
            <div class="col-xl-10">
                <div class="slider-content">
                    <div class="heading">
                        <h1 class="title wow fadeIn animationtext clip" style="color: {{ $titleColor }} !important;" data-wow-delay=".2s" data-wow-duration="2000ms">
                            <span class="d-block">{!! BaseHelper::clean($shortcode->title) !!}</span>
                            <span class="d-block">{!! Theme::partial('shortcodes.hero-banner.partials.animation-text', compact('shortcode')) !!}</span>
                        </h1>
                        @if ($shortcode->description)
                            <p class="subtitle body-1 wow fadeIn" style="color: {{ $descriptionColor }} !important;" data-wow-delay=".8s" data-wow-duration="2000ms">
                                {!! BaseHelper::clean($shortcode->description) !!}
                            </p>
                        @endif
                    </div>
                    {!! Theme::partial('shortcodes.hero-banner.partials.action-button', ['shortcode' => $shortcode, 'class' => 'mb-5']) !!}
                    @if(is_plugin_active('real-estate') && !in_array($shortcode->search_box_enabled, ['no', '0', 'false']))
                        @include(Theme::getThemeNamespace('views.real-estate.partials.search-box'), ['style' => 2, 'noLeftRound' => true])
                    @endif
                </div>
            </div>
        </div>
    </div>

    @if ($shortcode->background_image)
        <div class="left-backdrop-layer" style="background-image: url('{{ RvMedia::getImageUrl($shortcode->background_image) }}');"></div>
        <div class="img-banner-left">
            {{ RvMedia::image($shortcode->background_image, $shortcode->title) }}
        </div>
    @endif

    <div class="img-banner-right">
        <div class="swiper slider-sw-home2">
            <div class="swiper-wrapper">
                @foreach (range(1, 4) as $i)
                    @continue(! $shortcode->{"slider_image_$i"})

                    <div class="swiper-slide">
                        <div class="slider-home2 img-animation wow">
                            {{ RvMedia::image($shortcode->{"slider_image_$i"}, $shortcode->title) }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

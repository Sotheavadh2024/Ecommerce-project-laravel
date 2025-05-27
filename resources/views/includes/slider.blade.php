<section id="slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($slides as $index => $slide)
                        <li data-target="#slider-carousel" data-slide-to="{{ $index }}"
                            class="{{ $index === 0 ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>

                    <div class="carousel-inner">
                        @foreach ($slides as $index => $slide)
                        <div class="item {{ $index === 0 ? 'active' : '' }}">
                            <div class="col-sm-6">
                                <h1>{{ $slide->ssTitle }}</h1>
                                <h2>{{ $slide->ssSubTitle }}</h2>
                                <p>{{ $slide->ssText }}</p>
                                <a href="{{ $slide->ssLink }}" class="btn btn-default get">Get it now</a>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ asset('images/slideshows/' . $slide->ssImage) }}"
                                    class="girl img-responsive" alt="" />
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/slider-->
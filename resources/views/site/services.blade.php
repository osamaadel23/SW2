@extends('site.layouts.app')

@section('content')

    <section class="s-video-v2__bg" style="background: url({{asset('site/img/wedding/hall-3851014_1920.jpg')}}) 50% 0 no-repeat fixed;" data-vidbg-options="loop: true, muted: true, overlay: false">
        <div class="container g-position--overlay g-text-center--xs">
            <div class="g-padding-y-50--xs g-margin-t-100--xs g-margin-b-100--xs g-margin-b-250--md">
                <h1 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white">More Than a Look,</h1>
                <h2 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white">Design is Functional.</h2>
            </div>
        </div>
    </section>
    <!--========== END PROMO BLOCK ==========-->

    <!--========== PAGE CONTENT ==========-->

        <!-- Features -->
            <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
                @foreach($event as $one)
                    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                        <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-60--xs g-margin-b-100--md">
                            <div class="col-sm-3 col-xs-6 g-hor-centered-row__col">
                                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                                    <img class="img-responsive" src="{{asset('site/img/400x500/05.jpg')}}" alt="Image">
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6 g-hor-centered-row__col g-margin-b-60--xs g-margin-b-0--md">
                                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                                    <img class="img-responsive" src="{{asset('site/img/400x550/01.jpg')}}" alt="Image">
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-5 g-hor-centered-row__col">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">{{$one->kind}}</p>
                                <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">{{$one->title}}</h2>
                                <p class="g-font-size-18--sm">{{$one->desc}}</p>
                            </div>
                        </div>
                        @endforeach 
                <div class="g-text-center--xs g-margin-b-100--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Welcome to Megakit</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md">We Create Beautiful Experiences <br> That Drive Successful Wedding.</h2>
                </div>
                <div class="row g-margin-b-60--xs g-margin-b-70--md">
                    <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                        <div class="clearfix">
                            <div class="g-media g-width-30--xs">
                                <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                                    <i class="g-font-size-28--xs g-color--primary ti-desktop"></i>
                                </div>
                            </div>
                            <div class="g-media__body g-padding-x-20--xs">
                                <h3 class="g-font-size-18--xs">Varity of Wedding Halls</h3>
                                <p class="g-margin-b-0--xs">We offer a varity of wedding halls thats suits all persons.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                        <div class="clearfix">
                            <div class="g-media g-width-30--xs">
                                <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                                    <i class="g-font-size-28--xs g-color--primary ti-settings"></i>
                                </div>
                            </div>
                            <div class="g-media__body g-padding-x-20--xs">
                                <h3 class="g-font-size-18--xs">Fully Customizable</h3>
                                <p class="g-margin-b-0--xs">You can customize your hall as you want.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="clearfix">
                            <div class="g-media g-width-30--xs">
                                <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                                    <i class="g-font-size-28--xs g-color--primary ti-ruler-alt-2"></i>
                                </div>
                            </div>
                            <div class="g-media__body g-padding-x-20--xs">
                                <h3 class="g-font-size-18--xs">Choose you areas</h3>
                                <p class="g-margin-b-0--xs">You can choose the hall that close to you.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // end row  -->
                <div class="row">
                    <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                        <div class="clearfix">
                            <div class="g-media g-width-30--xs">
                                <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                                    <i class="g-font-size-28--xs g-color--primary ti-package"></i>
                                </div>
                            </div>
                            <div class="g-media__body g-padding-x-20--xs">
                                <h3 class="g-font-size-18--xs">Endless Possibilities</h3>
                                <p class="g-margin-b-0--xs">You can take this hall for one or more days.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                        <div class="clearfix">
                            <div class="g-media g-width-30--xs">
                                <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
                                    <i class="g-font-size-28--xs g-color--primary ti-star"></i>
                                </div>
                            </div>
                            <div class="g-media__body g-padding-x-20--xs">
                                <h3 class="g-font-size-18--xs">Powerful Performance</h3>
                                <p class="g-margin-b-0--xs">All our halls has a powerful performance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="clearfix">
                            <div class="g-media g-width-30--xs">
                                <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".6s">
                                    <i class="g-font-size-28--xs g-color--primary ti-panel"></i>
                                </div>
                            </div>
                            <div class="g-media__body g-padding-x-20--xs">
                                <h3 class="g-font-size-18--xs"> Edit Songs</h3>
                                <p class="g-margin-b-0--xs">You are able to choose songs you want and edit it too.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // end row  -->
            </div>
            <!-- End Features -->

            <!-- Parallax -->
            <div class="js__parallax-window" style="background: url({{asset('site/img/1920x1080/03.jpg')}}) 50% 0 no-repeat fixed;">
                <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                    <div class="g-margin-b-80--xs">
                        <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">The Fastest Way To Choose Your <br> wedding hall <br> from our large collection</h2>
                    </div>
                </div>
            </div>
            <!-- End Parallax -->

            <!-- Testimonials -->
            <div class="g-hor-divider__dashed--sky-light g-padding-y-80--xs g-padding-y-125--xsm">
                <div class="container g-text-center--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-50--xs">Testimonials</p>
                    <div class="s-swiper js__swiper-testimonials">
                        <!-- Swiper Wrapper -->
                        <div class="swiper-wrapper g-margin-b-50--xs">
                            <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                                <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                    <img class="g-width-70--xs g-height-70--xs g-hor-border-4__solid--white g-box-shadow__dark-lightest-v4 g-radius--circle g-margin-b-30--xs" src="{{asset('site/img/400x400/04.jpg')}}" alt="Image">
                                    <div class="g-margin-b-40--xs">
                                        <p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>" I have purchased many great templates over the years but this product and this company have taken it to the next level. Exceptional customizability. "</i></p>
                                    </div>
                                    <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                    <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Jake Richardson / Google</h4>
                                </div>
                            </div>
                            <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                                <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                    <img class="g-width-70--xs g-height-70--xs g-hor-border-4__solid--white g-box-shadow__dark-lightest-v4 g-radius--circle g-margin-b-30--xs" src="{{asset('site/img/400x400/05.jpg')}}" alt="Image">
                                    <div class="g-margin-b-40--xs">
                                        <p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>" I have purchased many great templates over the years but this product and this company have taken it to the next level. Exceptional customizability. "</i></p>
                                    </div>
                                    <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                    <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Anna Kusaikina / Apple</h4>
                                </div>
                            </div>
                            <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                                <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                    <img class="g-width-70--xs g-height-70--xs g-hor-border-4__solid--white g-box-shadow__dark-lightest-v4 g-radius--circle g-margin-b-30--xs" src="{{asset('site/img/400x400/06.jpg')}}" alt="Image">
                                    <div class="g-margin-b-40--xs">
                                        <p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>" I have purchased many great templates over the years but this product and this company have taken it to the next level. Exceptional customizability. "</i></p>
                                    </div>
                                    <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                    <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Lucas Richardson / Microsoft</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Swipper Wrapper -->

                        <!-- Arrows -->
                        <div class="g-font-size-22--xs g-color--heading js__swiper-fraction"></div>
                        <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--primary-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
                        <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--primary-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
                        <!-- End Arrows -->
                    </div>
                </div>
            </div>
            <!-- End Testimonials -->



@endsection
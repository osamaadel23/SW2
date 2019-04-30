@extends('site.layouts.app')

@section('content')

<!--========== PROMO BLOCK ==========-->
        <div class="g-fullheight--md js__parallax-window" style="background: url({{asset('site/img/wedding/hall-3851014_1920.jpg')}}) 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-ver-center--md g-padding-y-150--xs g-padding-y-0--md">
                <div class="g-margin-b-60--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Welcome to Megakit</p>
                    <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Creative Design</h1>
                    <p class="g-font-size-18--xs g-font-size-26--md g-color--white-opacity g-margin-b-0--xs">We are a creative studio focusing on culture, luxury, editorial &amp; art. Somewhere between sophistication and simplicity.</p>
                </div>
                <span class="g-display-block--xs g-display-inline-block--sm g-padding-x-5--xs g-margin-b-10--xs g-margin-b-0--sm">
                    <a href="services.html" class="text-uppercase s-btn s-btn-icon--md s-btn--primary-bg g-radius--50 g-padding-x-45--xs">Learn More</a>
                </span>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
       <br/>
<br/><br/><br/><br/><br/><br/><br/>


    
        <!-- Team -->
        <div class="row g-row-col--0">
            <div class="col-md-3 col-xs-6 g-full-width--xs">
                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                    <!-- Team -->
                    <div class="s-team-v1">
                        <img class="img-responsive g-width-100-percent--xs"  src="{{asset('adminStyle/img/speakers/'.$speaker[3]->image)}}"  alt="Image">
                        <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                            <h2 class="g-font-size-18--xs g-margin-b-5--xs">{{$speaker[3]->name}}</h2>
                            <span class="g-font-size-15--xs g-color--text"><i>{{$speaker[3]->description}}</i></span>
                        </div>
                    </div>
                    <!-- End Team -->
                </div>
            </div>
            <div class="col-md-3 col-xs-6 g-full-width--xs">
                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                    <!-- Team -->
                    <div class="s-team-v1">
                        <img class="img-responsive g-width-100-percent--xs"  src="{{asset('adminStyle/img/speakers/'.$speaker[2]->image)}}" " alt="Image">
                        <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                            <h3 class="g-font-size-18--xs g-margin-b-5--xs">{{$speaker[2]->name}}</h3>
                            <span class="g-font-size-15--xs g-color--text"><i>{{$speaker[2]->description}}</i></span>
                        </div>
                    </div>
                    <!-- End Team -->
                </div>
            </div>
            <div class="col-md-3 col-xs-6 g-full-width--xs">
                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                    <!-- Team -->
                    <div class="s-team-v1">
                        <img class="img-responsive g-width-100-percent--xs"  src="{{asset('adminStyle/img/speakers/'.$speaker[1]->image)}}"  alt="Image">
                        <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                            <h4 class="g-font-size-18--xs g-margin-b-5--xs">{{$speaker[1]->name}}</h4>
                            <span class="g-font-size-15--xs g-color--text"><i>{{$speaker[1]->description}}</i></span>
                        </div>
                    </div>
                    <!-- End Team -->
                </div>
            </div>
            <div class="col-md-3 col-xs-6 g-full-width--xs">
                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".4s">
                    <!-- Team -->
                    <div class="s-team-v1">
                        <img class="img-responsive g-width-100-percent--xs" src="{{asset('adminStyle/img/speakers/'.$speaker[0]->image)}}" alt="Image">
                        <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                            <h4 class="g-font-size-18--xs g-margin-b-5--xs">{{$speaker[0]->name}}</h4>
                            <span class="g-font-size-15--xs g-color--text"><i>{{$speaker[0]->description}}</i></span>
                        </div>
                    </div>
                    <!-- End Team -->
                </div>
            </div>
        </div>
        <!-- End Team -->


       
        <!-- News -->
        <div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Blog</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-letter-spacing--1">Latest News</h2>
                </div>
                <div class="row">
                    <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
                            <img class="img-responsive" src="{{asset('site/img/970x970/01.jpg')}}" alt="Image">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
                                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Create Something Great.</a></h3>
                                <p>The time has come to bring those ideas and plans to life.</p>
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                    <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
                            <img class="img-responsive" src="{{asset('site/img/970x970/02.jpg')}}" alt="Image">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
                                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Jacks of All. Experts in All.</a></h3>
                                <p>The time has come to bring those ideas and plans to life.</p>
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                    <div class="col-sm-4">
                        <!-- News -->
                        <article>
                            <img class="img-responsive" src="{{asset('site/img/970x970/03.jpg')}}" alt="Image">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
                                <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Finding your Perfect Place.</a></h3>
                                <p>The time has come to bring those ideas and plans to life.</p>
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End News -->

        <!-- Subscribe -->
        <div class="g-bg-color--dark-light">
            <div class="g-container--sm g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-60--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Subscribe</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-letter-spacing--1 g-color--white">Join Over 1000+ People</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <form class="input-group">
                            <input type="email" class="form-control s-form-v1__input g-radius--left-50" name="email" placeholder="Enter your email">
                            <span class="input-group-btn">
                                <button type="submit" class="s-btn s-btn-icon--md s-btn-icon--white-brd s-btn--white-brd g-radius--right-50"><i class="ti-arrow-right"></i></button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe -->
        <!--========== END PAGE CONTENT ==========-->


@endsection
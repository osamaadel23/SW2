@extends('site.layouts.app')

@section('content')

 <!--========== PROMO BLOCK ==========-->
        <div class="g-bg-position--center js__parallax-window" style="background: url({{asset('site/img/1920x1080/09.jpg')}}) 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">30 years experience</p>
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Creative Team</h1>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Speakers -->
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row g-overflow--hidden">
                <div class="col-xs-6 g-full-width--xs g-margin-b-30--xs g-margin-b-0--lg">
                    <!-- Speaker -->
                    <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                        <img class="img-responsive g-width-100-percent--xs" src="{{asset('site/img/400x400/02.jpg')}}" alt="Image">
                        <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                            <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                                <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">Anna Kusaikina</h4>
                            </div>
                            <p class="g-font-weight--700">Founder</p>
                            <p>Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.</p>
                        </div>
                    </div>
                    <!-- End Speaker -->
                </div>
                <div class="col-xs-6 g-full-width--xs">
                    <!-- Speaker -->
                    <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                        <img class="img-responsive g-width-100-percent--xs" src="{{asset('site/img/400x400/01.jpg')}}" alt="Image">
                        <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                            <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                                <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">Lucas Richardson</h4>
                            </div>
                            <p class="g-font-weight--700">CEO</p>
                            <p>Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.</p>
                        </div>
                    </div>
                    <!-- End Speaker -->
                </div>
            </div>
        </div>
        <!-- End Speakers -->

        <!-- Team -->
        <div class="row g-row-col--0">
            <div class="col-md-3 col-xs-6 g-full-width--xs">
                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                    <!-- Team -->
                    <div class="s-team-v1">
                        <img class="img-responsive g-width-100-percent--xs" src="{{asset('site/img/400x400/03.jpg')}}" alt="Image">
                        <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                            <h2 class="g-font-size-18--xs g-margin-b-5--xs">Jack Daniels</h2>
                            <span class="g-font-size-15--xs g-color--text"><i>Cardiology</i></span>
                        </div>
                    </div>
                    <!-- End Team -->
                </div>
            </div>
            <div class="col-md-3 col-xs-6 g-full-width--xs">
                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                    <!-- Team -->
                    <div class="s-team-v1">
                        <img class="img-responsive g-width-100-percent--xs" src="{{asset('site/img/400x400/04.jpg')}}" alt="Image">
                        <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                            <h3 class="g-font-size-18--xs g-margin-b-5--xs">Anna Kusaikina</h3>
                            <span class="g-font-size-15--xs g-color--text"><i>Pulmonology</i></span>
                        </div>
                    </div>
                    <!-- End Team -->
                </div>
            </div>
            <div class="col-md-3 col-xs-6 g-full-width--xs">
                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                    <!-- Team -->
                    <div class="s-team-v1">
                        <img class="img-responsive g-width-100-percent--xs" src="{{asset('site/img/400x400/05.jpg')}}" alt="Image">
                        <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                            <h4 class="g-font-size-18--xs g-margin-b-5--xs">Lucas Richardson</h4>
                            <span class="g-font-size-15--xs g-color--text"><i>Dental</i></span>
                        </div>
                    </div>
                    <!-- End Team -->
                </div>
            </div>
            <div class="col-md-3 col-xs-6 g-full-width--xs">
                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".4s">
                    <!-- Team -->
                    <div class="s-team-v1">
                        <img class="img-responsive g-width-100-percent--xs" src="{{asset('site/img/400x400/06.jpg')}}" alt="Image">
                        <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                            <h4 class="g-font-size-18--xs g-margin-b-5--xs">Kira Doe</h4>
                            <span class="g-font-size-15--xs g-color--text"><i>Gynecology</i></span>
                        </div>
                    </div>
                    <!-- End Team -->
                </div>
            </div>
        </div>
        <!-- End Team -->



@endsection

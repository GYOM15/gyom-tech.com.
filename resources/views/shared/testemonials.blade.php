@php
    $name =" <span class='fw-bold'> GTS</span>";
    $pic = "<img src='/storage/images/testimonials/pic.png' alt=''>";
    $stars = "<ul class='testimonial-rating'>
                <li><img src='/storage/images/testimonials/Star1.png' alt=''></li>
                <li><img src='/storage/images/testimonials/Star1.png' alt=''></li>
                <li><img src='/storage/images/testimonials/Star1.png' alt=''></li>
                <li><img src='/storage/images/testimonials/Star1.png' alt=''></li>
                <li><img src='/storage/images/testimonials/Star1.png' alt=''></li>
            </ul>"
@endphp

<!-- Testimonials -->
<section class="content-inner-1 title" data-aos="fade-up" data-aos-duration="1000" style="background-image: url(/storage/images/background/bg14.png); background-size: cover;">
    <div class="container">
        <div class="section-head style-1 text-center">
            <h6 class="sub-title text-center text-primary ">{{ __('home.testimonials') }}</h6>
            <h2 class="title text-center ">{{ __('home.what_people_say') }}</h2>
        </div>
        <div class="testimonials-carousel3 owl-carousel owl-theme owl-theme dots-style-2 owl-btn-5 owl-btn-white arrow-lg-none">
            <div class="item">
                <div class="testimonial-5 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">
                    <div class="testimonial-detail m-b20">
                        <div class="testimonial-pic">
                            {!! $pic !!}
                        </div>
                        <div class="clearfix">
                            <strong class="testimonial-name">{{ __('testimonials.testimonial1_name') }}</strong>
                            <span class="testimonial-position">{{ __('testimonials.testimonial1_position') }}</span>
                            {!! $stars !!}
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>{{ __('testimonials.testimonial1_text1') }}{!! $name !!}.</p>
                        <p>{{ __('testimonials.testimonial1_text2') }}</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-5 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="testimonial-detail m-b20">
                        <div class="testimonial-pic">
                            {!! $pic !!}
                        </div>
                        <div class="clearfix">
                            <strong class="testimonial-name">{{ __('testimonials.testimonial2_name') }}</strong>
                            <span class="testimonial-position">{{ __('testimonials.testimonial2_position') }}</span>
                            {!! $stars !!}
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>{{ __('testimonials.testimonial2_text1') }}</p>
                        <p>{{ __('testimonials.testimonial2_text2') }}</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-5 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="testimonial-detail m-b20">
                        <div class="testimonial-pic">
                            {!! $pic !!}
                        </div>
                        <div class="clearfix">
                            <strong class="testimonial-name">{{ __('testimonials.testimonial3_name') }}</strong>
                            <span class="testimonial-position">{{ __('testimonials.testimonial3_position') }}</span>
                            {!! $stars !!}
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>{{ __('testimonials.testimonial3_text1') }}</p>
                        <p>{{ __('testimonials.testimonial3_text2') }}</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-5 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="testimonial-detail m-b20">
                        <div class="testimonial-pic">
                            {!! $pic !!}
                        </div>
                        <div class="clearfix">
                            <strong class="testimonial-name">{{ __('testimonials.testimonial4_name') }}</strong>
                            <span class="testimonial-position">{{ __('testimonials.testimonial4_position') }}</span>
                            {!! $stars !!}
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>{{ __('testimonials.testimonial4_text1') }}{!! $name !!}!</p>
                        <p>{{ __('testimonials.testimonial4_text2') }}</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-5 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                    <div class="testimonial-detail m-b20">
                        <div class="testimonial-pic">
                            {!! $pic !!}
                        </div>
                        <div class="clearfix">
                            <strong class="testimonial-name">{{ __('testimonials.testimonial5_name') }}</strong>
                            <span class="testimonial-position">{{ __('testimonials.testimonial5_position') }}</span>
                            {!! $stars !!}
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>{{ __('testimonials.testimonial5_text1') }}</p>
                        <p>{{ __('testimonials.testimonial5_text2') }}</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-5 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                    <div class="testimonial-detail m-b20">
                        <div class="testimonial-pic">
                            {!! $pic !!}
                        </div>
                        <div class="clearfix">
                            <strong class="testimonial-name">{{ __('testimonials.testimonial6_name') }}</strong>
                            <span class="testimonial-position">{{ __('testimonials.testimonial6_position') }}</span>
                            {!! $stars !!}
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>{{ __('testimonials.testimonial6_text1') }}{!! $name !!}!</p>
                        <p>{{ __('testimonials.testimonial6_text2') }}</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
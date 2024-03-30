@extends('frontend.layouts.master')
@section('content')
  <!-- breadcrumb-area -->
  <section class="breadcrumb-area breadcrumb-bg" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title" data-aos="fade-down" data-aos-delay="0">Our Event</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb"  data-aos="fade-up" data-aos-delay="0">
                            <li class="breadcrumb-item"><a href="index.html" >Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Event</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-shape-wrap">
        <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png')}}" alt="IAK event">
        <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png')}}" alt="IAK event">
    </div>
</section>
<!-- breadcrumb-area-end -->
 <!-- event-area -->
 <section class="services-area-three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="section-title-two mb-50 tg-heading-subheading animation-style2">
                    <span class="sub-title tg-element-title">Gain a Success With Us!</span>
                    <h2 class="title tg-element-title">We have already served a good number of members from a wide range of sectors. Some of sectors are listed below</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                <div class="services-item-three">
                    <div class="services-thumb-three membership">
                        <a href="services-details.html"><img src="{{ asset('frontend/assets/images/newsletter events/event2.jpg')}}" class="img-fluid" alt="Japan Bangladesh"></a>
                    </div>
                    <div class="services-content-three">
                        <h4 class="title">The cricket team of Islam Aftab Kamrul & Co., Chartered Accountants</h4>
                        <p>The cricket team of Islam Aftab Kamrul & Co., Chartered Accountants showed a great performance in winning our first cricket match of BCACP Cricket Tournament-2023. Hope for the best for the next match!!
                            Man of the match is Ashraful Alam Hasan for his fantastic knock of 85* runs!!!!!</p>
                        <div class="overlay-icon">
                            <i class="flaticon-healthcare"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                <div class="services-item-three">
                    <div class="services-thumb-three membership">
                        <a href="services-details.html"><img src="{{ asset('frontend/assets/images/newsletter events/event.jpg')}}" class="img-fluid" alt="Japan Bangladesh"></a>
                    </div>
                    <div class="services-content-three">
                        <h4 class="title"> Celebrated IAK Reunion</h4>
                        <p>A day to remember for a long time....celebrated IAK Reunion.... Arranged by Islam Aftab Kamrul & co.
                            Chartered Accountants,  Glorified by the presence of honourable Aftab ul Islam sir, and some tremendous Cultural performances by the team IAK....</p>
                        <div class="overlay-icon">
                            <i class="flaticon-healthcare"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="services-shape-four">
        <img src="{{ asset('frontend/assets/img/services/h4_services_shape.png')}}" alt="IAK event" data-aos="fade-left" data-aos-delay="200">
    </div>
</section>
<!-- event-area-end -->
@endsection

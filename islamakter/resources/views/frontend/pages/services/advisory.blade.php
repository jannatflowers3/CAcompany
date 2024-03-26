@extends('frontend.layouts.master')
@section('content')
   <!-- breadcrumb-area -->
   <section class="breadcrumb-area breadcrumb-bg" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title" data-aos="fade-down" data-aos-delay="0">Advisory</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb"  data-aos="fade-up" data-aos-delay="0">
                            <li class="breadcrumb-item"><a href="index.html" >Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Advisory</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-shape-wrap">
        <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png')}}" alt="IAK Advisory">
        <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png')}}" alt="IAK Advisory">
    </div>
</section>
<!-- breadcrumb-area-end -->
<!-- advisory-area -->
<section class="about-area-eleven">
<div class="container">
<div class="row align-items-center justify-content-center">
    <div class="col-lg-6 col-md-9 order-0 order-lg-2">
        <div class="about-img-wrap-eleven">
            <img src="{{ asset('frontend/assets/images/services/tax-advisory-services.jpg')}}" alt="Advisory">
            <img src="{{ asset('frontend/assets/img/images/inner_about_shape01.png')}}" alt="IAK Advisory" class="shape-one">
            <img src="{{ asset('frontend/assets/img/images/inner_about_shape02.png')}}" alt="IAK Advisory" class="shape-two">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="about-content-eleven">
            <div class="section-title mb-30">
                <span class="sub-title">Tax Advisory</span>
            </div>
            <p>Tax advisory services encompass a range of offerings aimed at assisting individuals and businesses in navigating complex tax regulations and optimizing their tax strategies.  </p>
            <div class="about-list-two">
                <ul class="list-wrap">
                    <li><i class="fas fa-arrow-right"></i>Financial Consulting Services.  </li>
                    <li><i class="fas fa-arrow-right"></i>Management Consulting Services. </li>
                    <li><i class="fas fa-arrow-right"></i>Business Advisory Services.</li>
                    <li><i class="fas fa-arrow-right"></i>Corporate Secretarial Services.  </li>
                    <li><i class="fas fa-arrow-right"></i>Assets Valuation.  </li>
                    <li><i class="fas fa-arrow-right"></i>Business Valuation.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- 2nd row -->
<div class="row align-items-center justify-content-center">
    <div class=" col-xl-10 col-lg-10 mt-5 ">
        <div class="about-content-eleven mt-5">
            <div class="section-title mb-30 text-center">
                <span class="sub-title">Types of tax advisory services include:</span>
            </div>
            <div class="about-list-two">
                <ul class="list-wrap">
                    <li><i class="fas fa-arrow-right"></i>Guidance on federal, state, and individual income tax returns . </li>
                    <li><i class="fas fa-arrow-right"></i>Advice on federal and state corporate tax returns. </li>
                    <li><i class="fas fa-arrow-right"></i>
                        Understanding the tax consequences of acquiring or divesting business assets . </li>
                    <li><i class="fas fa-arrow-right"></i>
                        Restructuring or reorganizing corporations and partnerships.</li>
                    <li><i class="fas fa-arrow-right"></i>Estate planning, including preparation of wills and trusts </li>
                    <li><i class="fas fa-arrow-right"></i>Estate planning, including preparation of wills and trusts .</li>

                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!-- advisoryarea-end -->
@endsection

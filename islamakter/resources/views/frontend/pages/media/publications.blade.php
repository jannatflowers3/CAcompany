@extends('frontend.layouts.master')
@section('content')
 <!-- breadcrumb-area -->
 <section class="breadcrumb-area breadcrumb-bg" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title" data-aos="fade-down" data-aos-delay="0">Publications</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb"  data-aos="fade-up" data-aos-delay="0">
                            <li class="breadcrumb-item"><a href="index.html" >Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Publications</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-shape-wrap">
        <img src="assets/img/images/breadcrumb_shape01.png" alt="IAK Publications">
        <img src="assets/img/images/breadcrumb_shape02.png" alt="IAK Publications">
    </div>
</section>
<!-- breadcrumb-area-end -->

 <!-- publications finalcial-area -->
 <section class="about-area-six ">
    <div class="container">
        <div class="row align-items-center justify-content-center">
         <div class="col-xl-10 col-lg-10 col-md-10  mt-5">
                <div class="section-title section-title-three text-center mb-60 tg-heading-subheading animation-style1">
                    <span class="sub-title tg-element-title">DOWNLOADS Legal Documents</span>
                    <h2 class="title tg-element-title">Download your desired documents from here...
                    </h2>

                </div>
         </div>
            <div class="col-lg-10 col-md-10 mb-5">
                <div class="services-widget">
                    <h4 class="sw-title"> Download Company Documents</h4>
                    <div class="services-brochure-wrap">

                        <a href="{{ asset('frontend/assetsassets/images/2. IAK Company Profile1.pdf')}}" target="_blank" download class="download-btn"><i class="far fa-file-pdf"></i>IAK Company Profile1 Download</a>
                        <a href="{{ asset('frontend/assetsassets/images/New-VAT-SRO-No.-132-Law-2020-127-Mushak.pdf')}}"  target="_blank" download class="download-btn"><i class="far fa-file-pdf"></i>New-VAT-SRO-No.-132-Law-2020-127-Mushak</a>
                        <a href="{{ asset('frontend/assetsassets/images/Finance_Act_2020.pdf')}}" target="_blank" download class="download-btn"><i class="far fa-file-alt"></i>Finance_Act_2020</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- publications-area-end -->
@endsection

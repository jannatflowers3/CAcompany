@extends('frontend.layouts.master')
@section('content')
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Contact Us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-shape-wrap">
                    <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png')}}"  alt="">
                    <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png')}}"  alt="">
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <section class="mt-30">
                <div class="container">
                    <div class="row ">
                        <div class="col-xl-8 col-lg-8 col-md-6">
                            <div class="services-widget">
                                <h4 class="sw-title">Feel free to contact us</h4>
                                <div class="services-widget-form">
                                    <form action="#">
                                        <div class="form-grp">
                                            <input type="text" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-grp">
                                            <input type="email" placeholder="E-mail Address" required>
                                        </div>
                                        <div class="form-grp">
                                            <input type="number" placeholder="Phone">
                                        </div>
                                        <div class="form-grp">
                                            <p>Subject Type</p>
                                            <select name="choice">

                                                <option value="second" selected>Audit & Assurance</option>
                                                <option value="third">Taxation & VAT</option>
                                                <option value="third">Secretarial, licensing & compliance</option>
                                                <option value="third">Business Services</option>
                                                <option value="third">Human Resources & others Services</option>
                                                <option value="third">Training & Development</option>
                                              </select>

                                        </div>
                                        <div class="form-grp">
                                            <textarea name="message" required placeholder="Type Your Message"></textarea>
                                        </div>
                                        <button type="submit" class="submit-btn">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 mt-30">
                            <div class="services-widget services-sidebar-contact">
                                <h4 class="title">If You Need Any Help Contact With Us</h4>
                                <a href="tel:0123456789"><i class="flaticon-phone-call"></i> +88 01790 700 404</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area -->
            <section class="inner-contact-area pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="inner-contact-img">
                                <img src="{{ asset('frontend/assets/images/contactimg.jpg')}}"  alt="IAK Contact">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inner-contact-info">
                                <h2 class="title">Our Office Address</h2>
                                <div class="contact-info-item">
                                    <h5 class="title-two">Head Office</h5>
                                    <ul class="list-wrap">
                                        <li>Z-Tower” (5th Floor), Plot # 4, Road # 132, 54, Gulshan Avenue, <br>  Gulshan- 1, Dhaka- 1212, Bangladesh</li>
                                        <li>+88 02 9027738</li>
                                        <li>info@audit.com.bd</li>
                                    </ul>
                                </div>
                                <div class="contact-info-item">
                                    <h5 class="title-two">Branch Office </h5>
                                    <ul class="list-wrap">
                                        <li>BSCIC Electronics Complex
                                            (Level-5), Plot No. 1/1
                                            Road-3, Avenue-4, Section-7
                                            Mirpur-11, Dhaka-1216</li>
                                            <li>Phone : +88 02-9027738</li>
                                            <li>+88 01790-700404</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->
            <!-- contact-map -->
            <div class="contact-map d-xl-block d-sm-block">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.052333356029!2d90.41470397410147!3d23.781150687597425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77d54bfabc5%3A0x1d61d178e5fb413!2sZ%20Tower!5e0!3m2!1sen!2sbd!4v1710493016718!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- contact-map-end -->
@endsection

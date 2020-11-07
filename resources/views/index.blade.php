@extends("layouts.app")

@section("content")
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
            <h1 class="mt-4">The perfect tool</h1>
            <h2>For agile teams</h2>
            <img src="{{ asset('img/hero-img.png') }}" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
                        <div class="content">
                            <h3>Have a record of everyone</h3>
                            <p>
                                A better understanding starts with knowing how we feel
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Easy to express</h4>
                                    <p>Use a word or an emoji, anything that suits your mood!</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Build stronger teams</h4>
                                    <p>Based on what is, usually, hard to get: feelings</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <!-- <i class="bx bx-images"></i> -->
                                    <h4>Work together</h4>
                                    <p>Achieve more</p>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

    </main><!-- End #main -->
@endsection

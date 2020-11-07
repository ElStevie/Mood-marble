@extends('layouts.app')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="/">Home</a></li>
                    @yield("currentPage")
                </ol>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                @yield("innerContent")
            </div>
        </section>

    </main><!-- End #main -->

@extends("layouts.innerPage")

@section("currentPage")
    <li>Sign up</li>
@endsection

@section("innerContent")
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sign up</h2>
          <p>And start using our amazing tool!</p>
        </div>

          @include('partials.form-errors')

        <div class="row mt-4">

          <div class="col-lg mt-4 mt-md-0">
              <form action="{{ route('users.store') }}" method="POST" role="form" class="php-email-form">
                  @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="{{ old('name') }}"/>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}"/>
                </div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password"/>
              </div>
              <div class="text-center"><button type="submit">Join</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
@endsection

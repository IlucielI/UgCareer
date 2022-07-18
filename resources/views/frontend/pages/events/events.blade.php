@extends('frontend.template.templateout')
@section('title', 'Events')
@section('css')
    <link href="{{ asset('assets') }}/css/login.css" rel="stylesheet">
@endsection
@section('profileorlogin')
    @guest
        <!-- <li class="nav-item">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </li> -->
        <li class="nav-item">
            <button type="button" class="btn btn-primary rounded-pill" id="myBtn">
                Login
            </button>
        </li>
        @if (Route::has('register'))
            <!-- <li class="nav-item">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </li> -->
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
@endsection
@section('content')

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">
                <div class=" justify-content-between align-items-center">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Events</li>
                    </ol>
                </div>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Events Section ======= -->
        <section id="events" class=" events">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>EVENTS</h2>
                </div>

                <div class="row">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="">Announcements</h3>
                        <a href="{{ url('/subevent') }}" class="btn-more">See All</a>
                    </div><br><br>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('assets') }}/img/events/announcement.webp" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Announcement 1</h4>
                                <span>17 Juni 2022</span><br>
                                <a href="{{ url('/eventdetails') }}" class="btn-learn-more">Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('assets') }}/img/events/announcement.webp" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Announcement 2</h4>
                                <span>17 Juni 2022</span><br>
                                <a href="{{ url('/eventdetails') }}" class="btn-learn-more">Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('assets') }}/img/events/announcement.webp" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Announcement 3</h4>
                                <span>17 Juni 2022</span><br>
                                <a href="{{ url('/eventdetails') }}" class="btn-learn-more">Details</a>
                            </div>
                        </div>
                    </div>
                </div><br><br><br>


                <div class="row">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="">Bootcamp</h3>
                        <a href="{{ url('/subevent') }}" class="btn-more">See All</a>
                    </div><br><br>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <span class="badge bg-warning text-dark">Free</span>
                                <img src="{{ asset('assets') }}/img/events/bootcamp.jpg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Bootcamp 1</h4>
                                <span>17 Juni 2022</span><br>
                                <a href="{{ url('/eventdetails') }}" class="btn-learn-more">Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('assets') }}/img/events/bootcamp.jpg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Bootcamp 2</h4>
                                <span>17 Juni 2022</span><br>
                                <a href="{{ url('/eventdetails') }}" class="btn-learn-more">Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('assets') }}/img/events/bootcamp.jpg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Bootcamp 3</h4>
                                <span>17 Juni 2022</span><br>
                                <a href="{{ url('/eventdetails') }}" class="btn-learn-more">Details</a>
                            </div>
                        </div>
                    </div>
                </div><br><br><br>


                <div class="row">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="">Workshop</h3>
                        <a href="{{ url('/subevent') }}" class="btn-more">See All</a>
                    </div><br><br>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('assets') }}/img/events/workshop.jpg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Workshop 1</h4>
                                <span>17 Juni 2022</span><br>
                                <a href="{{ url('/eventdetails') }}" class="btn-learn-more">Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('assets') }}/img/events/workshop.jpg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Workshop 2</h4>
                                <span>17 Juni 2022</span><br>
                                <a href="{{ url('/eventdetails') }}" class="btn-learn-more">Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('assets') }}/img/events/workshop.jpg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Workshop 3</h4>
                                <span>17 Juni 2022</span><br>
                                <a href="{{ url('/eventdetails') }}" class="btn-learn-more">Details</a>
                            </div>
                        </div>
                    </div>
                </div><br><br><br>


                <div class="row">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="">Jobfair</h3>
                        <a href="{{ url('/subevent') }}" class="btn-more">See All</a>
                    </div><br><br>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('assets') }}/img/events/jobfair.webp" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Jobfair Online 1</h4>
                                <span>17 Juni 2022</span><br>
                                <a href="{{ url('/eventdetails') }}" class="btn-learn-more">Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('assets') }}/img/events/jobfair.webp" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Jobfair Online 2</h4>
                                <span>17 Juni 2022</span><br>
                                <a href="{{ url('/eventdetails') }}" class="btn-learn-more">Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('assets') }}/img/events/jobfair.webp" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Jobfair Online 3</h4>
                                <span>17 Juni 2022</span><br>
                                <a href="{{ url('/eventdetails') }}" class="btn-learn-more">Details</a>
                            </div>
                        </div>
                    </div>
                </div><br><br><br>
            </div>
        </section><!-- End Events Section -->
        </div>

    @section('scripts')
        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            const loginText = document.querySelector(".title-text .login");
            const loginForm = document.querySelector("form.login");
            const loginBtn = document.querySelector("label.login");
            const signupBtn = document.querySelector("label.signup");
            const signupLink = document.querySelector("form .signup-link a");
            signupBtn.onclick = (() => {
                loginForm.style.marginLeft = "-50%";
                loginText.style.marginLeft = "-50%";
            });
            loginBtn.onclick = (() => {
                loginForm.style.marginLeft = "0%";
                loginText.style.marginLeft = "0%";
            });
            signupLink.onclick = (() => {
                signupBtn.click();
                return false;
            });
        </script>
    @endsection
@endsection

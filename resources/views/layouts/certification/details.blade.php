@extends('frontend.template.templateout')

@section('title', 'Certification')

@section('css')
    <link href="{{ asset('assets') }}/css/login.css" rel="stylesheet">
@endsection

@section('profileorlogin')
    @guest
        {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li> --}}
        <li class="nav-item">
            <button type="button" class="btn btn-primary rounded-pill" id="myBtn">
                Login
            </button>
        </li>
        @if (Route::has('register'))
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li> --}}
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
    <div class="container" data-aos="fade-up">
        <main id="main" style="margin-top:100px;">
            <a href="/certification" class="text-decoration-none backPage"><i class="bi bi-arrow-left-circle"></i> kembali
                ke
                Akreditasi</a>

            <div class="row mt-4 mb-4">
                <h4 class="fw-bold">Surat Akreditasi S1 - Jurusan Sistem Informasi</h4>
            </div>

            <div class="row">
                {{-- Preview Latest Acreditation Certificate --}}
                <div class="col-md-8">
                    <div class="card mb-5">
                        <div class="iframe-container">
                            <iframe
                                src="{{ asset('assets') }}/data_file/sertifikat_akreditasi_s1_sistem_informasi_2020-2025.pdf"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Terbaru <br>
                            </h4>
                            {{-- <div class="d-flex w-100">
                            <p class="fw-bold card-title">
                                Surat Keterangan Akreditasi S1 - Sistem Informasi 2020 - 2025
                                <span><a href="#" class="btn text-white"
                                        style="background-color: #925FBA;">Download</a></span>
                            </p>
                        </div> --}}
                            <h5 class="fw-bold card-title">
                                Surat Keterangan Akreditasi S1 - Sistem Informasi 2020 - 2025
                            </h5>
                            <div class="d-flex w-100 justify-content-end">
                                <a href="#" class="btn text-white" style="background-color: #925FBA;">Download</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- oldest Acreditation Certification --}}
                <div class="col-md-4">
                    <div class="card border-2">
                        <div class="card-body">
                            <p class="card-title fw-bold fs-5">Arsip</p>
                            <ul class=fikti>
                                <li><a href="#" class="text-decoration-none fw-bold">Surat Keterangan Akreditasi
                                        S1 - Sistem Informasi 2015 - 2020</a></li>
                                <li><a href="#" class="text-decoration-none fw-bold">Surat Keterangan Akreditasi
                                        S1 - Sistem Informasi 2010 - 2015</a></li>
                                <li><a href="#" class="text-decoration-none fw-bold">Surat Keterangan Akreditasi
                                        S1 - Sistem Informasi 2005 - 2010</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>


    </div>
@endsection

<div id="myModal" class="modalcustom">

    <!-- Modal content -->
    <div class="modal-contentcustom">
        <span class="close">&times;</span>
        <div class="wrapper">
            <div class="title-text">
                <div class="title login">Login Form</div>
                <div class="title signup">Signup Form</div>
            </div>
            <div class="form-container">
                <div class="slide-controls">
                    <input type="radio" name="slide" id="login" checked>
                    <input type="radio" name="slide" id="signup">
                    <label for="login" class="slide login">Login</label>
                    <label for="signup" class="slide signup">Signup</label>
                    <div class="slider-tab"></div>
                </div>
                <div class="form-inner">
                    <form method="POST" action="{{ route('login') }}" class="login">
                        @csrf
                        <div class="field">
                            <input id="email" placeholder="Masukkan Email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="field">
                            <input id="password" placeholder="Masukkan Password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="pass-link">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Login">
                        </div>
                        <div class="signup-link">Not a member? <a href="">Signup now</a></div>
                    </form>
                    <form method="POST" action="{{ route('register') }}" class="signup">
                        @csrf
                        <div class="field">
                            <input id="name" type="text" placeholder="Masukkan Nama Lengkap"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="field">
                            <input id="email" type="email" placeholder="Masukkan Email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="field">
                            <input id="password" type="password" placeholder="Password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="field">
                            <input id="password-confirm" type="password" placeholder="Konfirmasi Ulang Password"
                                class="form-control" name="password_confirmation" required
                                autocomplete="new-password">
                        </div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Signup">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

        // resize iframe
    </script>
@endsection

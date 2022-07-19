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


    <main id="main">
        <div class="container justify-content-between align-items-center" style="margin-top: 100px;">
            <a href="/" class="text-decoration-none backPage"><i class="bi bi-arrow-left-circle"></i> kembali ke
                Home</a>
        </div>

        {{-- Forum Section --}}
        <section id="blog" class="blog">
            <div class="container">
                <a href="#" class="btn text-white mb-4" style="background-color:#AA82C9">Buat Topik Diskusi <span><i
                            class="bi bi-plus-lg"></i></span>
                </a>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="card shadow mb-5">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-person-circle fa-4x"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="d-flex flex-column mb-2">
                                            <p class="mb-0 me-2">Yanto Basna</p>
                                            <p class="mb-0 me-2 text-muted">2022-01-13 15:00:23</p>
                                        </div>
                                    </div>
                                </div><!-- End Forum Profile-->
                                <hr>

                                <div class="forum">
                                    <div class="forum-title mt-4 mb-4">
                                        <p class="fs-3 fw-bold">Lorem, ipsum.</p>
                                    </div>
                                    <div class="forum-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit a
                                            aspernatur voluptates, mollitia perferendis saepe perspiciatis libero molestiae
                                            necessitatibus praesentium blanditiis qui aperiam quos, repudiandae aut
                                            consectetur ipsa possimus placeat? Sapiente eligendi, corrupti voluptate quod
                                            quibusdam quam, eaque vero magni ut recusandae quia praesentium necessitatibus.
                                            Tempore ut eaque distinctio sit. Necessitatibus doloribus nisi quidem
                                            perferendis quos modi deserunt nam. Repellat necessitatibus itaque laboriosam
                                            quod, provident, voluptates neque maxime nostrum voluptatem error tenetur? Hic
                                            nemo, dignissimos deserunt ea doloribus quod tempora, eius eaque maxime
                                            voluptatum quidem quam modi, atque laborum provident corporis aspernatur error
                                            delectus. Laudantium et iure architecto quod adipisci.</p>
                                    </div><!-- End Forum Contents-->

                                    <div class="forum-tags">
                                        <div class=" d-lg-inline-block justify-content-start">
                                            <a href="#" class="btn mr-2" style="background-color:#AA82C9">#Karir</a>
                                            <a href="#" class="btn" style="background-color:#AA82C9">#Kuliah</a>
                                        </div>
                                    </div><!-- End Forum Tags-->

                                    <hr class="mt-4">

                                    <div class="forum-button">
                                        <div class="row">
                                            <div class="d-flex justify-content-between ">
                                                <a href="#" class="btn col-lg-5 col-md-4 text-white text-center"
                                                    style="background-color:#8C8C8C"><i class="bi bi-hand-thumbs-up"></i>
                                                    Suka</a>
                                                <a href="#" class="btn col-lg-5 col-md-4 text-white text-center"
                                                    style="background-color:#8C8C8C"><i class="bi bi-card-text"></i>
                                                    Komentar</a>
                                            </div><!-- End Forum Button-->
                                        </div>
                                    </div>

                                    <div class="forum-stats mt-4">
                                        <div class="row">
                                            <div class="counter ml-4">
                                                <a href="#" class="text-decoration-none d-inline text-muted "
                                                    style="margin-right:10px">9
                                                    Suka</a>
                                                <a href="#" class="text-decoration-none d-inline text-muted">11
                                                    Komentar</a>
                                            </div>
                                        </div>
                                    </div><!-- End Forum Stat-->
                                </div>
                            </div>
                        </div><!-- End Forum-->

                        <div class="card shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-person-circle fa-4x"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="d-flex flex-column mb-2">
                                            <p class="mb-0 me-2">Yanto Basna</p>
                                            <p class="mb-0 me-2 text-muted">2022-01-13 15:00:23</p>
                                        </div>
                                    </div>
                                </div><!-- End Forum Profile-->
                                <hr>

                                <div class="forum">
                                    <div class="forum-title mt-4 mb-4">
                                        <p class="fs-3 fw-bold">Lorem, ipsum.</p>
                                    </div>
                                    <div class="forum-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit a
                                            aspernatur voluptates, mollitia perferendis saepe perspiciatis libero
                                            molestiae
                                            necessitatibus praesentium blanditiis qui aperiam quos, repudiandae aut
                                            consectetur ipsa possimus placeat? Sapiente eligendi, corrupti voluptate
                                            quod
                                            quibusdam quam, eaque vero magni ut recusandae quia praesentium
                                            necessitatibus.
                                            Tempore ut eaque distinctio sit. Necessitatibus doloribus nisi quidem
                                            perferendis quos modi deserunt nam. Repellat necessitatibus itaque
                                            laboriosam
                                            quod, provident, voluptates neque maxime nostrum voluptatem error tenetur?
                                            Hic
                                            nemo, dignissimos deserunt ea doloribus quod tempora, eius eaque maxime
                                            voluptatum quidem quam modi, atque laborum provident corporis aspernatur
                                            error
                                            delectus. Laudantium et iure architecto quod adipisci.</p>
                                    </div><!-- End Forum Contents-->

                                    <div class="forum-tags">
                                        <div class=" d-lg-inline-block justify-content-start">
                                            <a href="#" class="btn mr-2" style="background-color:#AA82C9">#Karir</a>
                                            <a href="#" class="btn" style="background-color:#AA82C9">#Kuliah</a>
                                        </div>
                                    </div><!-- End Forum Tags-->

                                    <hr class="mt-4">

                                    <div class="forum-button">
                                        <div class="row">
                                            <div class="d-flex justify-content-between ">
                                                <a href="#" class="btn col-lg-5 col-md-4 text-white text-center"
                                                    style="background-color:#8C8C8C"><i class="bi bi-hand-thumbs-up"></i>
                                                    Suka</a>
                                                <a href="#" class="btn col-lg-5 col-md-4 text-white text-center"
                                                    style="background-color:#8C8C8C"><i class="bi bi-card-text"></i>
                                                    Komentar</a>
                                            </div><!-- End Forum Button-->
                                        </div>
                                    </div>

                                    <div class="forum-stats mt-4">
                                        <div class="row">
                                            <div class="counter ml-4">
                                                <a href="#"
                                                    class="text-decoration-none d-inline text-muted p-1 mr-2"
                                                    style="margin-right:10px">9
                                                    Suka</a>
                                                <a href="#" class="text-decoration-none d-inline text-muted p-1 ">11
                                                    Komentar</a>
                                            </div>
                                        </div>
                                    </div><!-- End Forum Stat-->
                                </div>
                            </div>
                        </div>
                        <!--End Forum-->
                    </div>

                    {{-- Sidebar Jurusan --}}
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-item search-form">
                                <h3 class="sidebar-title">Search</h3>
                                <form action="" class="mt-3">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search form-->

                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Topik Terpopuler</h3>
                                <div class="mt-3">
                                    <div class="post-item mt-3">
                                        <div>
                                            <h4 class="fst-italic"><a href="#">Lorem, ipsum dolor.</a></h4>
                                            <small>Oleh Yanto Basna</small>
                                        </div>
                                    </div><!-- End Topik Terpopuler-->

                                    <div class="post-item mt-3">
                                        <div>
                                            <h4 class="fst-italic"><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                            <small>Oleh Rizky Imam</small>
                                        </div>
                                    </div><!-- End Topik Terpopuler-->
                                </div>
                            </div><!-- End sidebar Topik Terpopuler-->
                        </div>
                    </div>
                    {{-- End Sidebar Jurusan --}}
                </div>
        </section>
        {{-- End Forum Section --}}
    </main>

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
    </script>
@endsection

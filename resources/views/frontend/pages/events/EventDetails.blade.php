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
                        <li><a href="{{ url('/events') }}">Events</a></li>
                        <li>Announcement</li>
                    </ol>
                </div>
            </div>
        </div><!-- End Breadcrumbs -->


        <!-- ======= Blog Section ======= -->

        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">
                    <div class="col-lg-8">
                        <article class="blog-details">
                            <div class="post-img position-relative">
                                <img src="{{ asset('assets') }}/img/events/announcement.webp" alt=""
                                    class="img-fluid ">
                            </div>

                            <h2 class="title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia
                            </h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-details.html">Admin</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-details.html"><time datetime="2020-01-01">Jan 1, 2022</time></a></li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                <p>
                                    Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi
                                    praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                    Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est
                                    cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis
                                    dolore.
                                </p>

                                <p>
                                    Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in
                                    accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate
                                    cupiditate.
                                </p>

                                <p>
                                    Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore
                                    provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta
                                    est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                                    Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit
                                    quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
                                    Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem
                                    magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                                </p>

                                <p>
                                    Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum
                                    atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem
                                    laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum
                                    nesciunt aliquid qui.
                                    Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut
                                    ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem
                                    omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint
                                    consequatur quidem ea.
                                    Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum
                                    quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.
                                </p>
                                <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">
                            </div><!-- End post content -->

                            {{-- <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">Business</a></li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div><!-- End meta bottom --> --}}
                        </article><!-- End blog post -->
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-item search-form">
                                <h3 class="sidebar-title">Search</h3>
                                <form action="" class="mt-3">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <div class="sidebar-item categories">
                                <h3 class="sidebar-title">Categories</h3>
                                <ul class="mt-3">
                                    <li><a href="#">Announcement <span>(25)</span></a></li>
                                    <li><a href="#">Bootcamp <span>(12)</span></a></li>
                                    <li><a href="#">Workshop <span>(5)</span></a></li>
                                    <li><a href="#">Jobfair <span>(22)</span></a></li>
                                </ul>
                            </div><!-- End sidebar categories-->

                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Recent Posts</h3>

                                <div class="mt-3">

                                    <div class="post-item mt-3">
                                        <img src="{{ asset('assets') }}/img/events/announcement.webp" alt=""
                                            class="flex-shrink-0">
                                        <div>
                                            <h4><a href="#">Announcement 4</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item mt-3">
                                        <img src="{{ asset('assets') }}/img/events/announcement.webp" alt=""
                                            class="flex-shrink-0">
                                        <div>
                                            <h4><a href="#">Workshop Online 2022</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2022</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                </div>

                            </div><!-- End sidebar recent posts-->

                            <div class="sidebar-item tags">
                                <h3 class="sidebar-title">Tags</h3>
                                <ul class="mt-3">
                                    <li><a href="#">App</a></li>
                                    <li><a href="#">IT</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Mac</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Studio</a></li>
                                    <li><a href="#">Smart</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End Blog Sidebar -->

                    </div>

                </div>

            </div>
        </section><!-- End Blog Section -->
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

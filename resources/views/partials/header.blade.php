<!-- Preloader -->
<div id="preloader">
    <i class="circle-preloader"></i>
    <img src="{{asset('img/core-img/salad.png')}}" alt="" />
  </div>

  <!-- Search Wrapper -->
  <div class="search-wrapper">
    <!-- Close Btn -->
    <div class="close-btn">
      <i class="fa fa-times" aria-hidden="true"></i>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <form action="/custom-list" method="post">
            @csrf
            <input
              type="search"
              name="search"
              placeholder="Type any keywords..."
            />
            <button type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>


<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-between">
          <!-- Breaking News -->
          <div class="col-12 col-sm-6">
            <div class="breaking-news">
              <div id="breakingNewsTicker" class="ticker">
                <ul>
                  <li><a href="#">Hello World!</a></li>
                  <li><a href="#">Welcome to Colorlib Family.</a></li>
                  <li><a href="#">Hello Delicious!</a></li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Top Social Info -->
          <div class="col-12 col-sm-6">
            <div class="top-social-info text-right">
              <a href="https://www.instagram.com/erki_kadhafi/" target="blank"
                ><i class="fa fa-instagram" aria-hidden="true"></i
              ></a>
              <a href="https://twitter.com/ErkiKadhafi_" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="https://www.linkedin.com/in/erkikadhafi/" target="blank"
                ><i class="fa fa-linkedin" aria-hidden="true"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar Area -->
    <div class="delicious-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav
            class="classy-navbar justify-content-between"
            id="deliciousNav"
          >
            <!-- Logo -->
            <a class="nav-brand" href=" / "
              ><img src="{{asset('img/core-img/logo.png')}}" alt=""
            /></a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"
                ><span></span><span></span><span></span
              ></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">
              <!-- close btn -->
              <div class="classycloseIcon">
                <div class="cross-wrap">
                  <span class="top"></span><span class="bottom"></span>
                </div>
              </div>

              <!-- Nav Start -->
              <div class="classynav">
                <ul>
                  <li class="{{ $title=='home' ? 'active':''}}"><a href="/">Home</a></li>
                  <li>
                    <a href="#">Pages</a>
                    <ul class="dropdown">
                      <li><a href="/about" >About Us</a></li>
                      <li><a href="/blog-post">Blog Post</a></li>
                      {{-- <li><a href="/contact">Contact</a></li> --}}
                      <li><a href="/elements">Elements</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Chategory</a>
                    <div class="megamenu">
                      <ul class="single-mega cn-col-4">
                        <li class="title">Type</li>
                        <li><a href="/custom-list/type/main-course">Main Course</a></li>
                        <li><a href="/custom-list/type/side-dish">Side Dish</a></li>
                        <li><a href="/custom-list/type/dessert">Dessert</a></li>
                        <li><a href="/custom-list/type/appetizer">Appetizer</a></li>
                        <li><a href="/custom-list/type/salad">Salad</a></li>
                        <li><a href="/custom-list/type/beverage">Beverage</a></li>
                      </ul>
                      <ul class="single-mega cn-col-4">
                        <li class="title">Intolerances</li>
                        <li><a href="/custom-list/intolerances/dairy">Dairy</a></li>
                        <li><a href="/custom-list/intolerances/egg">Egg</a></li>
                        <li><a href="/custom-list/intolerances/peanut">Peanut</a></li>
                        <li><a href="/custom-list/intolerances/gluten">Gluten</a></li>
                        <li><a href="/custom-list/intolerances/seafood">Seafood</a></li>
                        <li><a href="/custom-list/intolerances/wheat">Wheat</a></li>
                      </ul>
                      <ul class="single-mega cn-col-4">
                        <li class="title">Cuisines</li>
                        <li><a href="/custom-list/cuisine/african">African</a></li>
                        <li><a href="/custom-list/cuisine/american">American</a></li>
                        <li><a href="/custom-list/cuisine/british">British</a></li>
                        <li><a href="/custom-list/cuisine/chinese">Chinese</a></li>
                        <li><a href="/custom-list/cuisine/european">European</a></li>
                        <li><a href="/custom-list/cuisine/french">French</a></li>
                      </ul>
                      <div class="single-mega cn-col-4">
                        <div class="receipe-slider owl-carousel">
                          <a href="#"
                            ><img src="{{asset('img/bg-img/bg1.jpg')}}" alt=""
                          /></a>
                          <a href="#"
                            ><img src="{{asset('img/bg-img/bg6.jpg')}}" alt=""
                          /></a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="{{ $title=='my-receipes' ? 'active':''}}"><a href="/recipe">My Receipies</a></li>
                </ul>

                <!-- Newsletter Form -->
                <div class="search-btn">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </div>
              </div>
              <!-- Nav End -->
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ##### Header Area End ##### -->
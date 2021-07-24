@extends('layout/main')

@section('container')
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
      <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div
          class="single-hero-slide bg-img"
          style="background-image: url(img/bg-img/bg1.jpg)"
        >
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div
                  class="hero-slides-content"
                  data-animation="fadeInUp"
                  data-delay="100ms"
                >
                  <h2 data-animation="fadeInUp" data-delay="300ms">
                    Delicious Homemade Burger
                  </h2>
                  <p data-animation="fadeInUp" data-delay="700ms">
                    A burger without a cheese, is like a hug without
                    a squeeze. Find the best receipe for burger here.
                  </p>
                  <a
                    href="custom-list/query/burger"
                    class="btn delicious-btn"
                    data-animation="fadeInUp"
                    data-delay="1000ms"
                    >See Receipes</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single Hero Slide -->
        <div
          class="single-hero-slide bg-img"
          style="background-image: url(img/bg-img/bg6.jpg)"
        >
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div
                  class="hero-slides-content"
                  data-animation="fadeInUp"
                  data-delay="100ms"
                >
                  <h2 data-animation="fadeInUp" data-delay="300ms">
                   Healthy Foods
                  </h2>
                  <p data-animation="fadeInUp" data-delay="700ms">
                    The food you eat can be either the safest
                    and most powerful form of medicine or
                    the slowest form of poison.
                  </p>
                  <a
                    href="custom-list/diet/vegetarian"
                    class="btn delicious-btn"
                    data-animation="fadeInUp"
                    data-delay="1000ms"
                    >See Receipes</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single Hero Slide -->
        <div
          class="single-hero-slide bg-img"
          style="background-image: url(img/bg-img/bg7.jpg)"
        >
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div
                  class="hero-slides-content"
                  data-animation="fadeInUp"
                  data-delay="100ms"
                >
                  <h2 data-animation="fadeInUp" data-delay="300ms">
                    Sweet Deserts 
                  </h2>
                  <p data-animation="fadeInUp" data-delay="700ms">
                    Seize the moment.Remember all those women on the 
                    titanic who waved off the desert card.
                  </p>
                  <a
                    href="custom-list/type/dessert"
                    class="btn delicious-btn"
                    data-animation="fadeInUp"
                    data-delay="1000ms"
                    >See Receipes</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
    <section class="top-catagory-area section-padding-80-0">
      <div class="container">
        <div class="row">
          <!-- Top Catagory Area -->
          <div class="col-12 col-lg-6">
            <div class="single-top-catagory">
              <img src="img/bg-img/bg2.jpg" alt="" />
              <!-- Content -->
              <div class="top-cta-content">
                <h3>Strawberry Cake</h3>
                <h6>Simple &amp; Delicios</h6>
                <a href="receipe-post " class="btn delicious-btn"
                  >See Full Receipe</a
                >
              </div>
            </div>
          </div>
          <!-- Top Catagory Area -->
          <div class="col-12 col-lg-6">
            <div class="single-top-catagory">
              <img src="img/bg-img/bg3.jpg" alt="" />
              <!-- Content -->
              <div class="top-cta-content">
                <h3>Chinesse Noodles</h3>
                <h6>Simple &amp; Delicios</h6>
                <a href="receipe-post " class="btn delicious-btn"
                  >See Full Receipe</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ##### Top Catagory Area End ##### -->

    <!-- ##### Best Receipe Area Start ##### -->
    <section class="best-receipe-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading">
              <h3>The best Receipies</h3>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- Single Best Receipe Area -->
          @foreach ($collection as $item)
            <?php  $rating = rand(3,5); ?>
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="single-best-receipe-area mb-30">
                <img src="{{ $item["image"] }}" alt="" width="400"/>
                <div class="receipe-content">
                  <a href="/{{ $item["id"] }}">
                    <h5>{{ $item["title"] }}</h5>
                  </a>
                  <div class="ratings">
                    @for ($i = 1; $i < $rating; $i++)
                      <i class="fa fa-star" aria-hidden="true"></i>  
                    @endfor
                    @for ($i = 5-$rating; $i >= 0; $i--)
                      <i class="fa fa-star-o" aria-hidden="true"></i>  
                    @endfor
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </div>


      </div>
    </section>
    <!-- ##### Best Receipe Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <section
      class="cta-area bg-img bg-overlay"
      style="background-image: url(img/bg-img/bg4.jpg)"
    >
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <!-- Cta Content -->
            <div class="cta-content text-center">
              <h2>Gluten Free Receipies</h2>
              <p>
                A gluten-free diet still allows you access
                to almost every fruit and vegetable, a variety
                of grains and legumes, your pick of dairy products,
                fresh meats and fish and a whole slew of special 
                gluten-free delights to satisfy your pretzel-bagel-
                muffin-dougnut craving.
              </p>
              <a href="/custom-list/intolerances/gluten" class="btn delicious-btn"
                >Discover all the receipies</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ##### CTA Area End ##### -->

    {{-- <!-- ##### Small Receipe Area Start ##### -->
    <section class="small-receipe-area section-padding-80-0">
      <div class="container">
        <div class="row">
          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="img/bg-img/sr1.jpg" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content">
                <span>January 04, 2018</span>
                <a href="receipe-post ">
                  <h5>Homemade italian pasta</h5>
                </a>
                <div class="ratings">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>2 Comments</p>
              </div>
            </div>
          </div>

          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="img/bg-img/sr2.jpg" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content">
                <span>January 04, 2018</span>
                <a href="receipe-post ">
                  <h5>Baked Bread</h5>
                </a>
                <div class="ratings">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>2 Comments</p>
              </div>
            </div>
          </div>

          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="img/bg-img/sr3.jpg" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content">
                <span>January 04, 2018</span>
                <a href="receipe-post ">
                  <h5>Scalops on salt</h5>
                </a>
                <div class="ratings">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>2 Comments</p>
              </div>
            </div>
          </div>

          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="img/bg-img/sr4.jpg" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content">
                <span>January 04, 2018</span>
                <a href="receipe-post ">
                  <h5>Fruits on plate</h5>
                </a>
                <div class="ratings">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>2 Comments</p>
              </div>
            </div>
          </div>

          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="img/bg-img/sr5.jpg" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content">
                <span>January 04, 2018</span>
                <a href="receipe-post ">
                  <h5>Macaroons</h5>
                </a>
                <div class="ratings">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>2 Comments</p>
              </div>
            </div>
          </div>

          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="img/bg-img/sr6.jpg" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content">
                <span>January 04, 2018</span>
                <a href="receipe-post ">
                  <h5>Chocolate tart</h5>
                </a>
                <div class="ratings">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>2 Comments</p>
              </div>
            </div>
          </div>

          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="img/bg-img/sr7.jpg" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content">
                <span>January 04, 2018</span>
                <a href="receipe-post ">
                  <h5>Berry Desert</h5>
                </a>
                <div class="ratings">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>2 Comments</p>
              </div>
            </div>
          </div>

          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="img/bg-img/sr8.jpg" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content">
                <span>January 04, 2018</span>
                <a href="receipe-post ">
                  <h5>Zucchini Grilled on peper</h5>
                </a>
                <div class="ratings">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>2 Comments</p>
              </div>
            </div>
          </div>

          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="img/bg-img/sr9.jpg" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content">
                <span>January 04, 2018</span>
                <a href="receipe-post ">
                  <h5>Chicken Salad</h5>
                </a>
                <div class="ratings">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>2 Comments</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ##### Small Receipe Area End ##### --> --}}

    <!-- ##### Quote Subscribe Area Start ##### -->
    <section class="quote-subscribe-adds">
      <div class="container mt-5">
        <div class="row align-items-end">
          <!-- Quote -->
          <div class="col-12 col-lg-4">
            <div class="quote-area text-center">
              <span>"</span>
              <h4>
                Nothing is better than going home to family and eating good food
                and relaxing
              </h4>
              <p>John Smith</p>
              <div class="date-comments d-flex justify-content-between">
                <div class="date">January 04, 2018</div>
                <div class="comments">2 Comments</div>
              </div>
            </div>
          </div>

          <!-- Newsletter -->
          <div class="col-12 col-lg-4">
            <div class="newsletter-area">
              <h4>Subscribe to our newsletter</h4>
              <!-- Form -->
              <div
                class="newsletter-form bg-img bg-overlay"
                style="background-image: url(img/bg-img/bg1.jpg)"
              >
                <form action="#" method="post">
                  <input
                    type="email"
                    name="email"
                    placeholder="Subscribe to newsletter"
                  />
                  <button type="submit" class="btn delicious-btn w-100">
                    Subscribe
                  </button>
                </form>
                <p>
                  Subscribe to our newsletter so you dont miss the newest 
                  and best receipe. And also check out blog post for more information
                  about new place for good foods all around the world.
                </p>
              </div>
            </div>
          </div>

          <!-- Adds -->
          <div class="col-12 col-lg-4">
            <div class="delicious-add">
              <img src="img/bg-img/add.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ##### Quote Subscribe Area End ##### -->

   
@endsection

@extends('layout/main')

@section('container')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" 
        style="background-image: url({{asset('img/bg-img/breadcumb5.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>All Receipes That You Saved</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Best Receipe Area Start ##### -->
    <section class="best-receipe-area mt-5">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-heading">
                <h3>Your Best Recipes</h3>
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
                    <a href="/{{ $item["id_recipe"] }}">
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
@endsection
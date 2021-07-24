@extends('layout/main')

@section('container')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>Recipe</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <div class="receipe-post-area section-padding-80">

        <!-- Receipe Post Search -->
        <div class="receipe-post-search mb-80">
            <div class="container">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <select name="select1" id="select1">
                                <option value="1">All Receipies Categories</option>
                                <option value="1">All Receipies Categories 2</option>
                                <option value="1">All Receipies Categories 3</option>
                                <option value="1">All Receipies Categories 4</option>
                                <option value="1">All Receipies Categories 5</option>
                            </select>
                        </div>
                        <div class="col-12 col-lg-3">
                            <select name="select1" id="select2">
                                <option value="1">All Receipies Categories</option>
                                <option value="1">All Receipies Categories 2</option>
                                <option value="1">All Receipies Categories 3</option>
                                <option value="1">All Receipies Categories 4</option>
                                <option value="1">All Receipies Categories 5</option>
                            </select>
                        </div>
                        <div class="col-12 col-lg-3">
                            <input type="search" name="search" placeholder="Search Receipies">
                        </div>
                        <div class="col-12 col-lg-3 text-right">
                            <button type="submit" class="btn delicious-btn">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Receipe Slider -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="receipe-slider owl-carousel">
                        <img src="{{$item["image"]}}" alt="">
                        <img src="{{$item["image"]}}" alt="">
                        <img src="{{$item["image"]}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Receipe Content Area -->
        <div class="receipe-content-area">
            <div class="container">

                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="receipe-headline my-5">
                            <span><?= date("F j, Y") ;?></span>
                            <h2>{{ $item["title"] }}</h2>
                            <div class="receipe-duration">
                                <h6>Dish types: {{ $item["dishTypes"][0] }}</h6>
                                <h6>Cook: {{ $item["readyInMinutes"] }} mins</h6>
                                <h6>Yields: {{ $item["servings"] }} Servings</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="receipe-ratings text-right my-5">
                            <div class="ratings">
                                @for ($i = 1; $i < $rating; $i++)
                                    <i class="fa fa-star" aria-hidden="true"></i>  
                                @endfor
                                @for ($i = 5-$rating; $i >= 0; $i--)
                                    <i class="fa fa-star-o" aria-hidden="true"></i>  
                                @endfor
                            </div>
                            @if (!$isSaved)
                            <form action="/recipe" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item["id"] }}">
                                <input type="hidden" name="title" value="{{ $item["title"] }}">
                                <input type="hidden" name="image" value="{{ $item["image"] }}">
                                <input type="hidden" name="rating" value="{{ $rating }}">
                                <button type="submit" name="submit" class="btn delicious-btn">Add to my receipes</button>
                            </form>
                            @else
                            <form action="/recipe/{{ $item["id"] }}" method="POST">
                                @method('delete')
                                @csrf
                                <input type="hidden" name="id" value="{{ $item["id"] }}">
                                <button type="submit" name="submit" class="btn btn-danger btn-lg">Delete from my receipes</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-8">
                        @foreach ($item["analyzedInstructions"][0]["steps"] as $step)
                            <!-- Single Preparation Step -->
                            <div class="single-preparation-step d-flex">
                                @if ($loop->index+1 < 10)
                                    <h4>0{{ $loop->index+1 }}.</h4>
                                @elseif($loop->index+1 > 10)
                                    <h4>{{ $loop->index+1 }}.</h4>
                                @endif
                                <p>{{ $step["step"] }}</p>
                            </div>
                        @endforeach
                    </div>

                    <!-- Ingredients -->
                    <div class="col-12 col-lg-4">
                        <div class="ingredients">
                            <h4>Ingredients</h4>
                            @foreach ($item["extendedIngredients"] as $ing)
                                <!-- Custom Checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">{{ $ing["original"] }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-left">
                            <h3>Leave a comment</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="contact-form-area">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn delicious-btn mt-30" type="submit">Post Comments</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>    
@endsection
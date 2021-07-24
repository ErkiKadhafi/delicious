@extends('layout/main')

@section('container')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb5.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>Elements</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area section-padding-80-0">
        <div class="container">
            <div class="row">

                <!-- ********** Buttons ********** -->
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Buttons</h2>
                    </div>
                    <!-- Buttons -->
                    <div class="delicious-buttons-area mb-80">
                        <a href="#" class="btn delicious-btn m-1">See Receipe</a>
                        <a href="#" class="btn delicious-btn btn-2 m-1">See Receipe</a>
                        <a href="#" class="btn delicious-btn btn-3 m-1">See Receipe</a>
                        <a href="#" class="btn delicious-btn btn-4 m-1">See Receipe</a>
                    </div>
                </div>

                <!-- ********** Progress Bars & Accordions ********** -->
                <div class="col-12">
                    <div class="elements-title mb-80">
                        <h2>Accordians &amp; Tabs</h2>
                    </div>
                </div>

                <!-- ##### Accordians ##### -->
                <div class="col-12 col-lg-6">
                    <div class="accordions mb-80" id="accordion" role="tablist" aria-multiselectable="true">

                        <!-- Single Accordian Area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Aenean hendrerit varius massa quis laoreet.
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseOne" class="accordion-content collapse show">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- Single Accordian Area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Hendrerit varius massa quis laoreet.
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>

                        <!-- Single Accordian Area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Aenean hendrerit varius massa quis laoreet.
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ##### Tabs ##### -->
                <div class="col-12 col-lg-6">
                    <div class="delicious-tabs-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Varius massa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Hendrerit varius</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Aenean hendrerit</a>
                            </li>
                        </ul>

                        <div class="tab-content mb-80" id="myTabContent">
                            <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="delicious-tab-content">
                                    <!-- Tab Text -->
                                    <div class="delicious-tab-text">
                                        <p>Integer nec bibendum lacus. Praesent malesuada congue, Suspendisse dictum enim sit amet libero malesu ada feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Praesent malesuada congue.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="delicious-tab-content">
                                    <!-- Tab Text -->
                                    <div class="delicious-tab-text">
                                        <p>Integer nec bibendum lacus. Praesent malesuada congue, Suspendisse dictum enim sit amet libero malesu ada feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Praesent malesuada congue.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                <div class="delicious-tab-content">
                                    <!-- Tab Text -->
                                    <div class="delicious-tab-text">
                                        <p>Integer nec bibendum lacus. Praesent malesuada congue, Suspendisse dictum enim sit amet libero malesu ada feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Praesent malesuada congue.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ********** Milestones ********** -->
                <div class="col-12">
                    <div class="elements-title mb-80">
                        <h2>Milestone</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="delicious-cool-facts-area">
                        <div class="row">
                            <!-- Single Cool Fact -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact">
                                    <img src="img/core-img/salad.png" alt="">
                                    <h3><span class="counter">1287</span></h3>
                                    <h6>Amazing receipies</h6>
                                </div>
                            </div>

                            <!-- Single Cool Fact -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact">
                                    <img src="img/core-img/hamburger.png" alt="">
                                    <h3><span class="counter">25</span></h3>
                                    <h6>Burger receipies</h6>
                                </div>
                            </div>

                            <!-- Single Cool Fact -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact">
                                    <img src="img/core-img/rib.png" alt="">
                                    <h3><span class="counter">471</span></h3>
                                    <h6>Meat receipies</h6>
                                </div>
                            </div>

                            <!-- Single Cool Fact -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact">
                                    <img src="img/core-img/pancake.png" alt="">
                                    <h3><span class="counter">326</span></h3>
                                    <h6>Desert receipies</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ********** Loaders ********** -->
                <div class="col-12">
                    <div class="elements-title mb-80">
                        <h2>Loaders</h2>
                    </div>
                </div>

                <div class="col-12">
                    <!-- Loaders Area Start -->
                    <div class="our-skills-area text-center">
                        <div class="row">
                            <!-- Single Bar Circle -->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-pie-bar mb-80" data-percent="95">
                                    <canvas class="bar-circle" width="70" height="70"></canvas>
                                    <h6>Recipies</h6>
                                </div>
                            </div>
                            <!-- Single Bar Circle -->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-pie-bar mb-80" data-percent="100">
                                    <canvas class="bar-circle" width="70" height="70"></canvas>
                                    <h6>Pure Love</h6>
                                </div>
                            </div>
                            <!-- Single Bar Circle -->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-pie-bar mb-80" data-percent="85">
                                    <canvas class="bar-circle" width="70" height="70"></canvas>
                                    <h6>Creativity</h6>
                                </div>
                            </div>
                            <!-- Single Bar Circle -->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-pie-bar mb-80" data-percent="52">
                                    <canvas class="bar-circle" width="70" height="70"></canvas>
                                    <h6>Passion</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ********** Icon Boxes ********** -->
                <div class="col-12">
                    <div class="elements-title mb-80">
                        <h2>Icon Boxes</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">

                        <!-- Single Course Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-feature-area mb-80">
                                <div class="d-flex align-items-center mb-30">
                                    <img src="img/core-img/hamburger2.png" alt="">
                                    <h5>Amazing Recipies</h5>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor.</p>
                            </div>
                        </div>

                        <!-- Single Course Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-feature-area mb-80">
                                <div class="d-flex align-items-center mb-30">
                                    <img src="img/core-img/pizza.png" alt="">
                                    <h5>Italian Food</h5>
                                </div>
                                <p>Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibu.</p>
                            </div>
                        </div>

                        <!-- Single Course Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-feature-area mb-80">
                                <div class="d-flex align-items-center mb-30">
                                    <img src="img/core-img/cake2.png" alt="">
                                    <h5>Sweets &amp; Cakes</h5>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Elements Area End ***** -->
@endsection
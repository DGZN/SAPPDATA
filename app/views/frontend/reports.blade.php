@extends('layouts.frontend')



@section('content')

<!-- Media Container -->
<div class="media-container">
    <!-- Intro -->
    <section class="site-section site-section-light site-section-top">
        <div class="container text-center">
            <h1 class="animation-slideDown"><strong>Welcome to our report database!</strong></h1>
            <h2 class="h3 animation-slideUp hidden-xs">Explore over 5,000 reports!</h2>
        </div>
    </section>
    <!-- END Intro -->

    <!-- For best results use an image with a resolution of 2560x279 pixels -->
    <img src="img/placeholders/headers/store_home.jpg" alt="" class="media-image animation-pulseSlow">
</div>
<!-- END Media Container -->

<!-- Products -->
<section class="site-content site-section">
    <div class="container">
        <!-- Seach Form -->
        <div class="site-block">
            <form action="reports" method="get">
                <div class="input-group input-group-lg">
                    <input type="text" id="search" name="s" class="form-control text-center" placeholder="Search database..">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- END Seach Form -->

        <!-- New Arrivals -->
        <h2 class="site-heading"><strong>New</strong> Arrivals</h2>
        <hr>
        <div class="row store-items">
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                <div class="store-item">
                    <div class="store-item-rating text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="store-item-image">
                        <a href="#">
                            <img src="img/placeholders/photos/photo26.jpg" alt="" class="img-responsive">
                        </a>
                    </div>
                    <div class="store-item-info clearfix">
                        <span class="store-item-price themed-color-dark pull-right">$ 79</span>
                        <a href="#"><strong>Sport Shoes</strong></a><br>
                        <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                <div class="store-item">
                    <div class="store-item-rating text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="store-item-image">
                        <a href="#">
                            <img src="img/placeholders/photos/photo29.jpg" alt="" class="img-responsive">
                        </a>
                    </div>
                    <div class="store-item-info clearfix">
                        <span class="store-item-price themed-color-dark pull-right">$ 99</span>
                        <a href="#"><strong>Jacket</strong></a><br>
                        <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                <div class="store-item">
                    <div class="store-item-rating text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="store-item-image">
                        <a href="#">
                            <img src="img/placeholders/photos/photo27.jpg" alt="" class="img-responsive">
                        </a>
                    </div>
                    <div class="store-item-info clearfix">
                        <span class="store-item-price themed-color-dark pull-right">$ 299</span>
                        <a href="#"><strong>Watch</strong></a><br>
                        <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-right">
                <a href="#"><strong>View All</strong> <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
        <!-- END New Arrivals -->

        <!-- Best Sellers -->
        <h2 class="site-heading"><strong>Popular</strong> Cases</h2>
        <hr>
        <div class="row store-items">
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                <div class="store-item">
                    <div class="store-item-rating text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="store-item-image">
                        <a href="#">
                            <img src="img/placeholders/photos/photo25.jpg" alt="" class="img-responsive">
                        </a>
                    </div>
                    <div class="store-item-info clearfix">
                        <span class="store-item-price themed-color-dark pull-right">$ 109</span>
                        <a href="#"><strong>Sunglasses</strong></a><br>
                        <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                <div class="store-item">
                    <div class="store-item-rating text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="store-item-image">
                        <a href="#">
                            <img src="img/placeholders/photos/photo28.jpg" alt="" class="img-responsive">
                        </a>
                    </div>
                    <div class="store-item-info clearfix">
                        <span class="store-item-price themed-color-dark pull-right">$ 59</span>
                        <a href="#"><strong>Gloves</strong></a><br>
                        <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                <div class="store-item">
                    <div class="store-item-rating text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="store-item-image">
                        <a href="#">
                            <img src="img/placeholders/photos/photo30.jpg" alt="" class="img-responsive">
                        </a>
                    </div>
                    <div class="store-item-info clearfix">
                        <span class="store-item-price themed-color-dark pull-right">$ 99</span>
                        <a href="#"><strong>Jacket</strong></a><br>
                        <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                <div class="store-item">
                    <div class="store-item-rating text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="store-item-image">
                        <a href="#">
                            <img src="img/placeholders/photos/photo32.jpg" alt="" class="img-responsive">
                        </a>
                    </div>
                    <div class="store-item-info clearfix">
                        <span class="store-item-price themed-color-dark pull-right">$ 79</span>
                        <a href="#"><strong>Headset</strong></a><br>
                        <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                <div class="store-item">
                    <div class="store-item-rating text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="store-item-image">
                        <a href="#">
                            <img src="img/placeholders/photos/photo35.jpg" alt="" class="img-responsive">
                        </a>
                    </div>
                    <div class="store-item-info clearfix">
                        <span class="store-item-price themed-color-dark pull-right">$ 1.599</span>
                        <a href="#"><strong>Laptop</strong></a><br>
                        <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                <div class="store-item">
                    <div class="store-item-rating text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="store-item-image">
                        <a href="#">
                            <img src="img/placeholders/photos/photo33.jpg" alt="" class="img-responsive">
                        </a>
                    </div>
                    <div class="store-item-info clearfix">
                        <span class="store-item-price themed-color-dark pull-right">$ 149</span>
                        <a href="#"><strong>Sunglasses</strong></a><br>
                        <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-right">
                <a href="#"><strong>View All</strong> <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
        <!-- END Best Sellers -->
    </div>
</section>
<!-- END Products -->

<!-- Explore Store Action -->
<section class="site-content site-section site-section-light themed-background-dark-night">
    <div class="container">
        <div class="text-center push">
            <div class="push">
                <i class="gi gi-shopping_bag fa-5x text-muted"></i>
            </div>
            <a href="#" class="btn btn-lg btn-primary">Explore Database <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
</section>
<!-- END Explore Store Action --><!-- Media Container -->
@stop
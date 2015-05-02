@extends('layouts.frontend')



@section('content')

<style>

    .activist-img {
        width: 200px;
    }

    </style>

<!-- Intro -->
<section class="site-section site-section-light site-section-top themed-background-dark">
    <div class="container">
        <h1 class="text-center animation-slideDown"><i class="fa fa-check-square"></i> <strong>True real-time humanitarian data...</strong></h1>
        <h2 class="h3 text-center animation-slideUp">Thousands of <strong>records</strong> and ACTIVE cases <strong></strong>!</h2>
    </div>
</section>
<!-- END Intro -->

<!-- Jobs -->
<section class="site-content site-section">
    <div class="container">
        <h2 class="site-heading"><strong>Recent</strong> Cases</h2>
        <hr> 
        <div class="row store-items">

            @foreach ( $cases as $case )

                <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                    <a href="javascript:void(0)" class="store-item">
                        <div class="store-item-icon">
                            <i class="gi gi-vector_path_all themed-color-fire"></i>
                        </div>
                        <div class="store-item-info clearfix">
                            <!-- <span class="store-item-price themed-color-dark pull-right">$1000</span> -->
                            <strong>{{ $case->name }} {{ $case->added_on }}</strong><br>
                            <span class="text-muted"><strong>{{ $case->notes }}</strong></span>
                        </div>
                    </a>
                </div>

            @endforeach

        </div>

        <h2 class="site-heading"><strong>Recent</strong> Activists</h2>
        <hr>
        
        <div class="row store-items">

            @foreach ( $activists as $activist )

                <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                    <a href="javascript:void(0)" class="store-item">
                        <div class="store-item-icon">
                            <img src="{{ URL::asset('uploads/')  }}/{{$activist->thumbnail}}" class="activist-img img-rounded" >
                        </div>
                        <div class="store-item-info clearfix">
                            <!-- <span class="store-item-price themed-color-dark pull-right">$1000</span> -->
                            <strong>{{ $activist->first_name }} {{ $activist->last_name }}</strong><br>
                            <span class="text-muted"><strong>{{ $activist->occupation }}</strong></span>
                        </div>
                    </a>
                </div>

            @endforeach

        </div>
    </div>
</section>
<!-- END Jobs -->

<!-- Quick Stats -->
<!-- <section class="site-content site-section themed-background">
    <div class="container">
        <div class="row" id="counters">
            <div class="col-sm-4">
                <div class="counter site-block">
                    <span data-toggle="countTo" data-to="0" data-after="+"></span>
                    <small>Activists</small>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="counter site-block">
                    <span data-toggle="countTo" data-to="0" data-after="+"></span>
                    <small>Open Cases</small>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="counter site-block">
                    <span data-toggle="countTo" data-to="0" data-after="+"></span>
                    <small>Online Records</small>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- END Quick Stats -->


@stop
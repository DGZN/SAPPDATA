@extends('layouts.frontend')



@section('content')

<!-- Media Container -->
<div class="media-container">
    <!-- Intro -->
    <section class="site-section site-section-light site-section-top">
        <div class="container text-center">
            <h1 class="animation-slideDown"><strong>Welcome to our translations database!</strong></h1>
            <h2 class="h3 animation-slideUp hidden-xs"></h2>
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
        <h2 class="site-heading"><strong>Translations</strong></h2>
        <hr>

        <table id="transliteratesTable" class="cel-border hover stripe traces-table">

            <thead>
                <tr>
                    
                    <th>Arabic</th>
                    <th>Latin</th>

                </tr>
            </thead>

            <tbody class="transliteratesBody">



            </tbody>

        </table>

        <br><br><br><br>
        

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

@section('footer-scripts')

<script type="text/javascript">
    $(document).ready(function() {
        baseURL = '/'
        transliteratesTable = $('#transliteratesTable').DataTable({
            'ajax': baseURL + 'api/v1/transliterates',
            "order": [[ 0, "desc" ]]
        });
    });
</script>

@stop
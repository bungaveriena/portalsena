@extends('layout.main')

@section('post')

@endsection


@section('container')
<section id="services" class="services">
    <div class="container">

        <div class="row">
        @foreach ($portals as $portal)
            <div class="col-md-6 col-lg-3 d-flex align-items mb-5">
                <div class="icon-box">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4 class="title"><a href="#"></a></h4>
                    <p class="description"></p>
                </div>
            </div>
        @endforeach
        </div>
    </div>

</section><!-- End Services Section -->
@endsection
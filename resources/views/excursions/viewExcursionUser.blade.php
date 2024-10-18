@extends('layouts.layoutf')

@section('content')
<section class="w3l-grids-3 py-5">
    <div class="container py-md-5">
        <div class="title-content text-left mb-lg-5 mb-4">
            <h6 class="sub-title">Excursions</h6>
            <h3 class="hny-title">Excursions à venir</h3>
        </div>
        <div class="row bottom-ab-grids">
            @foreach ($excursions as $excursion)
                <div class="col-lg-6 subject-card mt-4">
                    <div class="subject-card-header p-4">
                        <a href="#" class="card_title p-lg-4d-block">
                            <div class="row align-items-center">
                                <div class="col-sm-5 subject-img">
                                    <img src="{{ Vite::asset('resources/assetsf/images/g1.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                                    <h4>{{ $excursion->nom }}</h4>
                                    <p>{{ $excursion->date }}</p>
                                    <p>{{ $excursion->description }}</p>
                                    <div class="dst-btm">
                                        <h6 class="">type</h6>
                                        <span>{{ $excursion->type }}</span>
                                    </div>
                                    <div class="dst-btm">
                                        <h6 class="">Prix</h6>
                                        <span>${{ $excursion->prix }}</span>
                                    </div>
                                    <p class="sub-para">{{ $excursion->description }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

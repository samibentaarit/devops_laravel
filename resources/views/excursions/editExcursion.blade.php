@extends('layouts.layout')

@section('content')
    <style>
        .form-control-enhanced {
            border: 1px solid #007bff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Modifier Excursion</h6>
                        </div>
                    </div>
                    <div class="card-body px-4 pb-4">
                        <form role="form" method="POST" action="{{ route('excursions.update', $excursion->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="input-group input-group-outline">
                                        <label >Nom</label>
                                        <input type="text" name="nom" class="form-control" value="{{ $excursion->nom }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="input-group input-group-outline">
                                        <label >Type</label>
                                        <input type="text" name="type" class="form-control" value="{{ $excursion->type }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="input-group input-group-outline">
                                        <label >Capacité</label>
                                        <input type="number" name="capacite" class="form-control" value="{{ $excursion->capacite }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="input-group input-group-outline">
                                        <label >Prix</label>
                                        <input type="number" name="prix" class="form-control" value="{{ $excursion->prix }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="input-group input-group-outline">
                                        <label >description</label>
                                        <input type="text" name="description" class="form-control" value="{{ $excursion->description }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="input-group input-group-outline">
                                        <label >Date</label>
                                        <input type="date" name="timestampe" class="form-control" value="{{ $excursion->timestampe }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn bg-gradient-info w-20" type="submit">Mettre à jour</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

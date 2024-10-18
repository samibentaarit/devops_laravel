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
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats mb-4">
                    <!-- Card content if needed -->
                </div>
            </div>

            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Ajouter Utilisateur</h6>
                        </div>
                    </div>
                    <div class="card-body px-4 pb-4">
                    <form role="form" class="text-start">
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="input-group input-group-outline">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" required>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="input-group input-group-outline">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="input-group input-group-outline">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" required>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="input-group input-group-outline">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="input-group input-group-outline">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" required>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="input-group input-group-outline">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end" >
    <button class="btn bg-gradient-info w-20" type="button" data-target="infoToast">Enregistrer</button>
</div>

</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script>
        // Scripts spécifiques au dashboard
        alert("Dashboard script loaded");
    </script>
@endsection

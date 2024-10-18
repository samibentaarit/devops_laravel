@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats"></div>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Excursions</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">

                                                                <!-- Search Input -->
                                <div class="d-flex justify-content-between" style="margin: 20px;">
                                    <input id="searchInput" class="form-control search-input" type="text" placeholder="Search excursions...">
                                    <a type="button" href="excursions/create" class="btn btn-outline-primary btn-sm mb-0">Add Excursion</a>
                                </div>

                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Capacité</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Prix</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="excursionTable">
                                        @foreach($excursions as $excursion)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $excursion->nom }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $excursion->type }}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{ $excursion->capacite }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{ $excursion->prix }} USD</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{ $excursion->created_at }}</span>
                                            </td>
                                            <td class="pe-0">
                                                <div class="ms-auto text-center">
                                                    <a class="btn btn-link text-danger text-gradient px-1 mb-0" href="javascript:;" onclick="confirmDelete({{ $excursion->id }})">
                                                        <i class="material-icons text-lg me-1">delete</i>
                                                    </a>
                                                    <a class="btn btn-link text-dark px-1 mb-0" href="/editExcursion/{{ $excursion->id }}">
                                                        <i class="material-icons text-lg me-1">edit</i>
                                                   <!-- </a>
                                                    <a class="btn btn-link text-dark px-1 mb-0" href="/viewExcursion/{{ $excursion->id }}">
                                                        <i class="material-icons text-lg me-1">visibility</i>
                                                    </a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      // Search filter function
      document.getElementById('searchInput').addEventListener('keyup', function() {
        let filter = this.value.toLowerCase();
        let rows = document.querySelectorAll('#excursionTable tr');

        rows.forEach(row => {
          let text = row.textContent.toLowerCase();
          if (text.includes(filter)) {
            row.style.display = '';
          } else {
            row.style.display = 'none';
          }
        });
      });

      function confirmDelete(id) {
        Swal.fire({
            title: 'Êtes-vous sûr ?',
            text: "Vous ne pourrez pas revenir en arrière !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, supprimer !'
        }).then((result) => {
            if (result.isConfirmed) {
                // Faire une requête DELETE
                fetch('/excursions/' + id, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}', // N'oubliez pas le token CSRF
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        Swal.fire(
                            'Supprimé !',
                            'Le transport a été supprimé.',
                            'success'
                        ).then(() => {
                            // Rediriger vers la page des transports après la suppression
                            window.location.href = '/excursions';
                        });
                    } else {
                        Swal.fire(
                            'Supprimé !',
                            'Le transport a été supprimé.',
                            'success'
                        ).then(() => {
                            // Rediriger vers la page des transports après la suppression
                            window.location.href = '/excursions';
                        });
                    }
                })
                .catch(error => {
                    Swal.fire(
                        'Erreur !',
                        'Une erreur est survenue lors de la suppression.',
                        'error'
                    );
                });
            }
        });
    }
    </script>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                  <div class="card-header">{{ $job->title }}
                        <p class="card-text">
                            <small class="text-muted float-right">{{ $job->updated_at/*->format('d-m-Y H:m:i')*/ }}</small>
                        </p>
                    </div>
                    <p class="card-body">
                        Type de contrat: {{ $job->type_of_contract }}
                    </p>
                    <p class="card-body">
                        Date de début: {{ $job->begining}}
                        <br>
                        Salaire: {{ $job->salary }} €
                        <br>
                        Localisation: {{ $job->location }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

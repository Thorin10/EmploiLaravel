@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('jobs.create') }}">
                <button type="button" class="btn btn-primary" style="margin-bottom: 15px;">Créer un job</button>
            </a>
        </div>
    </div>
    @foreach($jobs as $key=>$job)
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="data">
                        <div class="card-header">
                            <h5>{{$job->title}}</h5>
                        </div>
                        <div class="card-body">
                            {{$job->description}}
                            <br>
                            <a href="{{ route('jobs.show', $job->id) }}">
                                Lire la suite >>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    @endforeach
@endsection

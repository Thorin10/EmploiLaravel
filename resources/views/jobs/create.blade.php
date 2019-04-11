@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Créer un Post</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('newJob') }}">
                            @csrf
                            <div class="form-group">
                                <label for="title">Titre</label>
                                <input type="text" class="form-control" id="titre" name="title" placeholder="Titre">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="location">Localisation</label>
                                <textarea class="form-control" id="location" rows="3" name="location"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="salary">Salaire €</label>
                                <input type="number" class="form-control" id="salary"  name="salary"></input>
                            </div>
                            <button type="submit" class="btn btn-primary">Créer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
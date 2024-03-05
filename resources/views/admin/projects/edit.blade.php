@extends('layouts.app')

@section('page-title', 'edit progetto')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1>
                        modifica Progetto
                    </h1>

<<<<<<< HEAD
                    <form action="{{ route('admin.projects.store') }}" method="POST">
                        @method('PUT')
=======
                    <form action="{{ route('admin.projects.update',['project' => $project->slug])  }}" method="POST">
                        
                        @method('PUT')

>>>>>>> 020006badcd92e1d451cd31566090baf293b9dd7
                        @csrf

                        <label for="title" class="form-label">Nome Progetto</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il nome del nuovo progetto"
                            maxlength="1024" value="{{$project->title, old('title') }}">
                        @error('thumb')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="content" class="form-label">Descrizione</label>
                        <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content" placeholder="Inserisci la descrizione del progetto"
                            maxlength="1024" value="{{$project->content, old('content') }}">
                        @error('thumb')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        <div>
                            <button type="submit" class="btn btn-success w-100">
                                + Aggiorna
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
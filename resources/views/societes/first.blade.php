@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Completer vos coordonnes </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Pour que etre capable d'ajouter des offres d'emplois , il faut que remplir vos coordonnes . 
                        
                      <form action="{{ route('completesociety') }}" method="post" class="bg-white p-1 contact-form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label> Domaine de la societe </label>
                        <input type="text" class="form-control @error('category') is-invalid @enderror" value="{{ old('category') }}" name="category" >
                        @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                        <div class="form-group">
                            <label> Localisation de la societe </label>
                          <input type="text" class="form-control @error('location') is-invalid @enderror" value="{{ old('location') }}" name="location" >
                          @error('location')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label> Telephone de la societe </label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"  name="phone" >
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        <div class="form-group">
                            <label> Nom du Responsable de la societe </label>
                          <input type="text" class="form-control @error('manincharge') is-invalid @enderror" value="{{ old('manincharge') }}" name="manincharge" >
                          @error('manincharge')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label> Description de la societe </label>
                          <textarea name="description" class="form-control @error('description') is-invalid @enderror"   >{{ old('description') }}</textarea>
                          @error('description')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label> Date de creation de la societe </label>
                            <input type="date" class="form-control @error('creationdate') is-invalid @enderror" value="{{ old('creationdate') }}" name="creationdate" >
                            @error('creationdate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        <div class="form-group">
                            <label> Avatar </label>
                          <input type="file" name="avatar" class="form-control" >
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Valider cette etape" class="btn btn-primary py-3 px-5">
                        </div>
                      </form>
                
                
                
                
                
                
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

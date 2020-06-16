@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile du societe </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
     
                      <form action="{{ route('modifysociety') }}" method='POST' class="bg-white p-1 contact-form">
                        @csrf
                        <div class="form-group">
                          <label> Domaine de la societe </label>
                        <input type="text" class="form-control @error('category') is-invalid @enderror" value="{{ $societe->category }}"  name="category" >
                        @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                        <div class="form-group">
                            <label> Localisation de la societe </label>
                        <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ $societe->location }}" >
                        @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label> Telephone de la societe </label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $societe->phone }}">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        <div class="form-group">
                            <label> Nom du Responsable de la societe </label>
                          <input type="text" class="form-control @error('manincharge') is-invalid @enderror" name="manincharge" value="{{ $societe->manincharge }}">
                          @error('manincharge')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label> Description de la societe </label>
                          <textarea name="description" class="form-control @error('description') is-invalid @enderror"   >{{ $societe->description }}</textarea>
                          @error('descrption')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label> Date de creation de la societe </label>
                            <input type="date" class="form-control" name="creationdate" value="{{ $societe->creationdate }}" >
                            @error('creationdate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        <div class="form-group">
                            <label> Avatar </label>
                          <input type="file" name="avatar" class="form-control" id="">
                          
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Modifier" class="btn btn-primary py-3 px-5">
                        </div>
                      </form>
                
                
                
                
                
                
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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
                        
                    <form action="/stagaire/add" class="bg-white p-1 contact-form" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group">
                            <label> Nom </label>
                          <input type="text" class="form-control" name="firstname" >
                        </div>
                        <div class="form-group">
                            <label> Prenom </label>
                            <input type="text" class="form-control" name="lastname" >
                          </div>
                        <div class="form-group">
                            <label> Telephone </label>
                          <input type="text" class="form-control" name="phone" >
                        </div>
                        <div class="form-group">
                            <label> Etablissement universitaire : </label>
                          <input type="text" class="form-control" name="university"  >
                        </div>
                        <div class="form-group">
                            <label> Age </label>
                            <input type="number" class="form-control" name="age" >
                          </div>
                          <div class="form-group">
                            <label> Level </label>
                            <input type="text" class="form-control" name="level" >
                          </div>
                        <div class="form-group">
                            <label> Cv </label>
                          <input type="file" name="cv" class="form-control" >
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

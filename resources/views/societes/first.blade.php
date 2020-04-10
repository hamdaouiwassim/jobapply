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
                        
                    <form action="#" class="bg-white p-1 contact-form">
                        <div class="form-group">
                            <label> Localisation de la societe </label>
                          <input type="text" class="form-control" name="location" >
                        </div>
                        <div class="form-group">
                            <label> Telephone de la societe </label>
                            <input type="text" class="form-control" name="phone" >
                          </div>
                        <div class="form-group">
                            <label> Nom du Responsable de la societe </label>
                          <input type="text" class="form-control" name="manincharge" >
                        </div>
                        <div class="form-group">
                            <label> Description de la societe </label>
                          <textarea name="description" class="form-control"   ></textarea>
                        </div>
                        <div class="form-group">
                            <label> Date de creation de la societe </label>
                            <input type="date" class="form-control" name="creationdate" >
                          </div>
                        <div class="form-group">
                            <label> Avatar </label>
                          <input type="file" name="avatar" class="form-control" id="">
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

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

                    Pour que etre capable de postuler dans les defferents offres du travaille , il faut completer votre profile . 
                        
                    <form action="#" class="bg-white p-1 contact-form">
                        <div class="form-group">
                            <label> Votre Nom </label>
                          <input type="text" class="form-control" name="firstname" >
                        </div>
                        <div class="form-group">
                            <label> Votre Prenom </label>
                          <input type="text" class="form-control" name="lastname" >
                        </div>
                        <div class="form-group">
                            <label> Votre Telephone  </label>
                            <input type="text" class="form-control" name="phone" >
                          </div>
                        <div class="form-group">
                            <label> Votre Etablissement Universitaire </label>
                          <input type="text" class="form-control" name="university" >
                        </div>
                        <div class="form-group">
                            <label> Votre Promotion  </label>
                            <input type="number" class="form-control" name="promotion" >
                        </div>
                        <div class="form-group">
                            <label> Votre Age </label>
                            <input type="number" class="form-control" name="age" >
                          </div>
                        <div class="form-group">
                            <label> Avatar </label>
                          <input type="file" name="avatar" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label> cv </label>
                          <input type="file" name="cv" class="form-control" id="">
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

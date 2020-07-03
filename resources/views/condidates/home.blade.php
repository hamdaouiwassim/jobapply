@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Stagaire</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <img src="{{ asset('uploads') }}/{{ Auth::user()->avatar }}"  width="200" class="img-thumbnail">
                    <hr />
                    <h2>Informations :</h2>
                    <h3>Email : <span class="text-primary"> {{ Auth::user()->email }}</span></h3>
                    <h3>Nom : <span class="text-primary">{{ Auth::user()->condidate->firstname }}</span></h3>
                    <h3>Prenom : <span class="text-primary">{{ Auth::user()->condidate->lastname }}</span></h3>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
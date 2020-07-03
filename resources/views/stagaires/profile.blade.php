@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile Stagaire </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
     
                      <form action="{{ route('StagaireUpdate')}}" method='POST' class="bg-white p-1 contact-form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label> Nom  </label>
                        <input type="text" class="form-control @error('firstname') is-invalid @enderror" value="{{ auth()->user()->stagaire->firstname }}"  name="firstname" >
                        @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                        <div class="form-group">
                            <label> Prenom </label>
                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ auth()->user()->stagaire->lastname }}" >
                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label> Email  </label>
                          <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ auth()->user()->email }}"  name="email" >
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                          <div class="form-group">
                              <label> Password </label>
                          <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" >
                              @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                          </div>

                          <div class="form-group">
                            <label> Photo Profile  </label>
                          <input type="file" class="form-control @error('avatar') is-invalid @enderror" value="{{ auth()->user()->avatar }}"  name="avatar" >
                        
                        </div>

                        <div class="form-group">
                            <label> CV  </label>
                          <input type="file" class="form-control @error('cv') is-invalid @enderror" value="{{ auth()->user()->cv }}"  name="cv" >
                        
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Liste des utilisateurs </div>

                <div class="card-body">
                    
                    <hr />
            <table id="table"  class="table table-striped ">
                <thead>
                    <tr>
                        <th> Nom utilisateur</th>
                        <th> Email </th>
                        <th> Type </th>
                        <th> Action </th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach( $users as $user )
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->roles }}</td>
                            <td>
                                @if ($user->roles == "Societe")
                                    @if ($user->society->etat == "EN COURS")
                                    <a href="{{ route('validerSociete',['id'=> $user->society->id ]) }}" class="btn btn-primary">Valider</a>
                                    <a href="{{ route('refuserSociete',['id'=> $user->society->id ]) }}" class="btn btn-danger">Refuser</a>
                                    @else
                                        @if ($user->society->etat == "VALIDE")
                                             <span class="text-success"> {{ $user->society->etat }} </span>   
                                        @else
                                                 <span class="text-danger">  {{ $user->society->etat }} </span>   
                                        @endif
                                    @endif
                                @else
                                    --------------
                                @endif
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
</div>
</div>
@endsection
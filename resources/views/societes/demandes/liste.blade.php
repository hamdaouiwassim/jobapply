@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liste des offres </div>

                <div class="card-body">
                    
                    <hr />
            <table id="table"  class="table table-striped ">
                <thead>
                    <tr>
                        <th>Stagaire</th>
                        <th>Description demande</th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $demandes as $demande )
                    
                    <tr>
                        <td>{{ $demande->stagaire->firstname }}</td>
                        <td>{{ $demande->description }}</td>
                        <td>
                            @if ($demande->stat == "EN ATTENTE" )
                            <a href="/societe/demande/{{$demande->id}}/valider" class="btn btn-success">Accepter</a>
                            <a href="/societe/demande/{{$demande->id}}/refuser" class="btn btn-danger">Refuser</a>
                            @else   
                                    @if ($demande->stat == "ACCEPTER" )
                                        <span class="text-success">{{ $demande->stat }}</span>
                                    @else
                                        <span class="text-danger">{{ $demande->stat }}</span>
                                    @endif
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
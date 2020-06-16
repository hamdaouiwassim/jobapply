@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liste des offres </div>

                <div class="card-body">
                    <a href="/societe/offer/add" class="btn btn-info" > Ajouter un offre </a>
                    <hr />
            <table id="table"  class="table table-striped ">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Type Contrat</th>
                        <th>Dernier Date</th>
                        <th>Categorie</th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $offers as $offer )
                    <tr>
                    <td>{{ $offer->name }}</td>
                        <td>{{ $offer->contrat }}</td>
                        <td>{{ $offer->lastday }}</td>
                            @foreach ( $categories as $categorie )
                                @if( $categorie->id == $offer->category )
                                    <td>{{ $categorie->name }}</td>
                                @endif
                            
                            @endforeach
                        
                        <td><a href="/societe/offer/{{$offer->id}}/condidates" class="btn btn-success">Consulter les condidates</a></td>
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
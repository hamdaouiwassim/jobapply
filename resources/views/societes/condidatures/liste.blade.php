@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liste des condidatures pour l'offre {{ $offre->name }} </div>

                <div class="card-body">
                    
                    <hr />
            <table id="table"  class="table table-striped ">
                <thead>
                    <tr>
                        <th>Nom condidate</th>
                        <th>CV</th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $offre->condidatures as $condidature )
                        <tr>
                            <td>{{ $condidature->condidate->firstname }}</td>
                            <td><a href="" class="btn btn-primary">Voir cv </a></td>
                            <td></td>
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